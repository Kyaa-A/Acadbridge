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
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/dashboard.css">
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
                    <a href="#">
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
                    <a href="record.php">
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
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">5.46</div>
                        <div class="cardName">Exams Paid</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">22,827.00</div>
                        <div class="cardName">Total Assessment</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">N/A</div>
                        <div class="cardName">Special Permit</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">15,672.50</div>
                        <div class="cardName">Total Payment</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">7,154.50</div>
                        <div class="cardName">Current Balance</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">2,820.00</div>
                        <div class="cardName">Per Exam</div>
                    </div>
                </div>

                <div class="card seven">
                    <div>
                        <div class="numbers">450.00</div>
                        <div class="cardName">Total Previous Balance</div>
                    </div>
                </div>

            </div>

            <!-- =========== Scripts =========  -->
            <script src="js/main.js"></script>

            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>