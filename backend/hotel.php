<?php
  include_once "base.php";

  function getAllReviews () {
    $query = "select * from hotels_reviews ";
    // $query .= "inner join user on hotels.id = hotels.authId ";
    // $query .= "where role = 'hotels' ";
    $query .= "where Hotel_Review_isApproved = 1";
    $res = fetchQuery($query);
    return $res;
  }
  
  
?>