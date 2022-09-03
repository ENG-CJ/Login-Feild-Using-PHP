<?php

$conn= new mysqli("localhost","root","","justusers");
if ($conn->connect_error)
    echo $conn->error;


?>