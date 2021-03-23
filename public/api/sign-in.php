<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';

  header('Content-Type: application/json');
  $conn = DBAPI::get_db_conn();

  if(isset($_POST["user"]) && isset($_POST["pass"]))
  {
    $user = DBAPI::sanitize_input($_POST["user"]);
    if(DBAPI::verify_password($conn, $user, $_POST["pass"]))
    {
      $r->success = true;
      if($r->success == true) $_SESSION["username"] = $user;
      echo json_encode($r);
    }
    else
    {
      echo EAPI::create_error_json("Username or password incorrect");
      exit();
    }
  }
  else
  {
    echo EAPI::create_error_json("Username or password not specified");
    exit();
  }
?>