<?php
// Start the session
session_start();

// Check if stud_name is set in the session
if (isset($_SESSION['stud_name'])) {
    $stud_name = $_SESSION['stud_name'];
} else {
    // Redirect to the login page if stud_name is not set
    header("Location: index.php");
    exit(); // Make sure to exit after redirection
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/record1.css">
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
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="course.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Class Schedule</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Records</span>
                    </a>
                </li>

                <li>
                    <a href="message.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="data_export.php">
                        <span class="icon">
                            <ion-icon name="download-outline"></ion-icon>
                        </span>
                        <span class="title">Data Export</span>
                    </a>
                </li>

                <li>
                    <a href="lms.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">LMS</span>
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
                    <img src="css/image/Asnari.jpg" alt="">
                </div>
            </div>

            <!-- INFORMATION -->

            <div class="information">
                <div class="id_num">59891</div>
                <div class="name">
                    <?php echo $stud_name; ?>
                </div>
                <div class="semester">First Semester 2023-2024</div>
                <div class="grade_level">2nd Year Bachelor of Science in Information Technology</div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Student Permanent Record <br> First Semester 2023-2024</h2>
                        <a href="record_view.php" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Descriptive Title of Course</td>
                                <td>Final Grades</td>
                                <td>Unit</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- <tr>
                                <td>GE 3</td>
                                <td>THE CONTEMPORARY WORLD</td>
                                <td>4.0</td>
                                <td>3.0</td>
                                <td><span class="status official">Passed</span></td>
                            </tr> -->

                            <tr>
                                <td>CCE 105</td>
                                <td>DATA STRUCTURES AND ALGORITHMS</td>
                                <td>4.0</td>
                                <td>3.0</td>
                                <td><span class="status official">Passed</span></td>
                            </tr>

                            <!--   <tr>
                                <td>GE 20</td>
                                <td>READING VISUAL ARTS</td>
                                <TD>4.0</TD>
                                <td>3.0</td>
                                <td><span class="status official">Passed</span></td>
                            </tr> -->

                            <tr>
                                <td>CCE 104</td>
                                <td>INFORMATION MANAGEMENT</td>
                                <td>4.0</td>
                                <td>3.0</td>
                                <td><span class="status official">Passed</span></td>
                            </tr>

                            <!--  <tr>
                                <td>GPE 3</td>
                                <td>PHYSICAL-ACTIVITIES TOWARDS HEALTH & FITNESS</td>
                                <td>4.0</td>
                                <td>2.0</td>
                                <td><span class="status official">Passed</span></td>
                            </tr> -->

                            <tr>
                                <td>IT 3</td>
                                <td>NETWORKING 1</td>
                                <td>7.2</td>
                                <td>3.0</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>IT 5</td>
                                <td>IT ELECTIVE 2</td>
                                <td>0.0</td>
                                <td>3.0</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>IT 4</td>
                                <td>CALCULUS 1 FOR IT</td>
                                <td>1.0</td>
                                <td>3.0</td>
                                <td><span class="status failing">Failed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- =========== Scripts =========  -->
                <script src="js/main.js"></script>

                <!-- ====== ionicons ======= -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>