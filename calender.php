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
  <style>
    table {
      margin-top: 20px;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;

    }

    td,
    th {
      border: 2px solid #dddddd;
      text-align: left;
      padding: 8px;
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: #ffffff;

    }

    tr:nth-child(odd) {
      background-color: #ffffff;
    }
  </style>
  </style>
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
      <ul class="menu" id="menu">
        <label class="radio_label ">
          <a href="recreation.php">Dashboard</a>
        </label>
        <label class="radio_label"><a href="bmi.php">BMI</a></label>
        <label class="radio_label  active">
          <a href="calender.php">Sport Time</a>
        </label>
        <label class="radio_label">
          <a href="workout.php">Workout</a>
        </label>
        <label class="radio_label">
          <a href="">Blogs</a>
        </label>
      </ul>
      <div class="page-cover">
        <table>
          <tr>
            <th>Instructor's Name</th>
            <th>Sport</th>
            <th>Time Frame</th>
            <th>Days</th>
          </tr>
          <tr>
            <td> Mr Sunday (Head Coach)</td>
            <td>Basketball</td>
            <td>4:30 - 6:00</td>
            <td>Monday - Tuesday</td>
          </tr>
          <tr>
            <td>Mr Ismail (Head Coach)</td>
            <td>Football</td>
            <td>4:30 - 6:00</td>
            <td>Monday - Wednesdays</td>
          </tr>
          <tr>
            <td>Mr Franklin (Assistant Coach)</td>
            <td>Basketball</td>
            <td>4:00 - 6:00</td>
            <td>Monday - Wednesday</td>
          </tr>
          <tr>
            <td>Mr Farouq (Headcoach )</td>
            <td>Softball</td>
            <td>4:00 - 6:00</td>
            <td>Thursday</td>
          </tr>
          <tr>
            <td>Mr Amin</td>
            <td>Jogging</td>
            <td>10:00 - 11:00</td>
            <td>Saturday</td>
          </tr>
          <tr>
            <td>Mr Abdul</td>
            <td>Badminton</td>
            <td>4:30 - 5:30</td>
            <td>Thursday & Friday</td>
          </tr>
        </table>
      </div>
    </div>
  </main>
  <footer>&copy; 2023/34 SE Grp1 Project</footer>
</body>

</html>