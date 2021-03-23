<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';
  
  header('Content-Type: application/json');
  $conn = DBAPI::get_db_conn();

  if(isset($_GET["page"]))
  {
    $r->product = DBAPI::get_all_products($conn, $_GET["page"]);

    foreach($r->product as $k => $v)
    {
      $r->product[$k]["images"] = DBAPI::get_product_images($conn, $r->product[$k]["prod_id"]);
    }
    echo json_encode($r);
  }
  else
  {
    echo EAPI::create_error_json("No page number specified");
    exit();
  }

?>