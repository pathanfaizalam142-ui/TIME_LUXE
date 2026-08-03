<?php
include "db.php";

if (isset($_GET['search'])) {

    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM contacts
            WHERE name LIKE '%$search%'
            OR email LIKE '%$search%'
            ORDER BY id DESC";

} else {

    $sql = "SELECT * FROM contacts
            ORDER BY id DESC";

}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>TIME LUXE - Admin Panel</title>

    <style>

        body{
            font-family: Arial,sans-self;
            background:#0f0f0f;
            color:white;
            margin:0;
            padding:30px;
        }

        h1{
            text-align:center;
            color:#d4af37;
            margin-bottom:30px;
            letter-spacing:2px;
        }
        
        form{
    text-align:center;
    margin-bottom:25px;
}

form input{
    width:320px;
    padding:12px;
    border:2px solid #d4af37;
    border-radius:8px;
    background:#1a1a1a;
    color:white;
    font-size:16px;
}

form button{
    padding:12px 20px;
    background:#d4af37;
    color:black;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
    margin-left:10px;
}

form button:hover{
    background:#b8860b;
}


      table{
    width:100%;
    border-collapse:collapse;
    background:#1a1a1a;
    border-radius:10px;
    overflow:hidden;
}

th{
    background:#d4af37;
    color:black;
    padding:15px;
    font-size:16px;
}

td{
    padding:14px;
    border-bottom:1px solid #333;
    text-align:center;
}

tr:hover{
    background:#262626;
}

a{
    text-decoration:none;
    font-weight:bold;
}

a[href*="edit"]{
    color:#00ff88;
}

a[href*="delete"]{
    color:#ff4444;
}

a:hover{
    opacity:.8;
}

    </style>

</head>

<body>

<h1>TIME LUXE Contact Messages</h1>
<form method="GET" action="">
    <input type="text" name="search" placeholder="Search by Name or Email">
    <button type="submit">Search</button>
</form>
<br>
<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['created_at']; ?></td>
<td>
<a href="edit.php?id=<?php echo$row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this message?');">Delete</a></td>
</tr>

<?php
}
?>

</table>

</body>
</html>