# Bitly Authentication PHP Quick Template
=================================================================================

## Setup on Bitly

Go to http://bitly.com/a/oauth_apps and create a new app

Fill in all the information required however you want, except:

Copy down your Client ID and Client Secret and insert them into index.html and oauth.php

The full URL for where you put the oauth.php file will also be needed for the "redirect_uri" variables on index.html and oauth.php

## The files

index.html - Simple link that starts the authentication process.  This will take the user to a bitly login page.

oauth.php - After the user logs in they will be redirected back here for more of the oauth process and to get the user access token.