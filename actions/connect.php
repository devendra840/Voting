<?php

$con=mysqli_connect("localhost","root","root","votingsystem");
if(!$con){
    die(mysqli_error($con));
} 
