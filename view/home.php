<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./assets/style.css" />
    <title>Home</title>
  </head>
  <body>
    
    <div class="container">
      <!-- Navbar -->
      <div class="navbar">
        <img src="./assets/upload/paw-logo.png" class="logo" />
        <nav>
          <ul>
          <li><a href="home.php">Home</a></li>
            <li><a href="index.php">Shop</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            <li><a href="../controller/logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="hero-section">
          <h1 class="container hero-title">WELCOME TO PAW IT FORWARD!</h1>
          <br>
          <p class="container" style="font-size: 26px; margin-top: -40px;">
            All your pet's needs in one place!
          </p>
        </div>

        <div class="toggle">
            <h1 class="container">How can we help you?</h1>
            <ul class="container">
                <li><a href="salonBooking.html">Book Saloon Appointment</a></li>
                <li><a href="appointment.php">Book Doctor's Appointment</a></li>
                <li><a href="petNutr.html">Pet Nutrition Guide</a></li>
                <li><a href="review.html">Review</a></li>
            </ul>
        </div>
      </div>

      <!-- Footer -->
    <div class="footer">
        <p class="container"> © 2023 Paw It Forward. All rights reserved.</p>
        
        <div class="container footer-content">
            <div class="quickLinks">
                <ul class="">
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="help.html">Help/FAQ</a></li>
                </ul>
            </div>
            <div class="contactUs">
                <p style="color: #fff; margin-bottom: 30px; margin-top: -20px;">Contact Us</p>
                <ul>
                    <li>Phone: +880 154 768521</li>
                    <li>Email: pawitforward@gmail.com </li>
                    <li>Website: www.pawitforward.com </li>
                </ul>
        </div>
    </div>

  </body>
</html>
