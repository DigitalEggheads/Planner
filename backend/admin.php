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

  function getAllTripPlannerQueries () {
    $query = "select * from travel_planner ";
    // $query .= "inner join user on auth.id = user.authId ";
    $query .= "where TP_isTrashed = 0";
    $res = fetchQuery($query);
    return $res;
  }


  function AddHotel ($data) {
    // global $message;
    $Hotel_Featured_Image = $_FILES["Hotel_Featured_Image"]["name"];
    $target_dir = "../../HotelImages/";
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
            $AddHotels["Hotel_Map_Iframe"] = str_replace("'", "''", $data["Hotel_Map_Iframe"]);
            $AddHotels["Hotel_Description"] = str_replace("'", "''", $data["Hotel_Description"]);
            $AddHotels["Hotel_isTrashed"] = $data["Hotel_isTrashed"];
           
            // print_r($AddHotels);
            $AddHotelsRes = save($AddHotels, "hotels");
            if ($AddHotelsRes) {
                UploadGallaryImages($AddHotelsRes["Hotel_Id"]);
                return true;
            //     $Hotel_Galley_Image = $_FILES["Hotel_Galley_Image"]["name"];
            //     $target_dir_Gallery = "../../HotelImages/Gallery/";
            //     $data["Hotel_Galley_Image"] = $target_dir_Gallery.$Hotel_Galley_Image;

            // $AddHotelsGallery["Hotel_Id"] = $AddHotelsRes["Hotel_Id"];
            // $AddHotelsGallery["Hotel_Featured_Image"] = $data["Hotel_Featured_Image"];
            
            // $AddHotelsGalleryRes = save($AddHotelsGallery, "hotels_gallery");
            // if ($AddHotelsGalleryRes) {
            //     success("Signup Successfully");
            //     return true;
            // }
        }
    //  } else {
    //     error("Email Already Exists");
    //     return false;
    // }

    error("Error While Saving");
    return false;
}


function UploadGallaryImages ($hotel_Id) {

    $target_dir_Gallery = "../../HotelImages/Gallery/";
    $Hotel_Galley_Multiple_Images = $_FILES["Hotel_Galley_Image"];
    // print_r($_FILES["Hotel_Galley_Image"]);
    $Uploaded_Gallary_data = array();
    for ($i=0; $i < Count($Hotel_Galley_Multiple_Images["name"]); $i++) {
      $file = $Hotel_Galley_Multiple_Images;

      $name = $file['name'][$i];
      $temp = $file['tmp_name'][$i];
      $extension = explode('.',$name);
      $extension = strtolower(end($extension));
      $store = $target_dir_Gallery . $name;
      // $store = sprintf($target_dir_Gallery.'%s.%s',uniqid(),$extension);

      if (move_uploaded_file($temp,$store)) {
        $data = array();
        $data["Hotel_Galley_Image"] = $store;
        $data["Hotel_Id"] = $hotel_Id;
        $data["Hotel_Galley_Image_isTrashed"] = "0";

        $AddHotelsGalleryRes = save($data, "hotels_gallery");
        if ($AddHotelsGalleryRes) {
            array_push($Uploaded_Gallary_data, $AddHotelsGalleryRes);            
        }
      }
    }

    if (count($Hotel_Galley_Multiple_Images) == count($Uploaded_Gallary_data)) {
        return true;
    }
    else {
        return false;
    }

}


?>