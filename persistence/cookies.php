<?php
  // Cookies are stored on the filesystem of the client computer. The server does not have direct control over 
  // cookies, even though it might seem that way. 
  // PHP can only request that the client set cookies (PHP uses the setcookie() method) and recieve what 
  // the client wants to give back. 
  
  // There are quite a few things that can go wrong with cookies. For example, if the client browser does not 
  // allow cookies, then this functionality will not work as you might expect. You would be able to execute a 
  // perfectly good setcookie() statement and receive no errors, yet not have any information in $_COOKIE no
  // matter how many times you refresh the page. Fun, right?
  
  // Data stored in browser cookies is also considered less secure than other methods since we cannot control 
  // access to the data stored in them.

  // You should not store sensitive information in cookies. 
  // You should not store data that is essential to the functionality of your website in cookies. 
  // Cookies can be a good place for non-essential, semi-temporary data, though for most use cases sessions will also work just as well.

  // A few points of interest.
  // * Cookies are shared with the server website each time the client's web browser requests a web page. 
  // * This data is what populates the $_COOKIE[] array.
  // * The server requests that the client browser stores a cookie value by sending new cookie data in the response 
  //   header. This is how setcookie() works

  //If a cookie is already set...
  if(isset($_COOKIE['firstVisit'])) {
    // ...we'll let the user know.
    $firstVisit = "Since the cookie was set the last time we came to this page, it is now available in PHP. Cookie value is: " . $_COOKIE['firstVisit'];
  } else { 
    // Otherwise, we'll set the cookie and inform the user that that's what we're doing instead.
    setcookie("firstVisit", "Visited");
    $firstVisit = "This is the first time you've visited this session. A cookie is being set now, but it will not appear in the \$_COOKIE array until you navigate to another page on this site (or reload this page).";
  }

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookies</title>
</head>
<body>
  <p><strong><?php echo($firstVisit); ?></strong></p>
  <p>By default <code>setcookie()</code> will create a cookie that lasts until the browser is closed. You can set the expiry time in seconds using the <code>time()</code> function (to get the current time) and adding the number of seconds until you want it to expire.</p>
  <p>For example, to make a cookie that will expire in 5 days:<br>
  <code>setcookie("someCookie", "some value", time() + 5 * 24 * 60 * 60);</code></p>
  <p>Calling the <code>setcookie()</code> function using the same cookie name parameter (the first parameter) will overwrite the old cookie with the new value and expiry time.</p>
  <p>To remove a cookie, use <code>setcookie()</code> with an expiration time in the past. (Ex: <code>time() - 1</code>)</p>
</body>
</html>