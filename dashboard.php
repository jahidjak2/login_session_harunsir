// dashboard.php
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Dashboard - SecureApp</title>
<style>
  body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; }
  h2 { color: #333; }
  a { margin: 10px; padding: 10px 20px; background: #00bfa6; color: #fff; text-decoration: none; border-radius: 5px; }
  a:hover { background: #00a490; }
</style>
</head>
<body>
  <h2>Welcome to Your Dashboard, <?= htmlspecialchars($username) ?>!</h2>
  <a href="logout.php">Logout</a>
</body>
</html>

