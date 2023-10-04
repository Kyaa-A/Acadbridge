<?php
include('db_config.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Login successful!";
        header("Location: dashboard.php");
    } else {
        /* echo "Login failed. Invalid username or password."; */
        echo
            "
            <script>
            window.alert('Login failed. Invalid Username or Password');
            </script>
            ";
    }

    $conn->close();
}
?>