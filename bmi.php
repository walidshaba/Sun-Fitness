<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles/recreation.css" />
    <link rel="stylesheet" href="assets/styles/bmi.css" />
    <title>Recreation</title>
    <script src="assets/scripts/bmi.js" defer></script>
  </head>
  <body>
    <main>
      <div class="prm-nme">
        <a href="landPage.php"
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
          <label class="radio_label">
            <a href="recreation.php">Dashboard</a>
          </label>
          <label class="radio_label active"><a href="bmi.php">BMI</a></label>
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
          <div class="container">
            <h1>BMI Calculator</h1>

            <form class="calculator">
              <div>
                <label for="weight">Weight (kg)</label>
                <input
                  type="number"
                  id="weight"
                  min="0"
                  step="0.01"
                  value="0"
                />
              </div>

              <div>
                <label for="height">Height (cm)</label>
                <input
                  type="number"
                  id="height"
                  min="0"
                  step="0.01"
                  value="0"
                />
              </div>

              <div>
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
              </div>
            </form>

            <section class="output">
              <h3>Your BMI is</h3>
              <p id="bmi">0</p>
              <p id="desc">N/A</p>
            </section>

            <section class="bmi-scale">
              <div style="--color: var(--underweight)">
                <h4>Underweight</h4>
                <p>&lt; 18.5</p>
              </div>

              <div style="--color: var(--normal)">
                <h4>Normal</h4>
                <p>18.5 – 25</p>
              </div>

              <div style="--color: var(--overweight)">
                <h4>Overweight</h4>
                <p>25 – 30</p>
              </div>

              <div style="--color: var(--obese)">
                <h4>Obese</h4>
                <p>≥ 30</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
    <footer>&copy; 2023/34 SE Grp1 Project</footer>
  </body>
</html>
