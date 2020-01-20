<?php
  include_once "base.php";

  $authObjectAdmin = ifsetor($_SESSION["authObjectAdmin"]);
  $userObjectAdmin = ifsetor($_SESSION["userObjectAdmin"]);
  
  function destroyAdminSession () {
    unset($_SESSION["authObjectAdmin"]);
    unset($_SESSION["userObjectAdmin"]);
    unset($_SESSION["adminLogin"]);
  }
  
  function getDashboardData () {
    $res = array();

    $query = "select count(*) c from auth ";
    $query .= "inner join user on auth.id = user.authId ";
    $query .= "where role = 'user' ";
    $res["allUsers"] = fetchQuery($query)[0]["c"];
    
    $query = "select count(*) c from session ";
    $query .= "inner join auth on auth.id = session.authId ";
    $query .= "inner join user on session.authId = user.authId ";
    $query .= "where isActive = 1";
    $res["onlineUsers"] = fetchQuery($query)[0]["c"];

    $query = "select count(*) c from (SELECT count(ru.authId) reprotedUserCount ";
    $query .= "FROM reportedUser ru ";
    $query .= "inner join auth on ru.reportedAuthId = auth.id ";
    $query .= "inner join user on user.authId = auth.id ";
    $query .= "where ru.isApproved = 0 and isRejected = 0 ";
    $query .= "group by ru.reportedAuthId) a";
    $res["reportedProfiles"] = fetchQuery($query)[0]["c"];

    $query = "select count(*) c from (SELECT count(ru.authId) reprotedUserCount ";
    $query .= "FROM reportedUser ru ";
    $query .= "inner join auth on ru.reportedAuthId = auth.id ";
    $query .= "inner join user on user.authId = auth.id ";
    $query .= "where ru.isApproved = 1 and isRejected = 0 ";
    $query .= "group by ru.reportedAuthId) a";
    $res["reportedProfileApproved"] = fetchQuery($query)[0]["c"];

    return $res;

  }

  function getAllUsers () {
    $query = "select * from auth ";
    $query .= "inner join user on auth.id = user.authId ";
    $query .= "where role = 'user' ";
    $res = fetchQuery($query);
    return $res;
  }
  
  function getOnlineUsers () {
    $query = "select * from session ";
    $query .= "inner join auth on auth.id = session.authId ";
    $query .= "inner join user on session.authId = user.authId ";
    $query .= "where isActive = 1";
    $res = fetchQuery($query);
    return $res;
  }

  function getReportedProfiles () {

    $query = "SELECT auth.email, user.name, user.age, user.gender, user.lookingFor, user.accountVerified, count(ru.authId) reprotedUserCount ";
    $query .= "FROM reportedUser ru ";
    $query .= "inner join auth on ru.reportedAuthId = auth.id ";
    $query .= "inner join user on user.authId = auth.id ";
    $query .= "where ru.isApproved = 0 and isRejected = 0 ";
    $query .= "group by ru.reportedAuthId ";
    $res = fetchQuery($query);
    return $res;
  }

  function getReportedProfileApproved () {

    $query = "SELECT auth.email, user.name, user.age, user.gender, user.lookingFor, user.accountVerified, count(ru.authId) reprotedUserCount ";
    $query .= "FROM reportedUser ru ";
    $query .= "inner join auth on ru.reportedAuthId = auth.id ";
    $query .= "inner join user on user.authId = auth.id ";
    $query .= "where ru.isApproved = 1 and isRejected = 0 ";
    $query .= "group by ru.reportedAuthId ";
    $res = fetchQuery($query);
    return $res;
  }
  

  
?>