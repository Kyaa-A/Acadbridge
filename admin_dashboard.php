<?php
session_start();

if (isset($_SESSION['stud_name'])) {
    $stud_name = $_SESSION['stud_name'];
} else {
    header("Location: index.php");
    exit(); 
}

include('db_config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['delete_success']) && $_SESSION['delete_success']) {
        echo '<script>alert("Record deleted successfully.");</script>';
        unset($_SESSION['delete_success']);
    }
    ?>

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/admin_dashboard.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img class="logo" src="css/image/Logo.png">
                        </span>
                        <span class="title">Acadbridge</span>
                    </a>
                </li>

                <li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">User List</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <!--  <img src="css/image/Asnari.jpg" alt=""> -->
                </div>
            </div>
            <!-- INFORMATION -->


            <div class="information">
                <div class="id_num">System</div>
                <div class="name">
                    <?php echo $stud_name; ?>
                </div>

            </div>


            <!--image slider start-->
            <div class="slider">
                <div class="slides">
                    <div class="slide first">
                        <div class="header">List of User</div>
                        <div class="container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM users";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {

                                            $stud_id = $row['stud_id'];
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $stud_id; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['stud_name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email']; ?>
                                                </td>
                                                <td>
                                                    <a href="edit_page.php?id=<?php echo $stud_id; ?>">
                                                        <button type="button" class="icon">Edit</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form method="POST" enctype="multipart/form-data"
                                                        action="delete_function.php?id=<?php echo $stud_id; ?>">
                                                        <button type="submit" name="delete" class="icon">Delete</button>
                                                    </form>
                                                </td>
                                                <td><span class="status official">Official</span></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "No users found.";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- =========== Scripts =========  -->
                    <script src="js/main.js"></script>

                    <!-- ====== ionicons ======= -->
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>