<?php

include 'connect.php';

$reg=$_POST['regno'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$s=$_POST['sm'];
$gpa=$_POST['gpa'];

$sql="update personal_data set FirstName='".$fn."' , LastName='".$ln."' , Semester='".$s."' , GPA='".$gpa."' where RegNo='".$reg."'";
$query=mysqli_query($connect,$sql);

if($query){
    header("location:msg.html");
}
else{
    echo "try again! record not entered";
}