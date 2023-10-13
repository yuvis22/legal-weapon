<?php
if (isset($_POST['firstname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "employee";
    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Success connecting to the database";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `testing`.`employee` (`name`, `email`, `phonenumber`, `description`) VALUES ('$name', '$email', '$phonenumber', '$description');";

    if (mysqli_query($con, $sql)) {
        echo "Successfully inserted";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}
?>