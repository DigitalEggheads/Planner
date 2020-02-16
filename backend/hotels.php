<?php
  include_once "base.php";

  function getAllHotels ($search) {
    $query = "select * from hotels ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where Hotel_isTrashed = 0 ";

    $criteriaQuery = makeUserQueryByCriteria($search, true);

    $res = fetchQuery($query);
    return $res;
  }



  function makeUserQueryByCriteria ($search, $skipEmptyValue = false) {
    $searchKeys = array_keys($search);

    $query = "select * from hotels ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where Hotel_isTrashed = 0 ";

    $query = replaceParams($query, $params);
    $useKey = array();
    $orderBy = "";
    
    foreach ($searchKeys as $key => $value) {
  
      $explodedValue = explode("-", $value);
      
      $fieldKey = ifsetor($explodedValue[1], $explodedValue[0]);
      $fieldValue = $search[$value];

      $seperator = $explodedValue[1] != "" ? $explodedValue[0] : "";
      
      if ($fieldKey == "sortby") {
        if ($seperator == "asc")
          $orderBy = $fieldValue . " ASC";
          else if ($seperator == "desc")
          $orderBy = $fieldValue . " DESC";
          else if ($seperator == "cus")
          $orderBy = $fieldValue;
        continue;
      }

      if (in_array($value, $useKey))
        continue;
      else if ($skipEmptyValue && !$fieldValue) {
        continue;
      }
      array_push($useKey, $value);
      
      if ($seperator) {
        $moreExplode = explode("_", $seperator);
        $seperator = ifsetor($moreExplode[0], "");
        $otherSeperator = Count($moreExplode) > 1 ? $seperator[1] : "";

        if ($seperator == "min") {
          $secondaryValue = "max-".$fieldKey;
          
          $condition = "$fieldKey >= ".replaceParams("@p1", array($fieldValue));

          if (in_array($secondaryValue, $searchKeys)) {
            array_push($useKey, $secondaryValue);
            $condition = "($condition AND $fieldKey <= ".replaceParams("@p1", array($search[$secondaryValue])).")";
          }

        } else if ($seperator == "max") {
          $secondaryValue = "min-".$fieldKey;

          $condition = "$fieldKey <= ".replaceParams("@p1", array($fieldValue));

          if (in_array($secondaryValue, $searchKeys)) {
            array_push($useKey, $secondaryValue);
            $condition = "($condition AND $fieldKey >= ".replaceParams("@p1", array($search[$secondaryValue])).")";
          }

        } else if ($seperator == "in") {
          $condition = "$fieldKey IN (".$fieldValue.")";
        } else if ($seperator == "cus") {
          $condition = $fieldValue;
        } else {
          $condition = "$fieldKey = ".replaceParams("@p1", array($fieldValue));
        }
      } else {
        $condition = "$fieldKey = ".replaceParams("@p1", array($fieldValue));
      }


      $query .= " AND $condition ";


      // $keyFound = searchKeyFind($searchKeys, $value);
      // print_r($keyFound);
      // if ($keyFound)

    }

    if ($orderBy)
      $query .= " order by ".$orderBy;

    return $query;
  }




  $mysqli = mysqli_connect('localhost', 'root', '', 'planner');

    // Get the total number of records from our table "students".
    $total_pages = $mysqli->query('SELECT COUNT(*) FROM hotels')->fetch_row()[0];

    // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

    // Number of results to show on each page.
    $num_results_on_page = 4;

    //now we need to get the records from the database for the current page, the following code below will do just that.

    if ($stmt = $mysqli->prepare('SELECT * FROM hotels ORDER BY Hotel_Id LIMIT ?,?')) {
        // Calculate the page to get the results we need from our table.
        $calc_page = ($page - 1) * $num_results_on_page;
        $stmt->bind_param('ii', $calc_page, $num_results_on_page);
        $stmt->execute(); 
        // Get the results...
        $page_result = $stmt->get_result();
        $stmt->close();
    }
  
  
?>