<?php

session_start();


if (isset($_SESSION['stud_name'])) {
    $stud_name = $_SESSION['stud_name'];
} else {
   
    header("Location: index.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/instructor_dashboard.css">
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
             <!--        <img src="css/image/Asnari.jpg" alt=""> -->
                </div>
            </div>
            <!-- INFORMATION -->


            <div class="information">
                <div class="id_num">Instructor</div>
                <div class="name">
                    <?php echo $stud_name; ?>
                </div>
       
            </div>
           
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Official Class Schedule <br> First Semester 2023-2024</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Code</td>
                                <td>Subject</td>
                                <td>Description</td>
                                <td>Units</td>
                                <td>Day</td>
                                <td>Term</td>
                                <td>Time</td>
                                <td>Room</td>
                                <td>Program</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>254</td>
                                <td>GE 3</td>
                                <td>THE CONTEMPORARY WORLD</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>1st Term</td>
                                <td>1100M-1200A</td>
                                <td>D9</td>
                                <td>PS</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                            <tr>
                                <td>576</td>
                                <td>CCE 105</td>
                                <td>DATA STRUCTURES AND ALGORITHMS</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>1st Term</td>
                                <td>130A-330A</td>
                                <td>CL2</td>
                                <td>IT</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                            <tr>
                                <td>578</td>
                                <td>GE 20</td>
                                <td>READING VISUAL ARTS</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>1st Term</td>
                                <td>430A-530E</td>
                                <td>C17</td>
                                <td>IT</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                            <tr>
                                <td>579</td>
                                <td>CCE 104</td>
                                <td>INFORMATION MANAGEMENT</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>1st Term</td>
                                <td>530E-730E</td>
                                <td>CL2</td>
                                <td>IT</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                             <tr>
                                <td>498</td>
                                <td>GPE 3</td>
                                <td>PHYSICAL-ACTIVITIES TOWARDS HEALTH & FITNESS</td>
                                <td>2.0</td>
                                <td>M-TH1</td>
                                <td>2nd Term</td>
                                <td>1230A-130A</td>
                                <td>GYM</td>
                                <td>PE</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                            <tr>
                                <td>580</td>
                                <td>IT 3</td>
                                <td>NETWORKING 1</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>2nd Term</td>
                                <td>130A-330A</td>
                                <td>CL2</td>
                                <td>IT</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                            <tr>
                                <td>581</td>
                                <td>IT 5</td>
                                <td>IT ELECTIVE 2</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>2nd Term</td>
                                <td>330A-530E</td>
                                <td>CL1</td>
                                <td>IT</td>
                                <td><span class="status official">Official</span></td>
                            </tr>

                            <tr>
                                <td>582</td>
                                <td>IT 4</td>
                                <td>CALCULUS 1 FOR IT</td>
                                <td>3.0</td>
                                <td>M-SA1</td>
                                <td>2nd Term</td>
                                <td>530E-630E</td>
                                <td>CL2</td>
                                <td>IT</td>
                                <td><span class="status official">Official</span></td>
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