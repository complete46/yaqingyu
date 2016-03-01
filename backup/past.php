<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 12:14 PM
 */

session_start();
include "connect.php";

$uname = $_SESSION["info"][0];
$userid = $_SESSION["userid"][0];
date_default_timezone_set ("UTC");

//$_SESSION["info"] = array($uname);



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

$sql = "select FLIGHT_ID from BOOKING WHERE CUST_ID = '".$userid."'";
$result1 = mysql_query($sql);

echo "<hr />";
echo "<table border=\"1\" align=\"center\" >";
echo "<tr>";
echo "<td>From</td><td>To</td><td>Depart Time</td><td>Arrive Time</td><td>Available Tickets</td>";
echo "</tr>";
while ($row2 = mysql_fetch_array($result1)) {
    $sql = "select * from FLIGHT where FLIGHT_ID = '".$row2[0]."'";
    $result2 = mysql_query($sql);
    $row = mysql_fetch_array($result2);
    $ctime = date("y-m-d h:i:s");
    if (strtotime($ctime) > strtotime($row[3])) {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . ($row[6] - $row[5]) . "</td>";
        echo "</tr>";
    }
}
echo "</table>";

?>