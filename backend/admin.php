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
    $query .= "where Hotel_Review_isApproved = 1 and Hotel_Review_isTrashed = 0";
    $res = fetchQuery($query);
    return $res;
  }

  function getAllUnapprovedReviews () {
    $query = "select * from hotels_reviews ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where Hotel_Review_isApproved = 0 and Hotel_Review_isTrashed = 0";
    $res = fetchQuery($query);
    return $res;
  }


  function AddHotel ($data) {
    // global $message;
    $Hotel_Featured_Image = $_FILES["Hotel_Featured_Image"]["name"];
    $target_dir = "HotelImages/";
    $data["Hotel_Featured_Image"] = $target_dir.$Hotel_Featured_Image;

    
    
    // if (!Count($checkRes)) {
        // $authRes = save($authData, "hotels_queries");
                
        
            $AddHotels["Hotel_Featured_Image"] = $data["Hotel_Featured_Image"];
            $AddHotels["Hotel_Title"] = $data["Hotel_Title"];
            $AddHotels["Hotel_Location"] = $data["Hotel_Location"];
            $AddHotels["Hotel_Price"] = $data["Hotel_Price"];
            $AddHotels["Hotel_Destination"] = $data["Hotel_Destination"];
            $AddHotels["Hotel_City"] = $data["Hotel_City"];
            $AddHotels["Hotel_Type"] = $data["Hotel_Type"];
            $AddHotels["Hotel_Distance"] = $data["Hotel_Distance"];
            $AddHotels["Hotel_Map_Iframe"] = $data["Hotel_Map_Iframe"];
            $AddHotels["Hotel_Description"] = $data["Hotel_Description"];
            $AddHotels["Hotel_isTrashed"] = $data["Hotel_isTrashed"];
           
            
            $AddHotelsRes = save($AddHotels, "hotels");
            if ($AddHotelsRes) {


                $Hotel_Galley_Image = $_FILES["Hotel_Galley_Image"]["name"];
                $target_dir_Gallery = "HotelImages/Gallery/";
                $data["Hotel_Galley_Image"] = $target_dir_Gallery.$Hotel_Galley_Image;


                $AddHotelsGallery["Hotel_Galley_Image"] = $data["Hotel_Galley_Image"];
                $AddHotelsGallery["Hotel_Id"] = $AddHotelsRes["Hotel_Id"];
                
                $AddHotelsGalleryRes = save($AddHotelsGallery, "user");

                if ($AddHotelsGalleryRes) {
                success("Signup Successfully");
                return true;
                }

              // print_r($AddHotelsRes["Hotel_Id"]);
                // success("Query Has Been Submited");
                // return true;
            }
        
    //  } else {
    //     error("Email Already Exists");
    //     return false;
    // }

    error("Error While Saving");
    return false;
}
  
  
?>