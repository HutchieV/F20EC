<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';

  header('Content-Type: application/json');
  $conn = DBAPI::get_db_conn();

  if(isset($_SESSION["user_id"]))
  {
    $basket = DBAPI::get_basket($conn, $_SESSION["user_id"]);
    echo json_encode($basket);
  }
  else
  {
    echo EAPI::create_error_json("Not signed in");
    exit();
  }
?>