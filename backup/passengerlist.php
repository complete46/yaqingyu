<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 3:58 PM
 */

session_start();
include "connect.php";

$uname = $_SESSION["info"][0];
//$_SESSION["info"] = array($uname);

$flightid = $_GET["data"];

//Functions display, on top


echo "<table width =\"600\" border=\"0\" align=\"center\" >";
echo "<tr>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"employee.php\"><h5>Personal Information</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"passenger.php\"><h5>Passenger List</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"popular.php\"><h5>Popular Flights</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"index.html\"><h5>Logout</h5></a></div>";
echo "</td>";
echo "</tr>";
echo"</table>";

$sql = "select CUST_ID from BOOKING WHERE FLIGHT_ID = '".$flightid."'";
$result1 = mysql_query($sql);
//All passenger on a particular flight
echo "<hr />";
echo "<table border=\"1\" align=\"center\" >";
echo "<tr>";
echo "<td>ID</td><td>First Name</td><td>Last Name</td><td>Email</td>";
echo "</tr>";
while ($row2 = mysql_fetch_array($result1)) {
    $sql = "select * from USER where USER_ID = '".$row2[0]."'";
    $result2 = mysql_query($sql);
    $row = mysql_fetch_array($result2);
    echo "<tr>";
    echo "<td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>