<?php
  include_once "base.php";

  function getAllHotels () {
    $query = "select * from hotels ";
    // $query .= "inner join user on auth.id = user.authId ";
    // $query .= "where role = 'user' ";
    $res = fetchQuery($query);
    return $res;
  }
  
  
?>