<?php
$serverName = "localhost:3307";
$userName = "root";
$password = "";
$dbName = "final_test";

$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_error()){
    echo "failed to connect";
    exit();
}
echo "connection successful";

?>
