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
    <script src="./assets/scripts/app.js" defer></script>
</head>

<body>
    <main>
        <nav class="prm-nme">
            <a class="land" href="landPage.php">
                <img src="assets/images/sunlogo.png" alt="" />
            </a>
            <h1>Sun Fitness Program</h1>
            <div class="user-profile">
                <a href="registered_recreation.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#fff" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                    </svg></a>
                <p>
                    <a href="registered_recreation.php">
                        <?php
                        echo $_SESSION['firstname']; ?>
                    </a>

                </p>
                <a href="logout.php">Logout</a>
            </div>
        </nav>
        <div class="main-container">
            <div class="burger" id="burger-container">
                <img src="assets/images/icons/menu-bars.svg" alt="">
            </div>
            <ul class="menu" id="menu">
                <label class="radio_label ">
                    <a href="recreation.php">Dashboard</a>
                </label>
                <label class="radio_label"><a href="bmi.php">BMI</a></label>
                <label class="radio_label">
                    <a href="calender.php">Sport Time</a>
                </label>
                <label class="radio_label active">
                    <a href="">Workout</a>
                </label>
                <label class="radio_label">
                    <a href="">Blogs</a>
                </label>
            </ul>
            <ul class=" page-cover">
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/Dead Lift.jpg" alt="fooball" />
                        <div class="middle"><span>Deadlift</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/mountain climbers.jpeg" alt="basketball" />
                        <div class="middle"><span>Mountain Climbers</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/plank.jpeg" alt="softball" />
                        <div class="middle"><span>Planks</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/pullup.jpg" alt="badminton" />
                        <div class="middle"><span>Pull Ups</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/squat.jpeg" alt="Jogging" />
                        <div class="middle"><span>Squats</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/bench press.jpg" alt="Jogging" />
                        <div class="middle"><span>Bench Press</span></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/exercise_images/bicep curls.jpg" alt="Jogging" />
                        <div class="middle"><span>Bicep curls</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <footer>&copy; 2023/34 SE Grp1 Project</footer>
</body>

</html>