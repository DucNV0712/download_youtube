<?php

class WebControllers{
    public function home(){

    }
    public  function downloadThumbnails(){
        if (isset($_POST['download_thumbnails'])){
            $imgUrl = $_POST['imgUrl'];
            $ch = curl_init($imgUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $download = curl_exec($ch);
            curl_close($ch);
            header('Content-type: image/jpg');
            header('Content-Disposition: attachment; filename = "thumbnail.jpg"');
            echo $download;
        }
        include "views/Home.php";
    }
}
