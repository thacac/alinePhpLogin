<?php
require('./session.php');

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header('location: ../index.php');