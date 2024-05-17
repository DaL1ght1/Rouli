<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <script src="../JavaScript/index.js "></script>
  <title>
    Rouli - Your Ultimate Mobility Solution
  </title>
  <link rel="icon" href="../components/images/roulieblack.png" type="image/png">
</head>

<body class="border-container" onscroll="op()">

  <header>

    <nav class="navbar">
      <a href=""><img src="../components/images/roulieblack.png" class="img"></a>
      <a href="" class="navlink">Home </a>
      <a href="../Pages/OurServices.php" class="navlink">Our Services</a>
      <?php
      session_start();
      if (isset($_SESSION['username'])) {
        echo "<a href=\"#\"  class=\"navlink\">" . $_SESSION['username'] . "</a>";
        echo "<a href=\"../pages/signout.php\" class=\"navlink\">Sign Out</a>";
      } else {
        echo "<a href=\"../Pages/Register.php\" id=\"registration\" class=\"navlink\">Sign Up</a>";
        echo "<a href=\"../Pages/Signin.php\" class=\"navlink\">Sign In</a>";
      }
      ?>
    </nav>

  </header>
  </nav>

  <section class="sect">
    <h1>Welcome to Rooli,</h1>


    <span id="animated-text">
      <h2>Your Ultimate Mobility Solution!</h2>
    </span>


    <br>
    <br>
    <video class="video" controls autoplay loop width="560" height="315" src="../components/videos/intro.mp4" frameborder="0" allowfullscreen></video>
    <br>
    <br>
  </section>

  <br>
  <br>
  <br>



  <footer>
    <div class="footer-content">
      <div class="footer-info">
        <h3>About Us</h3>
        <p>At Rooli, we redefine the way you explore and travel. Whether you're planning a solo road trip, a family
          vacation, or a group outing, Rooli is your go-to platform for seamless vehicle rentals. We offer a diverse
          fleet of vehicles, including cars, buses, bicycles, and more, ensuring that you find the perfect ride for
          every occasion.</p>
      </div>
      <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="./OurServices.php">OurServices</a></li>
          <li><a href="./Register.php">SignUp</a></li>
          <li><a href="./SignIn.php">SignIn</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h3>Contact Us</h3>
        <p><img src="../components/icons/contact.png" class="logos"> Email:Rooli@gmail.com</p>
        <p><img src="../components/icons/telephone.png" class="logos"> Phone: +216 72 303 211</p>
        <p><img src="../components/icons/location.png" class="logos"> Address: ENSI,Mannuba,Tunisia</p>
      </div>
    </div>
    <div class="footer-social">
      <a href="https://www.facebook.com/profile.php?id=100006779831357"><img src="../components/icons/Facebook.png" alt="Facebook" class="logos"></a> <a href="https://www.instagram.com/aziz_souid/"><img src="../components/icons/instagram.png" alt="Instagram" class="logos"></a>
    </div>
    <p><span style="color: #4682b4;">&copy;<span id="current-year"></span> Rooli</span> - Your Ultimate Mobility Solution</p>
    <script>
      const currentYear = new Date().getFullYear();
      document.getElementById('current-year').textContent = currentYear;
    </script>
  </footer>
</body>


</body>

</html>