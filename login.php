<?php
include('db_config.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        // Login successful, fetch the student name
        $row = $result->fetch_assoc();
        $stud_name = $row['stud_name'];

        // Store stud_name in a session variable
        session_start();
        $_SESSION['stud_name'] = $stud_name;
        echo "Login successful!";
        header("Location: dashboard.php");
        
    } else {

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