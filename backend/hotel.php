<?php
  include_once "base.php";

 function getAllReviews () {
    $query = "select * from hotels_reviews ";
    // $query .= "inner join user on hotels.id = hotels.authId ";
    // $query .= "where role = 'hotels' ";
    $query .= "where Hotel_Review_isApproved = 1 and Hotel_ID = ".$_GET["Hotel_Id"];
    $res = fetchQuery($query);
    return $res;
  }
  


  
  function HotelQuery ($data) {
    // global $message;
    
    
    
    // if (!Count($checkRes)) {
        // $authRes = save($authData, "hotels_queries");
        
        
            $HotelQueries["Hotel_Query_Name"] = $data["Hotel_Query_Name"];
            $HotelQueries["Hotel_Query_Email"] = $data["Hotel_Query_Email"];
            $HotelQueries["Hotel_Query_Contact_Number"] = $data["Hotel_Query_Contact_Number"];
            $HotelQueries["Hotel_Url"] = $data["Hotel_Url"];
            $HotelQueries["Hotel_Title"] = $data["Hotel_Title"];
            $HotelQueries["Hotel_Query_Children"] = $data["Hotel_Query_Children"];
            $HotelQueries["Hotel_Query_Adult"] = $data["Hotel_Query_Adult"];
            $HotelQueries["Hotel_Query_Check_In"] = date("Y-m-d", strtotime($data["Hotel_Query_Check_In"]));
            $HotelQueries["Hotel_Query_Check_Out"] = date("Y-m-d", strtotime($data["Hotel_Query_Check_Out"]));
            
            $HotelQueriesRes = save($HotelQueries, "hotels_queries");
            if ($HotelQueriesRes) {
                success("Query Has Been Submited");
                return true;
            }
        
    //  } else {
    //     error("Email Already Exists");
    //     return false;
    // }

    error("Error While Saving");
    return false;
}



  function HotelReview ($data) {
    // global $message;
    
    
    
    // if (!Count($checkRes)) {
        // $authRes = save($authData, "hotels_queries");
        
        
            $HotelReviews["Hotel_Id"] = $data["Hotel_Id"];
            $HotelReviews["Hotel_Review_Name"] = $data["Hotel_Review_Name"];
            $HotelReviews["Hotel_Review_Email"] = $data["Hotel_Review_Email"];
            $HotelReviews["Hotel_Review_Reviews"] = $data["Hotel_Review_Reviews"];
            $HotelReviews["Hotel_Review_Details"] = $data["Hotel_Review_Details"];
            $HotelReviews["Hotel_Review_isApproved"] = $data["Hotel_Review_isApproved"];
            $HotelReviews["Hotel_Review_Date"] = date("Y-m-d", strtotime($data["Hotel_Review_Date"]));
           
            
            $HotelReviewsRes = save($HotelReviews, "hotels_reviews");
            if ($HotelReviewsRes) {
                success("Query Has Been Submited");
                return true;
            }
        
    //  } else {
    //     error("Email Already Exists");
    //     return false;
    // }

    error("Error While Saving");
    return false;
}
?>