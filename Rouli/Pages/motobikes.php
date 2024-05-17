<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rouli - Your Ultimate Mobility Solution</title>
  <link rel="icon" href="../components/images/roulieblack.png" type="image/png" />
  <link rel="stylesheet" href="../styles/footer.css" />
  <link rel="stylesheet" href="../styles/navbar.css" />
  <link rel="stylesheet" href="../styles/carstyle.css" />
</head>

<body>
  <header>
    <h1>MotoBike rental</h1>
  </header>

  <section id="hero">
    <h2>Welcome to Motorbike rental section</h2>
    <p> &emsp;Find your favorite motobikes at great prices.</p>
    <a href="../Pages/OurServices.php" class="navlink">
      Back to Our Services</a>
  </section>
  <section id="cars">
    <h2>Featured Motobikes</h2>
    <div class="car-list">
      <div class="car">
        <img src="..\components\images\bikes\B1.png" alt="	Cruiser " />
        <h3> &emsp;Cruiser</h3>
        <p> &emsp;Price:66DT/Day</p>
        <a href="./confirmation.php?car=Cruiser" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B2.png" alt="Cafe Racer  " />
        <h3> &emsp;Cafe Racer</h3>
        <p> &emsp;Price: 50DT/Day</p>
        <a href="./confirmation.php?car=Cafe+Race" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B3.png" alt="	Classic" />
        <h3> &emsp;Classic</h3>
        <p> &emsp;Price: 45DT/Day</p>
        <a href="./confirmation.php?car=Classic" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B4.png" alt="Sports Touring  " />
        <h3> &emsp;Sports Touring</h3>
        <p> &emsp;Price: 69DT/Day</p>
        <a href="./confirmation.php?car=Sports+Touring" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B5.png" alt="	Sports " />
        <h3> &emsp;Sports</h3>
        <p> &emsp;Price: 75DT/Day</p>
        <a href="./confirmation.php?car=Sports" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B6.png" alt="	Tourer  " />
        <h3> &emsp;Tourer</h3>
        <p> &emsp;Price: 65DT/Day</p>
        <a href="./confirmation.php?car=Tourer" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B7.png" alt="	Scooter" />
        <h3> &emsp;Scooter</h3>
        <p> &emsp;Price: 70DT/Day</p>
        <a href="./confirmation.php?car=Scooter" class="btn">Rent</a>
      </div>
      <div class="car">
        <img src="..\components\images\bikes\B8.png" alt="	Adventure " />
        <h3> &emsp;Adventure</h3>
        <p> &emsp;Price: 70DT/Day</p>
        <a href="./confirmation.php?car=Adventure" class="btn">Rent</a>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer-content">
      <div class="footer-info">
        <h3> &emsp;About Us</h3>
        <p> &emsp;
          At Rooli, we redefine the way you explore and travel. Whether
          you're planning a solo road trip, a family vacation, or a group
          outing, Rooli is your go-to platform for seamless vehicle rentals.
          We offer a diverse fleet of vehicles, including cars, buses,
          bicycles, and more, ensuring that you find the perfect ride for
          every occasion.
        </p>
      </div>
      <div class="footer-links">
        <h3> &emsp;Quick Links</h3>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="./OurServices.php">OurServices</a></li>
          <li><a href="./Register.php">SignUp</a></li>
          <li><a href="./SignIn.php">SignIn</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h3> &emsp;Contact Us</h3>
        <p> &emsp;
          <img src="../components/icons/contact.png" class="logos" />
          Email:Rooli@gmail.com
        </p>
        <p> &emsp;
          <img src="../components/icons/telephone.png" class="logos" />
          Phone: +216 72 303 211
        </p>
        <p> &emsp;
          <img src="../components/icons/location.png" class="logos" />
          Address: ENSI,Mannuba,Tunisia
        </p>
      </div>
    </div>
    <div class="footer-social">
      <a href="https://www.facebook.com/profile.php?id=100006779831357"><img src="../components/icons/Facebook.png" alt="Facebook" class="logos" /></a>
      <a href="https://www.instagram.com/aziz_souid/"><img src="../components/icons/instagram.png" alt="Instagram" class="logos" /></a>
    </div>
    <p> &emsp;
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

</html>