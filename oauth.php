<?php

	$code = $_REQUEST['code'];

	// Enter your Client ID, Client Secret and Redirect URI
	$client_id ="";
	$client_secret = "";
	$redirect_uri = "http://.../oauth.php"; //The redirect_uri is just pointing back to the location of this file

	$uri = file_get_contents("https://api-ssl.bitly.com/oauth/access_token?client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirect_uri."&code=".$code, 
	    true);
	
	// Returns a URL encoded string in the format of "access_token=%s&login=%s&apiKey=%s"
	parse_str($uri);

	//the OAuth access token for specified user
	echo $access_token;

	//the end-user's bitly username
	echo $login;

	//echo $apiKey;  
	//API keys are deprecated. This value will be removed in the future.
 
?>



