<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles/OurServicesStyle.css" />
  <link rel="stylesheet" href="../styles/navbar.css" />
  <link rel="stylesheet" href="../styles/footer.css" />
  <title>Rouli - Your Ultimate Mobility Solution</title>
  <link rel="icon" href="../components/images/roulieblack.png" type="image/png" />
</head>

<body>
  <div>
    <nav class="navbar">
      <a href="../Pages/index.php"><img src="../components/images/roulieblack.png" class="img"></a>
      <a href="../Pages/index.php" class="navlink">Home </a>
      <a href="" class="navlink">Our Services</a>
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
  </div>
  <p class="grid">
    Discover effortless mobility with our rental service! From bikes,
    motorbikes, cars to electric scooters, we provide a convenient and diverse
    fleet for your travel needs. Enjoy a seamless experience with us.
  </p>
  <div class="flex">
    <div class="category" onclick="window.location.href='cars.php'">
      <img src="../components/images/car3.jpg" alt="Car" />
      <div class="overlay">
        <p>
          <i style="color: rgb(55, 178, 201)">Cars:</i> Explore with ease in
          our rental cars. Whether you need a compact car for the city or a
          spacious SUV for a road trip, our cars offer comfort and freedom,
          giving you the flexibility to go wherever you please.
        </p>
      </div>
    </div>

    <div class="category" onclick="window.location.href='motobikes.php'">
      <img src="../components/images/motorbike3.jpg" alt="Motorbike" />
      <div class="overlay">
        <p>
          <i style="color: rgb(55, 178, 201)">Motorbike:</i> Feel the
          excitement of the open road with our motorbikes. Ideal for both new
          and experienced riders, our motorcycles provide a thrilling and fun
          way to travel, from city streets to scenic routes.
        </p>
      </div>
    </div>

    <div class="category" onclick="window.location.href='bicycle.php'">
      <img src="../components/images/bicycle2.jpg" alt="Bicycle" />
      <div class="overlay">
        <p>
          <i style="color: rgb(55, 178, 201)">Bicycle:</i> Enjoy a relaxing
          ride on our bicycles. Great for both leisurely strolls and active
          adventures. Whether you're commuting or sightseeing, our bikes offer
          a simple and eco-friendly way to get around.
        </p>
      </div>
    </div>

    <div class="category" onclick="window.location.href='scooter.php'">
      <img src="../components/images/trot2.jpg" alt="Electric Scooter" />
      <div class="overlay">
        <p>
          <i style="color: rgb(55, 178, 201)">Electric Scooter:</i> Cruise
          around town effortlessly on our electric scooters. They're easy to
          use, quiet, and good for the environment. Perfect for short trips
          and exploring the city!
        </p>
      </div>
    </div>
  </div>
</body>
<footer>
  <div class="footer-content">
    <div class="footer-info">
      <h3>About Us</h3>
      <p>
        At Rooli, we redefine the way you explore and travel. Whether you're
        planning a solo road trip, a family vacation, or a group outing, Rooli
        is your go-to platform for seamless vehicle rentals. We offer a
        diverse fleet of vehicles, including cars, buses, bicycles, and more,
        ensuring that you find the perfect ride for every occasion.
      </p>
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
      <p>
        <img src="../components/icons/contact.png" class="logos" />
        Email:Rooli@gmail.com
      </p>
      <p>
        <img src="../components/icons/telephone.png" class="logos" /> Phone:
        +216 72 303 211
      </p>
      <p>
        <img src="../components/icons/location.png" class="logos" /> Address:
        ENSI,Mannuba,Tunisia
      </p>
    </div>
  </div>
  <div class="footer-social">
    <a href="https://www.facebook.com/profile.php?id=100006779831357"><img src="../components/icons/Facebook.png" alt="Facebook" class="logos" /></a>
    <a href="https://www.instagram.com/aziz_souid/"><img src="../components/icons/instagram.png" alt="Instagram" class="logos" /></a>
  </div>
  <p>
    <span style="color: #4682b4">&copy;<span id="current-year"></span> Rooli</span>
    - Your Ultimate Mobility Solution
  </p>
  <script>
    const currentYear = new Date().getFullYear();
    document.getElementById("current-year").textContent = currentYear;
  </script>
</footer>

</html>