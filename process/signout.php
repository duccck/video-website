<?php
session_start();

unset($_SESSION['role']);
unset($_SESSION['username']);
unset($_SESSION['vip']);
unset($_SESSION['title']);

echo '<script>window.location="../index.php";</script>';
?>

