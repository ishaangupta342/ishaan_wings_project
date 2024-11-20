<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="styleL.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="login.inc.php"method="post">
        <div class="txt_field">
          <input type="text" name="UN" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="PS" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="Signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
