<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM contacts WHERE id=$id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Contact</title>

<style>

body{
font-family:Arial;
background:#111;
color:white;
padding:30px;
}

input,textarea{
width:100%;
padding:10px;
margin:10px 0;
}

button{
padding:10px 20px;
background:gold;
border:none;
cursor:pointer;
}

</style>

</head>

<body>

<h2>Edit Contact</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<input type="text" name="name" value="<?php echo $row['name']; ?>">

<input type="email" name="email" value="<?php echo $row['email']; ?>">

<input type="text" name="phone" value="<?php echo $row['phone']; ?>">

<input type="text" name="subject" value="<?php echo $row['subject']; ?>">

<textarea name="message"><?php echo $row['message']; ?></textarea>

<button type="submit">
Update
</button>

</form>

</body>
</html>