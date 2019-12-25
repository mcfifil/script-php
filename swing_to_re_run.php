<?php

$a = array();

$dir_from = new RecursiveDirectoryIterator("/media/philippe/HP SimpleSave/video_famille_corbeille_mov/");
$dir_to = "/media/philippe/HP SimpleSave/Video Famille/";

foreach (new RecursiveIteratorIterator($dir_from) as $filename => $file) {

   if (pathinfo($filename, PATHINFO_EXTENSION) == 'fromlaptop') {
	echo $filename."\n";
        $annee = substr(pathinfo($filename, PATHINFO_BASENAME),0,4);
        $fichier = pathinfo($filename, PATHINFO_FILENAME);
	echo $dir_to.$annee."/".$fichier."\n";
	rename($filename,$dir_to.$annee."/".$fichier);
	
   }    
}

?>
