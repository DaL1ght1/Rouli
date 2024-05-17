<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../styles/navbar.css" />
  <link rel="stylesheet" href="../styles/Register.css" />
  <link rel="stylesheet" href="../styles/footer.css" />
  <title>Rouli - Your Ultimate Mobility Solution</title>
  <link rel="icon" href="../components/images/roulieblack.png" type="image/png" />
  <script src="../JavaScript\Register.js"></script>
</head>

<body>
  <div>
    <nav class="navbar" id="navbar">
      <a href="./index.php"><img src="../components/images/roulieblack.png" class="img" /></a>
      <a href="../Pages/index.php" class="navlink">Home</a>
      <a href="../Pages/OurServices.php" class="navlink">Our Services</a>
      <a href="" id="registration" class="navlink">Sign Up</a>
      <a href="../Pages/SignIn.php" class="navlink">Sign In</a>
    </nav>
  </div>
  <form method="post" action="personregister.php">
    <fieldset>
      <legend>Sign Up:</legend>
      <label for="N">First Name:</label>
      <input type="text" name="N" id="N" placeholder="Enter your first name" required />
      <label for="PN">Last Name:</label>
      <input type="text" name="PN" id="PN" placeholder="Enter your last name" required />
      <br />
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="Enter your E-Mail" required />
      <label for="P">Password:</label>
      <input type="password" name="P" id="P" placeholder="Enter your password" required minlength="8" />
      <label for="confirmP">Confirm Password :</label>
      <input type="password" name="confirmP" id="confirmP" placeholder="Re-enter your password" oninput="checkPasswordMatch()" required />
      <p id="passwordMatchMessage"></p>
      <label for="Gender">Gender :</label>
      <select name="Gender" id="Gender" required>
        <option value="" disabled selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>
      <input type="submit" name="butt" id="button" value="Confirm registration" />
    </fieldset>
  </form>
  <footer>
    <div class="footer-content">
      <div class="footer-info">
        <h3>About Us</h3>
        <p>
          At Rooli, we redefine the way you explore and travel. Whether you're
          planning a solo road trip, a family vacation, or a group outing,
          Rooli is your go-to platform for seamless vehicle rentals. We offer
          a diverse fleet of vehicles, including cars, buses, bicycles, and
          more, ensuring that you find the perfect ride for every occasion.
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
          <img src="../components/icons/location.png" class="logos" />
          Address: ENSI,Mannuba,Tunisia
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
</body>

</html>