<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['name']);
header("Location:ma.php");