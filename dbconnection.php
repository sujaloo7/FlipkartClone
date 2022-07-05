<?php
$db_hostname ="localhost";
$db_user ="root";
$db_password ="";
$db_databasename = "flipkart";

$con = new mysqli($db_hostname, $db_user, $db_password, $db_databasename);

if($con ->connect_error)
{
    die("connection faild");
}
/*else
{
    echo "connected";
}
*/
include("css/mainstyle.css");

?>