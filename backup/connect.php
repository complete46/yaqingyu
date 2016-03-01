<?php
/**
 * Created by PhpStorm.
 * User: tianrui
 * Date: 5/19/15
 * Time: 10:19 PM
 */

//Connect to my database
$db_server = 'sunapee.cs.dartmouth.edu';
$db_user = 'ruitian';
$db_password = '!yigerenzou';
$db_name = 'ruitian_db';

$conn = mysql_connect($db_server, $db_user, $db_password);
mysql_select_db($db_name, $conn) or die ('Failed Connection!');
?>