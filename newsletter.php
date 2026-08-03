<?php
include "db.php";

if (isset($_POST['subscribe'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO newsletter (email)
            VALUES ('$email')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Thank You for Subscribing!');
                window.location.href='contect.php';
              </script>";

    } else {

        echo "<script>
                alert('Something Went Wrong!');
                window.location.href='contect.php';
              </script>";
    }

} else {

    header("Location: contect.php");
    exit();

}
?>