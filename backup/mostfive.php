<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 4:43 PM
 */

session_start();
include "connect.php";

$uname = $_SESSION["info"][0];
//$_SESSION["info"] = array($uname);

$st = $_POST["startdate"];
$et = $_POST["enddate"];


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

//Get top 5 booked flights
$sql = "select * from FLIGHT WHERE date(FLIGHT.DEPART_TIME) >= '".$st."' and date(FLIGHT.DEPART_TIME) <= '".$et."' order by FLIGHT.SEAT_ASSIGN desc limit 5;";
$result = mysql_query($sql);

echo "<hr />";
echo "<table border=\"1\" align=\"center\" >";
echo "<tr>";
echo "<td>From</td><td>To</td><td>Depart Time</td><td>Arrive Time</td><td>Booked Tickets</td>";
echo "</tr>";
while ($row = mysql_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td>";
        echo "</tr>";
}
echo "</table>";

?>

