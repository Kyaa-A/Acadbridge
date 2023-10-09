<?php

include 'db_config.php'; 

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $delete_query = "DELETE FROM users WHERE stud_id = $user_id";

    if ($conn->query($delete_query) === TRUE) {

        session_start();
        $_SESSION['delete_success'] = true;
       
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request!";
}

?>
