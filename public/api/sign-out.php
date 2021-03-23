<?php
  require '../../includes/config.php';
  require 'db.class.php';
  require 'error.class.php';

  session_destroy();

  header('Content-Type: application/json');
  $r->success = true;
  echo json_encode($r);
  exit();
?>