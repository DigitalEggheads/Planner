<?php
include_once "base.php";


function adminLogin($data)
{
    global $message;
    global $_SESSION;

    $query = "select * from auth where User_Role = 'admin' and User_email = @p1 and User_Password = @p2";
    $data["User_Password"] = md5($data["User_Password"]);

    $res = fetchQuery($query, array_values($data));

    if ($res && Count($res) == 1) {
        session_start();
        $_SESSION["adminLogin"] = true;

        $query = "select user.*, pictures.path picture from user ";
        $query .= "left join pictures on pictures.id = defaultPictureId ";
        $query .= "where authId = @p1";
        $userRes = fetchQuery($query, array($res[0]["id"]));

        $_SESSION["authObjectAdmin"] = $res[0];
        $_SESSION["userObjectAdmin"] = $userRes[0];

        return true;
    }
    error("Invalid Email or Password");
    return false;

}


function login($data)
{
    global $message;
    global $_SESSION;

    $query = "select * from auth where User_Role = 'user' and User_email = @p1 and User_Password = @p2";
    $data["User_Password"] = md5($data["User_Password"]);

    $res = fetchQuery($query, array_values($data));

    if ($res && Count($res) == 1) {
        session_start();
        $_SESSION["login"] = true;

        $query = "select user.*, pictures.path picture from user ";
        $query .= "left join pictures on pictures.id = defaultPictureId ";
        $query .= "where authId = @p1";
        $userRes = fetchQuery($query, array($res[0]["id"]));

        $query = "select * from userAttribute where authId = @p1 and isMine = 1";
        $mineAttributeRes = fetchQuery($query, array($res[0]["id"]));

        $query = "select * from userAttribute where authId = @p1 and isMine = 0";
        $lookingAttributeRes = fetchQuery($query, array($res[0]["id"]));
        
        $_SESSION["mineAttribute"] = ifsetor($mineAttributeRes[0], array());
        $_SESSION["lookingAttribute"] = ifsetor($lookingAttributeRes[0], array());
        $_SESSION["authObject"] = $res[0];
        $_SESSION["userObject"] = $userRes[0];


        $query = "select * from session where authId = @p1";
        $userRes = fetchQuery($query, array($res[0]["id"]));
        if (count($userRes)) {
            $query = "update session set activeOn = now(), isActive = 1 where authId = @p1";
            scalarQuery($query, array($res[0]["id"]));
        } else {
            $data = array();
            $data["authId"] = $res[0]["id"];
            save($data, "session");
        }


        return true;
    }
    error("Invalid Email or Password");
    return false;
}

function signup ($data) {
    global $message;
    
    $authData = array();
    $userData = array();
    $authData["User_email"] = $data["User_email"];
    $authData["User_Password"] = md5($data["User_Password"]);
    $authData["User_Role"] = "user";
    
    $checkQuery = "select * from auth where User_email = @p1";
    $checkRes = fetchQuery($checkQuery, array($authData["User_email"]));
    
    if (!Count($checkRes)) {
        $authRes = save($authData, "auth");
        
        if ($authRes) {
            $userData["authid"] = $authRes["id"];
            $userData["name"] = $data["name"];
            $userData["gender"] = $data["gender"];
            $userData["age"] = $data["age"];
            $userData["lookingfor"] = $data["lookingFor"];
            
            $userRes = save($userData, "user");
            if ($userRes) {
                success("Signup Successfully");
                return true;
            }
        }
    } else {
        error("Email Already Exists");
        return false;
    }

    error("Error While Saving");
    return false;
}


// function logout () {
//     session_start();
    
//     $query = "update session set endOn = now(), isActive = 0 where authId = @p1";
//     scalarQuery($query, array($_SESSION["authObject"]["id"]));

//     // session_destroy();
//     destroyUserSession();

//     header("location: ../templates/auth/login.php");
// }

function adminLogout () {
    session_start();   
    $query = "update session set endOn = now(), isActive = 0 where authId = @p1";
    scalarQuery($query, array($_SESSION["authObject"]["id"]));
    // session_destroy();
    destroyAdminSession();
    
    header("location: ../Admin/index.php");
}

function destroyUserSession () {
    unset($_SESSION["userObject"]);
    unset($_SESSION["authObject"]);
    unset($_SESSION["mineAttribute"]);
    unset($_SESSION["lookingAttribute"]);
    unset($_SESSION["login"]);
}

function destroyAdminSession () {
    unset($_SESSION["authObjectAdmin"]);
    unset($_SESSION["userObjectAdmin"]);
    unset($_SESSION["adminLogin"]);
}


if (isset($_GET["logout"])) {
    logout();
} else if (isset($_POST["adminLogout"])) {
    adminLogout();
}