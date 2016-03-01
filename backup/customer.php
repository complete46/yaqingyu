<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/19/15
 * Time: 10:38 PM
 */

session_start();
$uname = $_SESSION["info"][0];
//$_SESSION["info"] = array($uname);

//Functions display, on top


echo "<table width =\"900\" border=\"0\" align=\"center\" >";
echo "<tr>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"customer.php\"><h5>Personal Information</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"booking.php\"><h5>Booking Flights</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"cancel.php\"><h5>Cancel Flights</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"past.php\"><h5>Past Flights</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"future.php\"><h5>Future Flights</h5></a></div>";
echo "</td>";
echo "<td width = \"150\" height = \"15\">";
echo "<div><a href=\"index.html\"><h5>Logout</h5></a></div>";
echo "</td>";
echo "</tr>";
echo"</table>";

//Show customer personal information
include "connect.php";
$sql = "select * from USER WHERE USER_USERNAME = '".$uname."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

echo "<hr />";
echo "<table border=\"1\" align=\"center\" >";
echo "<tr>";
echo "<td>ID</td><td>First Name</td><td>Last Name</td><td>Email</td>";
echo "</tr><tr>";
echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>";
echo "</tr>";
?>