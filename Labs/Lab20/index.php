<?php
session_start();
require_once('utils.php');
?>
<?php
header('Location: dgb_report.php');
?>
<?php include("partials/_header.html"); ?>
<?php include("html/login_form.html"); ?>
<?php include("partials/_footer.html"); ?>