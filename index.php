<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/main.css" />
    <script src="assets/scripts/app.js" defer></script>
  </head>
  <body>
    <div class="background-img"></div>
    <main>
      <legend><h1>Login to Proceed</h1></legend>
      <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
       <?php }?>
      <form action="login.php" method="post" class="login_form-container">
       
        <div class="login-form-field">
          <img src="assets/images/icons/envelope-regular.svg" alt="" />
          <input
            type="email"
            name="email"
            id="email"
            placeholder="staff@sun.edu.ng"
          />
        </div>
        <div class="login-form-field">
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
        <h4><a href="signup.php">Register instead</a></h4>
      </form>
    </main>
  </body>
</html>