<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/19/15
 * Time: 10:54 PM
 */
session_start();
include "connect.php";
$uname = $_POST["name"];
$pwd = $_POST["pw"];

//Transit php to login
$sql = "select USER_USERNAME, USER_PASSWORD, USER_ISCUSTOMER, USER_ID from USER WHERE USER_USERNAME = '".$uname."'";
$result = mysql_query($sql);

$row = mysql_fetch_row($result);


if (strcmp($pwd, $row[1]) == 0) {
    $_SESSION["info"] = array($row[0]);
    $_SESSION["userid"] = array($row[3]);
    if ($row[2] == 1) {
        header("Location: customer.php");
    } else {
        header("Location: employee.php");
    }
} else {
    header("Location: error.php");
}

?>