<?php
require('./includes/session.php');
require('./includes/checkAccess.php');


if (isset($_SESSION['user'])) {
  $connStatus = "CONNECTÉ";
} else {
  $connStatus = "NON CONNECTÉ";
}
?>

<html>

<head>
  <title>Admin</title>
</head>

<body>
  <h1>Bonjour <?= $_SESSION['user']['firstname'] ?></h1>
  <a href="/includes/logout.php">logout</a>
  <p><?= $connStatus; ?></p>
</body>

</html>