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
    <link rel="stylesheet" href="css/classlist.css">
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
                    <a href="classlist.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Class List</span>
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
                <div class="id_num">Instructor</div>
                <div class="name">
                    <?php echo $stud_name; ?>
                </div>

            </div>


            <!--image slider start-->
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <div class="header">DATA STRUCTURES AND ALGORITHMS</div>
                        <div class="container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>ID Number</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Asnari B. Pacalna</td>
                                        <td>59891</td>
                                        <td><span class="status official">Official</span></td>
                                    </tr>
                                    <tr>
                                        <td>Kim Hiresh D. Racho</td>
                                        <td>60307</td>
                                        <td><span class="status official">Official</span></td>
                                    </tr>
                                    <tr>
                                        <td>Gene Ryan A. Depalubos</td>
                                        <td>59999</td>
                                        <td><span class="status official">Official</span></td>
                                    </tr>
                                    <tr>
                                        <td>Ace Vincent Rivera</td>
                                        <td>59899</td>
                                        <td><span class="status official">Official</span></td>
                                    </tr>
                                    <tr>
                                        <td>Arjay Escabas</td>
                                        <td>59897</td>
                                        <td><span class="status official">Official</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="slide second">
                        <div class="header">INFORMATION MANAGEMENT</div>
                        <div class="container">
                            test2
                        </div>
                    </div>
                    <div class="slide third">
                        <div class="header">NETWORKING 1</div>
                        <div class="container">
                            test3
                        </div>
                    </div>
                    <div class="slide fourth">
                        <div class="header">IT ELECTIVE 2</div>
                        <div class="container">
                            test4
                        </div>
                    </div>
                    <div class="slide fifth">
                        <div class="header">CALCULUS 1 FOR IT</div>
                        <div class="container">
                            test5
                        </div>
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
            <!--image slider end-->

            <script type="text/javascript">
                var counter = 1;
                setInterval(function () {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 5) {
                        counter = 1;
                    }
                }, 5000);
            </script>


            <!-- =========== Scripts =========  -->
            <script src="js/main.js"></script>

            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>