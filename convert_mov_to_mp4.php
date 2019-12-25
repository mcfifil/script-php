<?php

$a = array();
$di = new RecursiveDirectoryIterator('/media/philippe/HP SimpleSave/Video Famille/');

#$dir2 = '/media/philippe/HP SimpleSave/Video Famille/';

#$option = "-c:v libx264 -pix_fmt yuv420p -color_range 0 -vprofile high -c:a copy";

$option = "-pix_fmt yuv420p -vprofile main -crf 20";


$i=0;



foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
   if (pathinfo($filename, PATHINFO_EXTENSION) == 'MOV') {
     $i++;
     $tmp = "ffmpeg -y -i \"".$filename."\" ".$option." \"".pathinfo($filename, PATHINFO_DIRNAME)."/".pathinfo($filename, PATHINFO_FILENAME).".mp4\" -hide_banner";
     echo $tmp."\n";
     exec($tmp);
     $tmp2 = "/media/philippe/HP SimpleSave/video_famille_corbeille_mov/".pathinfo($filename, PATHINFO_BASENAME);
     echo "move: ".$tmp2."\n";
     rename($filename, $tmp2.".test2");
        
     if ($i == 3) { die(); }
   } 
    
}

?>
