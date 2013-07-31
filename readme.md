# Bitly Oauth PHP Quick Template


## Setup on bitly

Go to http://bitly.com/a/oauth_apps and follow the steps to register a new application.

The "Redirect URI" must be the same link to where you put oauth.php for your redirect.  

Copy down your Client ID and Client Secret and insert them into index.html and oauth.php.


## The files

index.html - Simple link that starts the authentication process.  This will take the user to a bitly login page.

oauth.php - After the user logs in they will be redirected back here for more of the oauth process and to get the user access token.

##Links

[bitly Developer Website](http://dev.bitly.com/)

[More on bitly Authentication](http://dev.bitly.com/authentication.html)
