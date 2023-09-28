<?php

use Core\Router;
use Core\Request;
require_once "vendor/autoload.php";
require_once "Core/bootstrap.php";
Router::load("App/routes.php")->direct(Request::uri(),Request::method());







