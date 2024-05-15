<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="loginwe.css">
</head>
<body>
<div class="container">
  <form action="serverh.php" method="POST" onsubmit="return validateForm()">
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
    <div class="form-group">
      <label for="Password">Password:</label>
      <input type="password" id="Password" name="Password" placeholder="Enter your password" required>
      <span id="password-strength"></span>
    </div>
    <div id="password-hint" style="font-size: 12px; color: gray;">Password should contain at least 8 characters including uppercase, lowercase, numbers, and special characters.</div>
    <div class="form-group1">
      <input type="checkbox" id="remember-me" name="remember-me">
      <label for="remember-me">Remember Me</label>
    </div>
    <div class="form-group">
      <button type="submit">Login</button>
    </div>
  </form>
</div>
<script>
  function validateForm() {
    const passwordInput = document.getElementById('Password').value;
    const strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    const mediumRegex = /^(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (!strongRegex.test(passwordInput)) {
      alert('Password should be strong!');
      return false;
    }
    return true;
  }
</script>
</body>
</html>
