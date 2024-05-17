<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="../styles/confirmation.css">
  <title>Rooli confirmation page</title>
  <link rel="icon" href="../components/images/roulieblack.png" type="image/png">
</head>

<body>

  <?php

  $fnameErr = $lnameErr = $emailErr = $termsErr = $cinErr = "";
  $fname   = $lname    = $email    = $terms    = $cin    = "";
  $car = $_GET['car'];


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      $fnameErr = "First name is required";
    } else {
      $fname = ($_POST["fname"]);

      if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        $fnameErr = "Only letters and white space allowed";
      }
    }
    if (empty($_POST["lname"])) {
      $lnameErr = "Last name is required";
    } else {
      $lname = ($_POST["lname"]);

      if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
        $lnameErr = "Only letters and white space allowed";
      }
    }
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = ($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["cin"])) {
      $cinErr = "Cin is required";
    } else {
      $cin = ($_POST["cin"]);

      if (!preg_match("/^[01]\d{7}$/", $cin)) {
        $cinErr = "Invalid cin";
      }
    }
    if (empty($_POST["terms"])) {
      $termsErr = "You have to accept our terms and conditions in order to confirm ";
    } else {
      $terms = $_POST["terms"];
    }
  }

  ?>
  <div class="container">

    <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>?car=<?php echo urlencode($car); ?>">
      <input type="hidden" id="text2" name="car" value="<?php echo $car; ?>">
      <b><span style="color: rgb(102, 112, 228); font-size: 20px;">You are renting : <?php echo $car; ?></span>
      </b><br>
      <span>First name :</span> <span><input type="text" name="fname" placeholder="first name" value="<?php echo $fname; ?>"></span>
      <span class="error">* <?php echo $fnameErr; ?></span>
      <br><br>
      <span>Last name :&emsp14;</span><span><input type="text" name="lname" placeholder="last name" value="<?php echo $lname; ?>"></span>
      <span class="error">* <?php echo $lnameErr; ?></span>
      <br><br>
      <span>E-mail &emsp;&emsp14;&emsp14; :</span><span><input type="text" name="email" placeholder="email" value="<?php echo $email; ?>"></span>
      <span class="error">* <?php echo $emailErr; ?></span>
      <br><br>
      <span>CIN &emsp;&emsp;&emsp14;&emsp14;&emsp14;&emsp14;:</span><span><input type="text" name="cin" placeholder="cin" value="<?php echo $cin; ?>"></span>
      <span class="error">* <?php echo $cinErr; ?></span>
      <br><br>
      <span><a href="#" onclick="openTermsPopup()">Terms and Conditions</a></span>
      <input type="checkbox" id="confirmCheckbox" name="terms" <?php if (isset($_POST['terms'])) echo 'checked'; ?>>
      <span class="error">* <?php echo $termsErr; ?></span>
      <br><br>
      <input type="submit" name="submit" id="confirmButton" value="Confirm">
      <input type="button" name="back" id="confirmButton" value="Go Back" onclick="history.back()">
      <div id="timer">Timer: <span id="countdown"></span></div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($cinErr) && empty($termsErr)) {

      include 'ReservationDB.php';
    }

    ?>

  </div>


  <script>
    var timer = 300;

    function startTimer() {
      var countdownElement = document.getElementById("countdown");

      var countdownInterval = setInterval(function() {
        var minutes = Math.floor(timer / 60);
        var seconds = timer % 60;

        countdownElement.textContent = minutes.toString().padStart(2, "0") + ":" + seconds.toString().padStart(2, "0");

        timer--;

        if (timer < 0) {
          clearInterval(countdownInterval);
          window.location.href = '../pages/ourservices.php';
        }
      }, 1000);
    }

    startTimer();
  </script>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($cinErr) && empty($termsErr)) {
    $car = $_POST['car'];
    $subject = "Reservation Confirmation";
    $message = "Dear " . $_POST['fname'] . " " . $_POST['lname'] . ",\n\n";
    $message .= "We have successfully received your rental request.\n";
    $message .= "You are renting: " . $car . "\n";
    $message .= "First Name: " . $_POST['fname'] . "\n";
    $message .= "Last Name: " . $_POST['lname'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "CIN: " . $_POST['cin'] . "\n\n";
    $message .= "Thank you for choosing our services.We will contact you as soon as possible \n\n";
    $message .= "Best regards,\n";
    $message .= "Rouli";


    if (mail($_POST['email'], $subject, $message)) {
      echo "<script>alert('A confirmation email has been sent to " . $_POST['email'] . "'); window.location.href = '../pages/ourservices.php';</script>";
    } else {
      echo "<script>alert('Failed to send the email'); window.location.href = '../pages/ourservices.php';</script>";
    }
  }


  ?>

  </div>

  <script>
    function openTermsPopup() {
      var termsPopup = window.open("terms.php", "Terms and Conditions", "width=600,height=400");
      setTimeout(function() {
        termsPopup.close();
      }, 60000);
    }
  </script>
</body>

</html>