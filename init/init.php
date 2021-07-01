<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
//--------------------------//
//      SESSIONS           //
//------------------------//
ini_set('session.cookie_lifetime', false);
session_start();

//Include Configuration
include_once('app/helpers/functions.php');
require_once('config/config.php');
include_once('app/classes_helpers/Database.php');
require 'app/Autoloader.php';
