<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<h2>Register</h2>
<?php if ($message) echo "<p style='color:green;'>$message</p>"; ?>
<form method="POST" action="">
  Username: <input type="text" name="username" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <input type="submit" value="Register">
</form>
</body>
</html>

