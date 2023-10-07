<?php
include('db_config.php');

if (isset($_POST['register'])) {
    $stud_name = $_POST['stud_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    $sql = "INSERT INTO users (stud_name, email, username, password, user_type) VALUES ('$stud_name','$email','$username','$password', $user_type)";

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

    if ($tester) {
        header("Location: index.php");
    }
    $conn->close();
}
?>