<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 4:27 PM
 */

session_start();
include "connect.php";

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
?>

<!--Get date range for top 5 booked flights-->
<form action="mostfive.php" method="post">
    Start Date <input type="date" name="startdate"><br>
    End Date <input type="date" name="enddate"><br>
    <input type="submit">
</form>