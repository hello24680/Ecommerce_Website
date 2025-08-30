<?php 
    $con = mysqli_connect("localhost","root","","mystore");
    if(!$con){
        die("No connection". mysqli_connect_error());
    }
?>