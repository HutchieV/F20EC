<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';

  header('Content-Type: application/json');
  $conn = DBAPI::get_db_conn();

  if(isset($_POST["user"]) && isset($_POST["pass"]))
  {
    $user = DBAPI::sanitize_input($_POST["user"]);
    if(DBAPI::check_user_exists($conn, $user))
    {
      echo EAPI::create_error_json("Username taken");
      exit();
    }
    else
    {
      $r->success = DBAPI::create_account($conn, $user, $_POST["pass"]);
      if($r->success == true) $_SESSION["username"] = $user;
      echo json_encode($r);
    }

  }
  else
  {
    echo EAPI::create_error_json("Username or password not specified");
    exit();
  }
?>