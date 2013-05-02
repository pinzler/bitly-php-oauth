<?php

	$code = $_REQUEST['code'];

	// Enter your Client ID, Client Secret and Redirect URI
	$client_id ="";
	$client_secret = "";
	$redirect_uri = "http://.../oauth.php"; //The redirect_uri is just pointing back to the location of this file

	$uri = "https://api-ssl.bitly.com/oauth/access_token"; //?client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirect_uri."&code=".$code;

	//POST to the bitly authentication endpoint
	$params = array();
    	$params['client_id'] = $client_id;
    	$params['client_secret'] = $client_secret;
    	$params['code'] = $code;
    	$params['redirect_uri'] = $redirect_uri;
	
	$output = "";
  	$params_string = "";
  	foreach ($params as $key=>$value) { $params_string .= $key.'='.$value.'&'; }
  		rtrim($params_string,'&');
  	try {
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $uri);
		curl_setopt($ch,CURLOPT_POST, count($params));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $params_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $output = curl_exec($ch);
  	} catch (Exception $e) {
  	}
	// Returns a URL encoded string in the format of "access_token=%s&login=%s&apiKey=%s"
	
	// parse_str() creates variables $access_token, $login, $apiKey (http://php.net/manual/en/function.parse-str.php)
	parse_str($uri);

	//the OAuth access token for specified user
	echo $access_token;

	//the end-user's bitly username
	echo $login;

	//echo $apiKey;  
	//API keys are deprecated. This value will be removed in the future.
 
?>



