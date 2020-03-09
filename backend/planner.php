<?php
  include_once "base.php";

  function TP_Submit ($data) {
    // global $message;
    
    
    
    // if (!Count($checkRes)) {
        // $authRes = save($authData, "hotels_queries");
        
            $TP_Submit_Data["TP_Name"] = $data["TP_Name"];
            $TP_Submit_Data["TP_Whatsapp_Number"] = $data["TP_Whatsapp_Number"];
            $TP_Submit_Data["TP_Email"] = $data["TP_Email"];
            $TP_Submit_Data["TP_Dep_Country"] = $data["TP_Dep_Country"]; 
            $TP_Submit_Data["TP_Dep_City"] = $data["TP_Dep_City"];
            $TP_Submit_Data["TP_Dep_Date"] = date("Y-m-d", strtotime($data["TP_Dep_Date"]));
            $TP_Submit_Data["TP_Arr_Date"] = date("Y-m-d", strtotime($data["TP_Arr_Date"]));
            $TP_Submit_Data["TP_Adults"] = $data["TP_Adults"];
            $TP_Submit_Data["TP_Children"] = $data["TP_Children"];
            $TP_Submit_Data["TP_Arr_Country_Iraq"] = $data["TP_Arr_Country_Iraq"];
            $TP_Submit_Data["TP_Arr_Country_Iran"] = $data["TP_Arr_Country_Iran"];
            $TP_Submit_Data["TP_Arr_Country_Syria"] = $data["TP_Arr_Country_Syria"];
            $TP_Submit_Data["TP_Arr_Country_KSA"] = $data["TP_Arr_Country_KSA"];
            $TP_Submit_Data["TP_Ticket_Assistance"] = $data["TP_Ticket_Assistance"];
            $TP_Submit_Data["TP_Visa_Assistance"] = $data["TP_Visa_Assistance"];
            $TP_Submit_Data["TP_Guide_Assistance"] = $data["TP_Guide_Assistance"];
            $TP_Submit_Data["TP_Transport"] = $data["TP_Transport"];
            $TP_Submit_Data["TP_Hotel_Type"] = $data["TP_Hotel_Type"];
            $TP_Submit_Data["TP_isTrashed"] = $data["TP_isTrashed"];
           
            
            $TP_Submit_DataRes = save($TP_Submit_Data, "travel_planner");
            if ($TP_Submit_DataRes) {
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

