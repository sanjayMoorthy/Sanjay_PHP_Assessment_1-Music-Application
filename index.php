<?php

require 'router.php';




$router = new Router();

$router->get('/','view');
// $router->POST('/login','login');


// for page redirection
$router->POST('/artistsUplodpage','artistsUplodpage');

// uploding details
$router->POST('/uplodeArtist','uplodeArtist');


// for page redirection
$router->POST('/songupload','songupload');
// for uploding
$router->POST('/uplodingSong','uplodingSong');

$router->POST('/search','search');

$router->routes($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);