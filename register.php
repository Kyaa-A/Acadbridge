<?php
include('db_config.php');

if (isset($_POST['register'])) {
    $stud_name = $_POST['stud_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

 
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (stud_name, email, username, password, user_type) VALUES ('$stud_name', '$email', '$username', '$hashed_password', $user_type)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.alert('Successfully added to Database');</script>";
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
