<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
  <form action="server.php" method="POST">
    <div class="head">
    <h3>Signup/Login with your Mobile number</h3>
</div>
    
<div class="form-group0">
    <label for="Mobilenumber">Your mobile number</label>
    <input type="tel" id="Mobilenumber" name="Mobilenumber" pattern="[0-9]{10}" placeholder="Enter mobile number" required>
  </div>
  
    <div class="form-group">
        <label for="Username">Username:</label>
        <input type="text" id="Username" name="Username" placeholder="Enter your name" required>
      </div>
      <div class="form-group1">
        <input type="checkbox" id="remember-me" name="remember-me">
        <label for="remember-me">Remember Me</label>
      </div>
    <div class="form-group">
      <button type="submit">Login</button>
    </div>
  </form>
</div>

</body>
</html>
