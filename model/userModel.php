<?php

require 'connection.php';


class productModel extends DB
{

    public function artistsUplode($name,$img,$dec){
        $this->db->query("INSERT INTO artists (artists_name,artists_image,artist_description) VALUES ('$name','$img','$dec')" );
        
    }

    public function uplodesong($songName,$imageDestination,$songDestination,$songDec){
        // var_dump($songName,$imageDestination,$songDestination,$songDec);

        $this->db->query("INSERT INTO songs (song_name,song_image,song_path,artists_id,description) VALUES ('$songName','$imageDestination','$songDestination','2','$songDec')" );

    }

    // public function searchDetails($detail){
    //     $getDetail = $this->db->prepare("SELECT * FROM songs WHERE song_name = $detail");
    //     $getDetail->execute();
    //     $get = $getDetail ->fetchAll(PDO::FETCH_OBJ);
    //     return $get;
    // }

    public function signUp($userName,$userEmail,$userPassword){
        // print_r($userName);
        if(isset($userName)) {
            try {
                $check = $this->db->prepare("SELECT * FROM users WHERE email_id = '$userEmail'");
                $check->execute();
                $result = $check->fetchAll(PDO::FETCH_OBJ);
                if (empty($result)) {
            try {
                $insert = $this->db->prepare("INSERT INTO users(name,email_id,PASSWORD,is_admin,is_existingUser)VALUES('$userName','$userEmail','$userPassword','0','1')");
                $insert->execute();
                header('location:/loginUserHomepage');;
                    } catch (exception $e) {
                        die ($e->getMessage());
                    }
                } else {
                    echo 'You have already account';
                    header("location:/signupPage");
                }
            } catch (exception $e) {
                die ("connection error" . $e->getMessage());
            }
        }
    } 

    public function login($userEmailid,$usersPassword){

        try{
            $insert = $this->db->prepare("SELECT * FROM users WHERE email_id = '$userEmailid' and is_admin = 1");
            $insert->execute();
            $fetch = $insert->fetchAll(PDO::FETCH_OBJ);

            $norMal = $this->db->query("select * from users where email_id = '$userEmailid' and PASSWORD = '$usersPassword' ");
        
            if($fetch){
                header('location: view/adminHomePage.php');
            }else if($norMal){
                require 'view/loginUserhomePage.php';
            }else{
                require 'view/login.php';
            }

        }
        catch(exception $e){
            die($e->getMessage());
        }


    //     try{
    //         $insert = $this->db->prepare("SELECT * FROM users WHERE email_id = '$userEmailid'");
    //         $insert->execute();
    //         $fetch = $insert->fetchAll(PDO::FETCH_OBJ);
        
    //         foreach($fetch as $fetches){
    //             if($fetches->email_id == "$userEmailid" && $fetches->PASSWORD == "$usersPassword"){
    //                 header("location:/loginUserHomepage");
    //             }
    //             else{
    //                 header("location:/loginPage");
    //                 echo"You entered Wrong Password or Email";
    //             }
    //         }
    //     }
    //     catch(exception $e){
    //         die($e->getMessage());
    //     }
    // }
    }
}