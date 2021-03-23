<?php

  class EAPI
  {
    static function create_error_json($message)
    {
      $e->error = $message;
      return json_encode($e);
    }
  }

?>