<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
//Redirect user to registration page if not logged in
if(!isUserLoggedIn()) { 
	header("Location: login.php"); 
	die(); 
}
else{ //Redirect user to account page if logged in
	header("Location: account.php"); 
	die();
}
/*
require_once("models/header.php");
echo "
<body>";
include("models/topbar.php");
echo "
<div class='row'>
<div id='wrapper'>
<div id='content'>
<div class='small-3 columns left'>";
include("left-nav.php");
echo "
</div>
<div class='small-9 columns'>
</div>
<div id='bottom'></div>
</div>";
include("models/footer.php");
*/
?>
