<?php

	$code = $_REQUEST['code'];

	$client_id ="";
	$client_secret = "";
	$redirect_uri = "http://.../oauth.php"; //In this example the redirect_uri is just pointing back to this file

	$uri = file_get_contents("https://api-ssl.bitly.com/oauth/access_token?client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirect_uri."&code=".$code, 
	    true);

	parse_str($uri);

	//the OAuth access token for specified user
	echo $access_token;

	//the end-user's bitly username
	echo $login;

	//echo $apiKey;  
	//API keys are deprecated. This value will be removed in the future.
 
?>



