<?php
session_start();

unset($_SESSION['name']);
unset($_SESSION['loginFlog']);
header('Location: login.html');

?>