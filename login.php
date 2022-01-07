<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log in form </title>
    <link rel="stylesheet" href="index.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Log In</h2>
    <form action="login1.php" method="post">
      <div class="input-box">
        <input type="text" name="f1" placeholder="Enter your User ID" required>
      </div>
      <div class="input-box">
        <input type="password" name="f2" placeholder="Enter password" required>
      </div>

      <div class="input-box button">
        <input type="submit" name="submit" value="Log In">
      </div>
      <div class="text">
        <h3>New User? <a href="index.php">Reg now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>