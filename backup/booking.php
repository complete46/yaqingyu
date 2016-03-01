<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/20/15
 * Time: 1:47 AM
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

//Dropdown menu
echo "<form action=\"flights.php\" method=\"post\">";
echo "<p>";
echo "Departure City</br>";
echo "<select name = \"departure\">";
echo "<option value = \"BOS\">Boston</option>";
echo "<option value = \"BWI\">Washington DC</option>";
echo "<option value = \"CLT\">Charlotte</option>";
echo "<option value = \"DEN\">Denver</option>";
echo "<option value = \"DFW\">Dallas</option>";
echo "<option value = \"DTW\">Detroit</option>";
echo "<option value = \"HNL\">Huston</option>";
echo "<option value = \"JFK\">New York</option>";
echo "<option value = \"LAS\">Las Vegas</option>";
echo "<option value = \"LAX\">Los Angeles</option>";
echo "<option value = \"MCO\">Orlando</option>";
echo "<option value = \"MIA\">Miami</option>";
echo "<option value = \"MSP\">Minneapolis</option>";
echo "<option value = \"ORD\">Chicago</option>";
echo "<option value = \"PDX\">Portland</option>";
echo "<option value = \"PHL\">Philadelphia</option>";
echo "<option value = \"PHX\">Phoenix</option>";
echo "<option value = \"SAN\">San Diego</option>";
echo "<option value = \"SEA\">Seattle</option>";
echo "<option value = \"SFO\">San Francisco</option>";
echo "<option value = \"SLC\">Salt Lake City</option>";
echo "<option value = \"TPA\">Tampa</option>";
echo "</select>";
echo "</p>";

echo "<p>";
echo "Arrival City</br>";
echo "<select name = \"arrival\">";
echo "<option value = \"BOS\">Boston</option>";
echo "<option value = \"BWI\">Washington DC</option>";
echo "<option value = \"CLT\">Charlotte</option>";
echo "<option value = \"DEN\">Denver</option>";
echo "<option value = \"DFW\">Dallas</option>";
echo "<option value = \"DTW\">Detroit</option>";
echo "<option value = \"HNL\">Huston</option>";
echo "<option value = \"JFK\">New York</option>";
echo "<option value = \"LAS\">Las Vegas</option>";
echo "<option value = \"LAX\">Los Angeles</option>";
echo "<option value = \"MCO\">Orlando</option>";
echo "<option value = \"MIA\">Miami</option>";
echo "<option value = \"MSP\">Minneapolis</option>";
echo "<option value = \"ORD\">Chicago</option>";
echo "<option value = \"PDX\">Portland</option>";
echo "<option value = \"PHL\">Philadelphia</option>";
echo "<option value = \"PHX\">Phoenix</option>";
echo "<option value = \"SAN\">San Diego</option>";
echo "<option value = \"SEA\">Seattle</option>";
echo "<option value = \"SFO\">San Francisco</option>";
echo "<option value = \"SLC\">Salt Lake City</option>";
echo "<option value = \"TPA\">Tampa</option>";
echo "</select>";
echo "</p>";

echo "<input type=\"submit\" method = \"post\">";
echo "</form>"


?>