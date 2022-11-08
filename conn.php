<?php

$conn = new mysqli("localhost", "root", "", "school");

if($conn->connect_error){
    echo $conn-error;
}else{
    // echo "success";
}


?>