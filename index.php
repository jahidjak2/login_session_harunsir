<?php
session_start();

if (isset($_SESSION['username'])) {
    // User is logged in — redirect to dashboard
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Welcome - SecureApp</title>
<style>
  body {
    font-family: 'Montserrat', sans-serif;
    background: linear-gradient(135deg, #00bfa6, #005f56);
    color: #ffffff;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  h1 {
    font-weight: 700;
    font-size: 3rem;
    margin-bottom: 1em;
    text-shadow: 0 2px 6px rgba(0,0,0,0.3);
  }
  .btn-group {
    display: flex;
    gap: 20px;
  }
  a {
    padding: 15px 30px;
    background-color: #121212;
    color: #00bfa6;
    text-decoration: none;
    font-weight: 600;
    border-radius: 30px;
    box-shadow: 0 4px 15px rgba(0,191,166,0.4);
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  a:hover {
    background-color: #00bfa6;
    color: #121212;
    box-shadow: 0 6px 20px rgba(0,191,166,0.7);
  }
</style>
</head>
<body>
  <h1>Welcome to SecureApp</h1>
  <div class="btn-group">
    <a href="registration.php">Register</a>
    <a href="login.php">Login</a>
  </div>
</body>
</html>
