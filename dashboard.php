<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p>This is your dashboard.</p>
<a href="logout.php">Logout</a>
</body>
</html>
