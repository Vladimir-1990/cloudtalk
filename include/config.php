<?php
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);
//error_reporting(E_ALL ^ E_NOTICE);
session_start();

$DBTYPE = 'mysql';
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'cloudtalk';
$link = mysqli_connect("$DBHOST", "$DBUSER", "$DBPASSWORD", "$DBNAME");

$config = array();

$config['basedir'] = 'C:\wamp\www\cloudtalk';
$config['baseurl'] = '';

require_once($config['basedir'].'/smarty/libs/Smarty.class.php');
require_once($config['basedir'].'/libraries/mysmarty.class.php');
require_once($config['basedir'].'/libraries/SConfig.php');
require_once($config['basedir'].'/libraries/SError.php');

include("functions.php");
include("admin_functions.php");

STemplate::assign('baseurl', $config['baseurl']);
STemplate::assign('basedir', $config['basedir']);

?>