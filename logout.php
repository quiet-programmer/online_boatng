<?php

  require_once "server/server.php";
  require_once "server/login.php";
  require_once "server/Redirect.php";

  session_start();
  unset($_SESSION['phone']);
  session_destroy();

  Redirect::to('index.php?mg=logout successful');
