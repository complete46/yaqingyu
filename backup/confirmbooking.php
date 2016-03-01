<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 11:47 AM
 */
//Transit php to operate on databse
session_start();
include "connect.php";

$uname = $_SESSION["info"][0];
$userid = $_SESSION["userid"][0];

$over = $_GET["data2"];

if ($over <= 0) {
    header("Location: overbook.php");
} else {

    $flightid = $_GET["data"];


//echo $uname;

//echo $userid;
//echo "</br>";
//echo $flightid;
//$_SESSION["info"] = array($uname);

    $sql = "INSERT INTO BOOKING(CUST_ID, FLIGHT_ID) VALUES ('" . $userid . "','" . $flightid . "');";
    $result = mysql_query($sql);

    header("Location: future.php");
}

?>