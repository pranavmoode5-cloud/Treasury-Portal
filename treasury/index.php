<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome to Digital Treasury</h2>
<p>Status: System is self-sufficient</p>

<a href="logout.php">Logout</a>
