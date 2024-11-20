<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up Page</title>
    <link rel="stylesheet" href="styleL.css">
    <link rel="stylesheet" href="stylePC.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up</h1>
      <form action="submit.inc.php" method="post">
        <h5><br><br>Looks like you are not a member. Register yourself on our systems.</h5>
        <div class="txt_field">
          <input type="text" name="UN" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="PS" oninput="strengthChecker()" id="password" required>
          <span></span>
          <label>Password</label>
          <div id="strength-bar"></div>
        </div>
        <input type="submit" value="Signup">
      </form>
      <div>
        <p id="msg"></p>
        <br>
      </div>
    </div>
    <script src="script1.js"></script>
  </body>
</html>


