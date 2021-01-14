<?php

function grantAccess(string $role, $targetPage=null)
{
  var_dump($_POST);
  if (!empty($_POST) && !isset($_SESSION['user'])) {
    $testedUser = $_POST['user'];
    echo $testedUser;
    $testedPwd = $_POST['pwd'];
    if (isset($user[$testedUser])) {
      if (password_verify($testedPwd, $user[$testedUser]['pwd'])) {

        $_SESSION['user'] = $user[$testedUser];
        var_dump(in_array('ROLE_ADMIN', $user[$testedUser]['role']));

        if (in_array($role, $user[$testedUser]['role'])) {
          header('location: /' . strtolower(str_replace('ROLE_', '', $role)) . '.php');
          exit();
        }
      } else {
        echo "Le mot de passe ne correspond pas.";
      }
    } else {
      echo "L'utilisateur n'existe pas";
    }
  }
}
