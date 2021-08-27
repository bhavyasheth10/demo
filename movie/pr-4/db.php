<?php
//Database connection.
$con = MySQLi_connect(
   "localhost", //Server host name.
   "admin", //Database username.
   "Admin@123", //Database password.
   "task3" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>