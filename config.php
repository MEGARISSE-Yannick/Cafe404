<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define("DB_SERVER", "localhost");
define("DB_USER", "admin");
define("DB_PASSWORD", "Simpl@n974");
define("DB_DATABASE", "cafe404");

$link= mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "test";
?>
    