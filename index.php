﻿<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ini_set('display_errors', 1);
require_once 'application/bootstrap.php';
?>