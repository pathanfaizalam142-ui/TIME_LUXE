<?php

include "db.php";

$id=$_POST['id'];

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="UPDATE contacts SET

name='$name',
email='$email',
phone='$phone',
subject='$subject',
message='$message'

WHERE id=$id";

if(mysqli_query($conn,$sql))
{

header("Location: admin.php");

}
else
{

echo mysqli_error($conn);

}

?>