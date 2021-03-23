<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';
  
  header('Content-Type: application/json');
  $conn = DBAPI::get_db_conn();

  if(isset($_GET["id"]))
  {
    $r->product = DBAPI::get_product($conn, $_GET["id"]);
    $r->images  = DBAPI::get_product_images($conn, $_GET["id"]);
    echo json_encode($r);
  }
  else
  {
    echo EAPI::create_error_json("No or invalid product ID specified");
    exit();
  }


?>