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

$bookid = $_GET["data"];

//echo $uname;

//echo $userid;
//echo "</br>";
//echo $flightid;
//$_SESSION["info"] = array($uname);

$sql = "DELETE FROM BOOKING WHERE BOOKING_ID ='".$bookid."'";
$result = mysql_query($sql);

header("Location: future.php");


?>