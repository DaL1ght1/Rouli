<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/sinup.css">
  <title>Rouli - Your Ultimate Mobility Solution</title>
  <link rel="icon" href="../components/images/roulieblack.png" type="image/png">
</head>

<body>
  <div>
    <nav class="navbar" id="navbar">
      <a href="./index.php">Home</a>
      <a href="./Register.php" id="registration">Sign Up</a>
    </nav>
  </div>

  <?php
  session_start();
  if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
  }
  ?>

  <div class="container">
    <form action="signincheck.php" method="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="email" placeholder="email" required>
        <i class='bx bx-user bx-tada'></i>

      </div>
      <div class="input-box">
        <input type="password" name="pass" placeholder="Password" required>
        <i class='bx bx-lock-alt bx-tada'></i>
      </div>
      <div class="remember">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" id="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account ?<a href="./Register.html">Register</a></p>
      </div>

    </form>
  </div>
</body>

</html>