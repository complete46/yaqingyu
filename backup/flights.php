<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 2:49 AM
 */
session_start();
include "connect.php";

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


$depart = $_POST["departure"];
$arrive = $_POST["arrival"];
//echo $depart;
//echo $arrive;

//Show available flights
$sql = "select * from FLIGHT WHERE FLI_DEPART = '".$depart."'"."AND FLI_ARRIVE ='".$arrive."'";
$result = mysql_query($sql);

echo "<hr />";
echo "<table border=\"1\" align=\"center\" >";
echo "<tr>";
echo "<td>From</td><td>To</td><td>Depart Time</td><td>Arrive Time</td><td>Available Tickets</td><td>Action</td>";
echo "</tr>";
while ($row = mysql_fetch_array($result)) {
    $left = ($row[6] - $row[5]);
    echo "<tr>";
    echo "<td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".($row[6] - $row[5])."</td><td><a href = \"confirmbooking.php?data=$row[0]&data2=$left\">Book this ticket</a></td>";
    echo "</tr>";
}
echo "</table>";


?>