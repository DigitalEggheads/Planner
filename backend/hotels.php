<?php
  include_once "base.php";

  function getAllHotels () {
    $query = "select * from hotels ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where Hotel_isTrashed = 0";
    $res = fetchQuery($query);
    return $res;
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