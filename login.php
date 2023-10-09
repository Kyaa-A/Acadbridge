<?php
include('db_config.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_hashed_password = $row['password'];

        if (password_verify($password, $stored_hashed_password)) {
            $user_type = $row['user_type'];

            session_start();
            $_SESSION['stud_name'] = $row['stud_name'];

            if ($user_type == 1) {
                header("Location: student_dashboard.php"); 
            } elseif ($user_type == 2) {
                header("Location: instructor_dashboard.php"); 
            } elseif ($user_type == 3) {
                header("Location: admin_dashboard.php"); 
            }
        } else {
            
            echo "<script>window.alert('Login failed. Invalid Username or Password');</script>";
        }
    } else {
        
        echo "<script>window.alert('Login failed. Invalid Username or Password');</script>";
    }

    $conn->close();
}
?>
