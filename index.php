<?php
require('./includes/session.php');
require('./includes/grantAccess.php');

$user = [
    'cedric' => [
        'pwd' => '$2y$10$1/rMEN7yc53eXKMrJQD5fex/qWvjdk3v55jsHoKeypCmqhstwx3FK',
        'role' => ["ROLE_ADMIN", "ROLE_USER"],
        'mail' => 'cedric.caccomo@gmail.com',
        'firstname' => 'cedric'
    ],
    'aline' => [
        'pwd' => '$2y$10$1/rMEN7yc53eXKMrJQD5fex/qWvjdk3v55jsHoKeypCmqhstwx3FK',
        'role' => ["ROLE_USER"],
    ]
];
?>

<html>

<head>
    <title>Connexion php</title>
</head>

<body>
    <?php
    if (isset($_SESSION['user'])) {
        echo '<h1>Connecté</h1>';
    } else {
        echo '<h1>Non Connecté</h1>';
    }
    ?>
    <form action="#" method="post">
        <input type="text" name="user" value="<?= $_POST['user'] ?? ""; ?>">
        <input type="text" name="pwd" value="<?= $_POST['pwd'] ?? ""; ?>">
        <button>connect</button>
    </form>
</body>

</html>