<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form </title>
    <link rel="stylesheet" href="index.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="index1.php" method="post">
      <div class="input-box">
        <input type="text" name="uid" placeholder="Enter your UserId" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <!-- <div class="input-box">
        <input type="text" placeholder="Enter your name" required>
      </div> -->
      <div class="input-box">
        <input type="password" name="pass" placeholder="Enter password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>