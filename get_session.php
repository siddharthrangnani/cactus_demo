<?php
session_start();
echo $_SESSION['username'];
echo $_SESSION['password'];
echo "we have saved your session";
?>