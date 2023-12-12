<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles/recreation.css" />
    <title>Recreation</title>
  </head>
  <body>
    <main>
      <div class="prm-nme">
        <a class="land" href="landPage.php"
          ><img src="assets/images/sunlogo.png" alt=""
        /></a>
        <h1>Sun Fitness Program</h1>
        <div class="user-profile">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              fill="#fff"
              d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"
            />
          </svg>
          <p><?php echo $_SESSION['firstname'];?></p>
          <a href="logout.php">Logout</a>
        </div>
      </div>
      <div class="main-container">
        <ul class="menu">
          <label class="radio_label active">
            <a href="recreation.php">Dashboard</a>
          </label>
          <label class="radio_label"><a href="bmi.php">BMI</a></label>
          <label class="radio_label">
            <a href="calender.php">Calender</a>
          </label>
          <label class="radio_label">
            <a href="">Workout</a>
          </label>
          <label class="radio_label">
            <a href="">Blogs</a>
          </label>
        </ul>
        <div class="page-cover">
          <ul class="dashboard">
            <li>
              <a href="football.php">
                <img src="assets/images/football.jpg" alt="fooball" />
                <div class="middle"><span>Football</span></div>
              </a>
            </li>
            <li>
              <a href="basketball.php">
                <img src="assets/images/Basketball.jpg" alt="basketball" />
                <div class="middle"><span>Basketball</span></div>
              </a>
            </li>
            <li>
              <a href="softball.php">
                <img src="assets/images/softball.jpg" alt="softball" />
                <div class="middle"><span>Softball</span></div>
              </a>
            </li>
            <li>
              <a href="badminton.php">
                <img src="assets/images/Badminton.jpg" alt="badminton" />
                <div class="middle"><span>Badminton</span></div>
              </a>
            </li>
            <li>
              <a href="jogging.php">
                <img src="assets/images/Jogging.jpg" alt="Jogging" />
                <div class="middle"><span>Jogging</span></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </main>
    <footer>&copy; 2023/34 SE Grp1 Project</footer>
  </body>
</html>
