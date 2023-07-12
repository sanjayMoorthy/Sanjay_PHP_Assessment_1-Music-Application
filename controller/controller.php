<?php
require 'model/userModel.php';

class musicController {
    private $projectModel;

    public function __construct() {
        $this->projectModel = new productModel();
    }

    public function view(){
         require 'view/userHomepage.php';
    }


    public function artistsUplodepage(){
        require 'view/artistUplode.php';
    }

    public function uplodeArtist($artistData,$artistImage) {
        $artistName = $artistData['artistName'];
        $image = $artistImage['artistImage'];
        $description = $artistData['artistDescription'];



        $path ='view/artistImage/';
        $destination = $path.$image['name'];
        move_uploaded_file($image['tmp_name'],$destination);

        $artist = $this->projectModel->artistsUplode($artistName,$destination,$description);
        header('location:/');
    }

    public function songUplode(){
        require 'view/songUplode.php';
    }

    public function uplodeSong($songdetails,$songimage){
        $songName = $songdetails['songName'];
        $songImage = $songimage['songImage'];
        $song = $songimage['song'];
        $songDec = $songdetails['des'];

        $path ='view/songImage/';
        $imageDestination = $path.$songImage['name'];
        move_uploaded_file($songImage['tmp_name'],$imageDestination);

        $path ='view/songs/';
        $songDestination = $path.$song['name'];
        move_uploaded_file($song['tmp_name'],$songDestination);

        $songs = $this->projectModel->uplodesong($songName,$imageDestination,$songDestination,$songDec);
        header('location:/');

    }

    public function searchsong($data){
        $serachInput = $data['Details'];
        $details = $this->projectModel->searchDetails($serachInput);
        require 'view/homePage.php';
    }

    public function loginPage(){
        require 'view/login.php';
    }

    public function loginUser_homePage(){
        require 'view/loginUserhomePage.php';
    }

    public function signupPage(){
        require 'view/signup.php';
    }

    public function signUp($datas){
        $userName = $datas['name'];
        $userEmail = $datas['email'];
        $userPassword = $datas['password'];
        $this->projectModel->signUp($userName,$userEmail,$userPassword);
    }

    public function login($logindetails){
        // print_r($logindetails);
        $userEmailid = $logindetails['email'];
        $usersPassword = $logindetails['password'];

        $this->projectModel->login($userEmailid,$usersPassword);
    }
}
