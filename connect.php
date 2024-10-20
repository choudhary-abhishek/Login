<?php

$conn = new mysqli('localhost:3307','root','','login');
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>