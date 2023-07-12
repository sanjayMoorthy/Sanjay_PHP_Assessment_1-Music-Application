<?php

require 'router.php';




$router = new Router();

$router->get('/','view');

// for page redirection

$router->POST('/loginPage','loginPage');
$router->POST('/signupPage','signupPage');

// for logind and signup
$router->POST('/signUp','signUp');
$router->POST('/login','login');

// for page redirection
$router->POST('/artistsUplodpage','artistsUplodpage');

// uploding details
$router->POST('/uplodeArtist','uplodeArtist');

// for login user homepage
$router->POST('/loginUserHomepage','loginUserHomepage');

// for page redirection
$router->POST('/songupload','songupload');
// for uploding
$router->POST('/uplodingSong','uplodingSong');

$router->POST('/search','search');

$router->routes($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);