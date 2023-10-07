<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acadbridge</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/login.css">

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

    <div class="container" id="container">
      <div class="form-container register-container">
        <form action="register.php" method="POST">

          <h1>Register</h1>
          <input type="text" name="stud_name" placeholder="Name">
          <input type="email" name="email" placeholder="Email">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <div class="user_type">
            <input type="radio" name="user_type" value="1" checked>Student
            <input type="radio" name="user_type" value="2">Instructor
            <input type="radio" name="user_type" value="3">Admin
          </div>
          <button type="submit" name="register">Register</button>

          <span>or sign in with</span>

          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
          </div>

        </form>
      </div>

      <div class="form-container login-container">
        <form action="login.php" method="POST">
          <h1>Login</h1>
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox">
              <label>Remember me</label>
            </div>
            <div class="pass-link">
              <a href="#">Forgot password?</a>
            </div>
          </div>
          <a>
            <button type="submit" name="login">Login</button>
          </a>
          <span>or sign in with</span>
          <div class="social-container">
            <a href="https://facebook.com" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?" class="social"><i
                class="lni lni-google"></i></a>
            <a href="https://linkedin.com" class="social"><i class="lni lni-linkedin-original"></i></a>
          </div>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="title">Welcome <br> to Acadbridge</h1>
            <p>If you already have an account, please log in here and enjoy.</p>
            <button class="ghost" id="login">Login
              <i class="lni lni-arrow-left login"></i>
            </button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="title">Start your <br> journey <br> with Acadbridge</h1>
            <p>If you haven't registered yet, join us now and begin your journey.</p>
            <button class="ghost" id="register">Register
              <i class="lni lni-arrow-right register"></i>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="js/login.js"></script>

</body>

</html>