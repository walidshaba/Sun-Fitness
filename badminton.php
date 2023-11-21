<?php
include("database.php");
// session_start();
?>
<?php
if (isset($_POST['submit']))
  $fullname = $_POST['fname'];
$sport = $_POST['sport'];
$weight= $_POST['weight'];
$date = date('Y-m-d', strtotime($_POST['date']));
$insert_record = "INSERT INTO sport (fullname, sport, weight, date) VALUES ('$fullname','$sport','$weight','$date')";
$run_record = mysqli_query($links, $insert_record);

if($run_record){
  // $_SESSION['status'] = "Data Sent";
  // header('Location: recreation.html');
  // echo "Data Sent";
}
else{
  // $_SESSION['status'] = "Not sent";
  // header('Location: football.php');
}

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
        <a href="landPage.html"><img src="assets/images/sunlogo.png" alt="" /></a>
        <h1>Badminton</h1>
      </div>
      <div class="main-container">
        <ul class="menu">
          <label class="radio_label active">
            <a href="recreation.html">Dashboard</a>
          </label>
          <label class="radio_label"><a href="bmi.html">BMI</a></label>
          <label class="radio_label">
            <a href="calender.html">Calender</a>
          </label>
          <label class="radio_label">
            <a href="">Workout</a>
          </label>
          <label class="radio_label">
            <a href="">Blogs</a>
          </label>
        </ul>
        <div class="page-cover">
            <form action="badminton.php" method="post">
            <div class="text-form">  <label for="">Full Name:</label><input type="text" name="fname"></div><br>
            <div class="text-form"><label for="">Sport:</label><input type="text" value="Badminton" name="sport" readonly></div><br>
            <div class="text-form"> <label for="">Weight in (kg):</label><input type="number" name="weight" id=""></div><br>
            <div class="text-form"> <label for="">Available time:</label><input type="date" name="date" id=""></div><br>
            <div class="text-form"><input type="submit" name="submit" value="update"></div>    
            </form>
        </div>
      </div>
    </main>
    <footer>&copy; 2023/34 SE Grp1 Project</footer>
  </body>
</html>
