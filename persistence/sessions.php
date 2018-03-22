<?php

  // Session variables are another way to persist data about a user during a visit to your website. 
  
  // Sessions are typically intended to persist until a period of time after a user leaves your website. 
  // By default, sessions on your PHP server will last up to 3 hours. In contrast, cookies are often set
  // to expire much longer than this.
  
  // Unlike cookies, session variables are stored on the server machine. 
  // In order to access the user's session, they keep a session ID in a cookie on their browser. However, 
  // your application can elect to keep any other information in your session behind any other security 
  // you may choose. You may even keep information *about* a user in their session without specifically 
  // sharing it with them if you like.
  
  // Session data can be assigned and retrieved directly using the $_SESSION array global variable. You do
  // not need to call a method to manage this as you do with cookies. However, you must first "connect" 
  // your script to the session using the session_start() method before $_SESSION will work correctly. It 
  // is recommended that if you intend to use sessions, you simply include a call to this method at the top
  // of your script, before doing anything else.
  
  // Start a session
  session_start();

  // Like any variable, you can determine if a value was previously set for a session variable using isset()
  // If the value is not set, we'll set it. 
  if(!isset($_SESSION['data'])) {
    // From this point until the session expires, we'll have access to the variable. (As long as we use session_start() to connect to a session first)
    $_SESSION['data'] = "value";
  }
  
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessions</title>
</head>
<body>
  
</body>
</html>