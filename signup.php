<?php
include("database.php");
?>
<?php
if (isset($_POST['submit']))
  $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$staffid = $_POST['staffid'];
$password = $_POST['password'];
$insert_record = "INSERT INTO signup (firstname,lastname,email,staffid,password ) VALUES ('$firstname','$lastname','$email','$staffid','$password')";
$run_record = mysqli_query($links, $insert_record);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sun Fitness</title>
    <link rel="stylesheet" href="assets/styles/main.css" />
    <script src="assets/scripts/app.js" defer></script>
  </head>

  <body>
    <div class="background-img"></div>
    <main>
      <span
        >Hey there,welcome to
        <h1>SUN Fitness</h1>
      </span>

      <div class="form-container">
        <form action="signup.php" method="post">
          <div class="form-field">
            <img src="assets/images/icons/user-regular.svg" alt="" />
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="First Name"
            />
          </div>
          <div class="form-field">
            <img src="assets/images/icons/user-regular.svg" alt="" />
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Last Name"
            />
          </div>
          <div class="form-field">
            <img src="assets/images/icons/envelope-regular.svg" alt="" />
            <input type="email" name="email" id="email" placeholder="staff@sun.edu.ng" />
          </div>
          <div class="form-field">
            <img src="assets/images/icons/id-badge-regular.svg" alt="" />
            <input
              type="text"
              name="staffid"
              id="staffid"
              placeholder="Staff ID "
            />
          </div>
          <div class="form-field">
            <div class="locked" id="lock"></div>
            <input
              type="password"
              placeholder="password"
              name="password"
              id="password"
            />
            <div class="eye" id="eye"></div>
          </div>
          
          <input type="submit" placeholder="Register" name="submit" />
          <p><a href="index.php">Login instead?</a></p>
        </form>
      </div>
    </main>
  </body>
</html>
