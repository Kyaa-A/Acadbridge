if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user_type = $row['user_type'];

        session_start();
        $_SESSION['stud_name'] = $row['stud_name'];

        if ($user_type == 1) {
            header("Location: student_dashboard.php"); // Redirect to the student dashboard
        } elseif ($user_type == 2) {
            header("Location: instructor_dashboard.php"); // Redirect to the instructor dashboard
        } elseif ($user_type == 3) {
            header("Location: admin_dashboard.php"); // Redirect to the admin dashboard
        }
    } else {
        // Login failed...
        echo "<script>window.alert('Login failed. Invalid Username or Password');</script>";
    }
    $conn->close();
}
