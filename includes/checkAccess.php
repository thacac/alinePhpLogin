<?php
require('./includes/session.php');

function checkAccess(string $role)
{
  if (!in_array($role, $_SESSION['user']['role'])) {
    header("location: /index.php", 403);
    exit;
  }
}
