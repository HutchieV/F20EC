<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';

  header('Content-Type: application/json');
  $conn = DBAPI::get_db_conn();

  if(!isset($_GET["id"]))  {
    echo EAPI::create_error_json("No product id specified");
    exit();
  }

  if(!isset($_SESSION["user_id"]))  {
    echo EAPI::create_error_json("Not signed in");
    exit();
  }

  try
  {
    DBAPI::add_to_basket($conn, $_GET["id"], $_SESSION["user_id"]);
    $r->success = true;
    echo json_encode($r);
  }
  catch(Exception $e)
  {
    echo EAPI::create_error_json("An unknown error occured");
    exit();
  }
?>