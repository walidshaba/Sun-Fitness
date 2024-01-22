<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sun Fitness</title>
  <link rel="stylesheet" href="assets/styles/styles.css" />
  <script src="assets/scripts/app.js" defer></script>
</head>

<body>
  <main class="main-container">
    <div class="head-txt">
      <h1><?php echo $_SESSION['firstname'];
          ?> welcome to</h1>
      <h1>Sun Fitness Program.</h1>
      <p>Skyline University Nigeria</p>

      <a href="#programs" class="get-started">
        Get Started
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#fff">
          <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
        </svg>
      </a>
    </div>
    <!-- <div class="banner"></div>

      <div class="land-txt">
        <h1>Explore SUN Fitness Programs</h1>
      </div> -->
    <div class="land-img"></div>
    <div class="programs-container">
      <div class="recreation-prog" id="programs">
        <a href="recreation.php">
          <img src="assets/images/tennis shoes.png" alt="" />
          <h1>Recreation Programs</h1>

        </a>
      </div>
      <div class="class-prog">
        <a href="class.php">
          <img src="assets/images/yoga.png" alt="" />
          <h1>Sponsored Class</h1>
        </a>
      </div>
    </div>
  </main>
</body>

</html>