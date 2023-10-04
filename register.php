<?php
include('db_config.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        /* echo "Registration successful!"; */
        echo
            "
            <script>
            window.alert('Successfully added to Database');
            </script>
            ";
            $tester = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if($tester){
        header("Location: index.php");
    }
    $conn->close();
}
?>