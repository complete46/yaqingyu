<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 3:21 PM
 */

session_start();
$uname = $_SESSION["info"][0];
//$_SESSION["info"] = array($uname);

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

include "connect.php";
$sql = "select DISTINCT FLIGHT_ID from BOOKING";
$result1 = mysql_query($sql);

//Get all flights have been booked at least once

echo "<hr />";
echo "<table border=\"1\" align=\"center\" >";
echo "<tr>";
echo "<td>From</td><td>To</td><td>Depart Time</td><td>Arrive Time</td><td>Booked Tickets</td><td>Action</td>";
echo "</tr>";
while ($row2 = mysql_fetch_array($result1)) {
    $sql = "select * from FLIGHT where FLIGHT_ID = '".$row2[0]."'";
    $result2 = mysql_query($sql);
    $row = mysql_fetch_array($result2);
    echo "<tr>";
    echo "<td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" .$row[5]. "</td><td><a href = \"passengerlist.php?data=$row[0]\">Get passenger list</a></td>";
    echo "</tr>";
}
echo "</table>";

?>