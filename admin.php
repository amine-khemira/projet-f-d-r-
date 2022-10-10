<?php
session_start();
ob_start();
include ('security.php');
//include header.php
include ('header.php');
?>
<?php
require ('Template/_admindash.php');
?>
?>
<?php
//include Footer.php
include ('Footer.php')
?>
