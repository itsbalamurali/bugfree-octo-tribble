<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

echo "
<body>
<div id='wrapper'>
<div id='content'>
<div id='left-nav'>";
include("left-nav.php");

echo "
</div>
<div id='main'>
</div>
<div id='bottom'></div>
</div>";
include("models/footer.php");
?>
