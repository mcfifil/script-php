<?php

$dir = '/home/philippe/Téléchargements/Tal/';
$dir2 = '/home/philippe/Bureau/Musique Filles/';
$ext = 'mp3';
$files = scandir($dir);

#$ext = pathinfo($dir.$files1[2], PATHINFO_EXTENSION);

foreach($files as $file) {

	if (pathinfo($dir.$file, PATHINFO_EXTENSION) == $ext) {
    	$cmd = "ffmpeg -i \"".$dir.$file."\" -af \"volume=0.3\" \"".$dir2."low10_".$file.".mp3"."\"";
        echo $cmd."\n";
        exec($cmd);
    }

}


?>
