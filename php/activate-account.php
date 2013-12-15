<?php 
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Get token param
if(isset($_GET["token"]))
{	
	$token = $_GET["token"];	
	if(!isset($token))
	{
		$errors[] = lang("FORGOTPASS_INVALID_TOKEN");
	}
	else if(!validateActivationToken($token)) //Check for a valid token. Must exist and active must be = 0
	{
		$errors[] = lang("ACCOUNT_TOKEN_NOT_FOUND");
	}
	else
	{
		//Activate the users account
		if(!setUserActive($token))
		{
			$errors[] = lang("SQL_ERROR");
		}
	}
}
else
{
	$errors[] = lang("FORGOTPASS_INVALID_TOKEN");
}

if(count($errors) == 0) {
	$successes[] = lang("ACCOUNT_ACTIVATION_COMPLETE");
}

require_once("models/header.php");

echo "
<body>
<div class='row'>
<div id='wrapper'>
<div id='content'>
<h2>Activate Account</h2>

<div class='small-3 columns left'>";

include("left-nav.php");

echo "
</div>
<div class='small-9 columns'>";

echo resultBlock($errors,$successes);

echo "
</div>
<div id='bottom'></div>
</div>";

include("models/footer.php");

?>
