<?php
include 'db_config.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $get_info = $conn->query("SELECT * FROM `users` WHERE `stud_id` = '$user_id'");

    if ($get_info) {
        $info_row = $get_info->fetch_array();
        $new_id = $info_row['stud_id'];

        if (isset($_POST['update'])) {
            $new_stud_name = $_POST['stud_name'];
            $new_email = $_POST['email'];

            $update_query = "UPDATE users SET stud_name = '$new_stud_name', email = '$new_email' WHERE stud_id = $user_id";

            if ($conn->query($update_query) === TRUE) {

                echo '<script>alert("Record updated successfully.");</script>';

                echo '<script>window.location.href = "admin_dashboard.php";</script>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    } else {
        echo "Error fetching user information.";
    }
} else {
    echo "User ID not provided.";
}
?>