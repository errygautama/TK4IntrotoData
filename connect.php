<?php

$host ="localhost";
$username = "root";
$password ="YES";
$database ="csv_db 6";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi){
echo"database terkoneksi";
}else{
    echo "database tidak terkoneksi";
}
?>