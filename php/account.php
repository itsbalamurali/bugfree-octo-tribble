<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

echo "
<body>";
include("models/topbar.php");
echo "
<div class='row'>
<div id='wrapper'>
<div id='content'>
<h2>Account</h2>
<div class='small-3 columns left'>";

include("left-nav.php");

echo "
</div>
<div class='small-9 columns'>
Hey, $loggedInUser->displayname. This is an example secure page designed to demonstrate some of the basic features of UserCake. Just so you know, your title at the moment is $loggedInUser->title, and that can be changed in the admin panel. You registered this account on " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
</div>
<div id='bottom'></div>
</div>";

include("models/footer.php");

?>
