<?php
$conn = mysqli_connect("localhost","root","")or die("cannot connect");
$db=mysqli_select_db($conn,"test")or die("cannot find DB");
?>