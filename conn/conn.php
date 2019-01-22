<?php
// Creating a connection to the db

    $conn = mysqli_connect('localhost', 'root','','tasks');

//Testing the connection

    if(mysqli_connect_errno()){
        echo mysqli_connect_errorno();
    } else {
        echo "Connection Successful!";
    }

?>