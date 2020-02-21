<?php

include_once "connection.php";

// JOSN Data path
$dataPath = (dirname(__FILE__) . "../../data/");

// Base Directory path
$baseDir = "http://shirkatulras.com/Planner/";

$isMessage = array();

// Replace Parameter of query e.g. "SELECT * FROM user WHERE email = @p1 and password = @P2" @p1, @p2 replace from $params variable
function replaceParams($query, $params = array())
{

    $i = count($params);
    foreach ($params as $value) {
        $val = $params[$i - 1];
        if (gettype($val) == "string") {
            $val = "'" . $val . "'";
        } else if (gettype($val) == "boolean") {
            $val = $val ? 1 : 0;
        }
        
        $query = str_replace("@p$i", $val, $query);        

        $i--;
    }

    return $query;

}

// To fetch data from db 
function fetchQuery($query, $params = array())
{
    try {
        global $con;
        if (Count($params)) {
            $query = replaceParams($query, $params);
        }
        $q = mysqli_query($con, $query);
        
        $fetchAllData = mysqli_fetch_all($q, MYSQLI_ASSOC);

        return $fetchAllData;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// To excecute any query which return only in bool(true or false)
function scalarQuery($query, $params = array())
{
    try {
        global $con;
        if (Count($params)) {
            $query = replaceParams($query, $params);
        }
        
        $q = mysqli_query($con, $query);
        if ($q) {
            return true;
        }

        return false;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// Save any data to database and return data with last primary key fill data
function save($data, $table)
{

    try {
        global $con;
        
        $query = "INSERT INTO $table ";
        $selectQuery = "SELECT * FROM $table WHERE 1=1";
        $key = "";
        $values = "";

        $i = 1;
        foreach ($data as $dataKey => $dataValue) {
            $key .= "$dataKey,";
            $values .= replaceParams("@p1,", array ($dataValue));
            $selectQuery .= " AND $dataKey = @p$i";
            $i++;
        }
        $key = "(".substr($key, 0, -1).")";
        $values = "(".substr($values, 0, -1).")";
        $query .= $key." VALUES ".$values;
        
        $q = mysqli_query($con, $query);
        if ($q) {
            $orderByKey = fetchQuery("SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'planner' AND TABLE_NAME = '$table' AND COLUMN_KEY = 'PRI'");
            if (count($orderByKey) && $orderByKey[0]["COLUMN_NAME"]) {
                $columnKey = $orderByKey[0]["COLUMN_NAME"];
                $lastRecord = fetchQuery("SELECT * FROM $table ORDER BY $columnKey DESC LIMIT 1");
                return $lastRecord[0];

            } else {
                $selectQuery .=  " LIMIT 1";
                $lastRecord = fetchQuery($selectQuery, array_values($data));
                if ($lastRecord) {
                    return $lastRecord[0];
                } else {
                    return false;
                }
            }
        }

        return false;
    } catch (Exception $e) {
        echo $e->getMessage();
    }

}

// to verify if a $variable is undefined if $variable is undefined its return $default value
function ifsetor(&$variable, $default = null)
{
    if (isset($variable)) {
        $tmp = $variable;
    } else {
        $tmp = $default;
    }
    return $tmp;
}

// to verify if a $variable is null or empty if $variable is null or empty its return $default value
function ifnullorblank(&$variable, $default = null)
{
    if (!is_null($variable) && !empty($variable)) {
        $tmp = $variable;
    } else {
        $tmp = $default;
    }
    return $tmp;
}

// Read file of json from data folder and return json data from file
function readFileJson($name)
{
    global $dataPath;

    $path = $dataPath . $name . ".json";
    $strJsonFileContents = file_get_contents($path);

    $array = json_decode($strJsonFileContents, true);

    return $array;

}

// $fields is requested fields data which request from Form
// $requestType defined that what the type of the Request (POST or GET)
// $type is defined to convert that requested data into (integer, boolean, float, string(default))
function getRequestData($Fields = array(), $requestType, $type = array())
{
    try {
        $data = array();
        if ($requestType == "post") {
            $request = $_POST;
        } else if ($requestType == "get") {
            $request = $_GET;
        } else {
            throw new Exception("Request type Error");
        }

        foreach ($Fields as $val) {
            if (substr($val, 0, 3) === "chk")
                if (isset($request[$val]))
                    $requestValue = $request[$val] == "on" ? true : $request[$val];
                else 
                    $requestValue = false;
            else
                $requestValue = ifsetor($request[$val]);

            if (isset($type[$val]))
                if ($type[$val] === "integer")
                    $requestValue = (integer) $requestValue;
                else if ($type[$val] === "string")
                    $requestValue = (string) $requestValue;
                else if ($type[$val] === "float")
                    $requestValue = (float) $requestValue;
                else if ($type[$val] === "boolean")
                    $requestValue = (boolean) $requestValue;

            $data[$val] = $requestValue;
        }

        return $data;

    } catch (Exception $e) {
        throw $e->getMessage();
    }

}

// maintain error message to show on top dropdown notification
function error($message)
{
    global $isMessage;

    $isMessage["show"] = true;
    $isMessage["msg"] = $message;
    $isMessage["status"] = false;
    $_SESSION["message"] = $isMessage;
}

// maintain success message to show on top dropdown notification
function success($message, $show = true)
{
    global $isMessage;

    $isMessage["show"] = isset($show) && $show == false ? false : true;
    $isMessage["msg"] = $message;
    $isMessage["status"] = true;
    $_SESSION["message"] = $isMessage;
}

// maintain the style class of notification which is call from UI
function isNotify($x) {
    global $isMessage;

    
    if (isset($_SESSION["message"]) && !Count($isMessage)) {
        $isMessage = ifsetor($_SESSION["message"], array());
        unset($_SESSION["message"]);
    }
    
    if ((Count($isMessage) && $isMessage["show"])) {
        if ($x == "show")
            return 'class="notices-open"';
        else if ($x == "msg")
            return ifsetor($isMessage["msg"]);
        else if ($x == "color")
            return isset($isMessage["status"]) && $isMessage["status"] ? "green" : "red";
    }
}

// return the baseDirectory path
function baseUrl () {
    global $baseDir;

    // $address = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_ADDR"];

    // if ($_SERVER["SERVER_PORT"])
    //     $address .= ":".$_SERVER["SERVER_PORT"];
        
    // return $address . "/" . $baseDir;

    return $baseDir;
}
