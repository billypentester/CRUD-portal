<?php

include 'connect.php';

$reg = $_POST['regno'];
$p = $_POST['p'];
$c = $_POST['c'];

$sql = "update lab set Lab_Physics='$p' , Lab_Computer='$c'  where RegNo='$reg'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:msg.html");
} else {
    echo "try again! record not entered";
}