<?php
session_start();
$email = $err_msg = "";

include "database.php";
if (isset($_POST['submit'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $sql = "select * from signup where email =? and password = ?";
  $stmt = $links->prepare($sql);
  $stmt->bind_param("ss", $email, $password);
  if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['email'] = $row['email'];
      $_SESSION['firstname'] = $row['firstname'];
      header("location:landPage.php");
    } else {
      $err_msg = "Invalid Password / Email";
    }
  } else {
    $err_msg = "Invalid Password / Email";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/styles/main.css" />
  <script src="assets/scripts/signup.js" defer></script>
</head>

<body>
  <div class="background-img"></div>
  <main>
    <legend>
      <h1>Login to Proceed</h1>
    </legend>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form action="index.php" method="post" class="login_form-container">

      <div class="login-form-field">
        <img src="assets/images/icons/envelope-regular.svg" alt="" />
        <input type="email" name="email" id="email" placeholder="staff@sun.edu.ng" value="<?= $email ?>" />
      </div>
      <div class="login-form-field">
        <div class="locked" id="lock"></div>
        <input type="password" placeholder="password" name="password" id="password" />
        <div class="eye" id="eye"></div>
      </div>
      <input type="submit" placeholder="Register" name="submit" />
      <h4><a href="signup.php">Register instead</a></h4>
    </form>
  </main>
</body>

</html>