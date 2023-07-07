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
}

