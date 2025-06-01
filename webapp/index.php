<!-- ✅ HTML part comes after PHP logic -->
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<?php if ($message) echo "<p style='color:red;'>$message</p>"; ?>
<form method="POST" action="">
  Username: <input type="text" name="username" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <input type="submit" value="Login">
</form>
<p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>

