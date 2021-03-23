<?php

  class EAPI
  {
    static function create_error_json($message, $details="")
    {
      $e->error   = $message;
      $e->details = $details;
      return json_encode($e);
    }
  }

?>