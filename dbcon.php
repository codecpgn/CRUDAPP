<?php
$con = mysqli_connect("localhost","root","","crudapp");

if(!$con){
    die('connection Failed'.mysqli_connect_error());
}
?>