<?php

include('db_config.php');

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE stud_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        $row = $result->fetch_assoc();
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/edit.css">
            <title>Edit Page</title>
        </head>

        <body>

            <div class="wrapper">


                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="div_background"><span class="dot"></span></div>
                <div class="container">

                    <div class="one"></div>

                    <div class="two">
                        <form method="POST" enctype="multipart/form-data" action="edit_function.php?id=<?php echo $user_id; ?>">

                            <div class="header">
                                <h1>Your Info</h1>
                            </div>

                            <input type="text" name="stud_name" class="enterInfo" value="<?php echo $row['stud_name']; ?>"><br>
                            <input type="text" name="email" class="enterInfo" value="<?php echo $row['email']; ?>"><br>
                            <button type="submit" name="update" class="button">Update</button>
                        </form>
                    </div>

                    <div class="three"></div>
                </div>
            </div>
        </body>

        </html>

        <?php
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not provided.";
}
?>