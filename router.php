<?php

 require 'controller/controller.php';

class Router
{
    public $route = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new musicController();
    }

    public function get($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routes($uri, $method)
    {
        foreach ($this->route as $routers) {
            if ($routers['uri'] === $uri) {
                $action = $routers['action'];
                switch ($action) {
                    case 'view':
                        $this->controller->view();
                        break;
                    // case 'login':
                    //     $this->controller->loginPage();
                    //     break;
                    case 'artistsUplodpage':
                        $this->controller->artistsUplodepage();
                    break;
                    case 'uplodeArtist':
                        $this->controller->uplodeArtist($_POST,$_FILES);
                    break;
                    case 'songupload':
                        $this->controller->songUplode();
                    break;
                    case 'uplodingSong':
                        $this->controller->uplodeSong($_POST,$_FILES);
                    break;
                    case 'search':
                        $this->controller->searchsong($_POST);
                    break;
                }
            }
        }
    }
}