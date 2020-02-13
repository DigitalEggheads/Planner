<?php
  include_once "base.php";

  
  function destroyAdminSession () {
    unset($_SESSION["adminLogin"]);
  }
  
  function getDashboardData () {
    $res = array();

    $query = "select count(*) c from hotels ";
    // $query .= "inner join user on hotels.id = hotels.authId ";
    // $query .= "where role = 'hotels' ";
    $res["allhotels"] = fetchQuery($query)[0]["c"];

    $query = "select count(*) c from hotels_queries ";
    // $query .= "inner join user on hotels.id = hotels.authId ";
    // $query .= "where role = 'hotels' ";
    $res["allhotelsqueries"] = fetchQuery($query)[0]["c"];

    $query = "select count(*) c from hotels_reviews ";
    // $query .= "inner join user on hotels.id = hotels.authId ";
    // $query .= "where role = 'hotels' ";
    $query .= "where Hotel_Review_isApproved = 1";
    $res["allhotelsreviews"] = fetchQuery($query)[0]["c"];

    $query = "select count(*) c from emails ";
    // $query .= "inner join user on hotels.id = hotels.authId ";
    // $query .= "where role = 'hotels' ";
    $res["allemails"] = fetchQuery($query)[0]["c"];

    return $res;

  }

  function getAllHotels () {
    $query = "select * from hotels ";
    // $query .= "inner join user on auth.id = user.authId ";
    // $query .= "where role = 'user' ";
    $res = fetchQuery($query);
    return $res;
  }
  
  function getAllApprovedReviews () {
    $query = "select * from hotels_reviews ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where Hotel_Review_isApproved = 1";
    $res = fetchQuery($query);
    return $res;
  }

  function getAllUnapprovedReviews () {
    $query = "select * from hotels_reviews ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where Hotel_Review_isApproved = 0";
    $res = fetchQuery($query);
    return $res;
  }
  
  
?>