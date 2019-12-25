<?php

$a = array();
$di = new RecursiveDirectoryIterator('/media/philippe/HP SimpleSave/backup/Souvenirs/1980_2011/');

#$di = new RecursiveDirectoryIterator('/media/philippe/HP SimpleSave/Video_lz/');

$dir2 = '/media/philippe/HP SimpleSave/backup/Souvenirs/Avant2012ToMac/';

foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
    #echo $di.'  ~  '.$filename . ' - ' . $file->getSize() . ' bytes \n';
    if (!in_array(pathinfo($di.$filename, PATHINFO_EXTENSION),$a)) {
       array_push($a,pathinfo($di.$filename, PATHINFO_EXTENSION));   
    }
   if (pathinfo($filename, PATHINFO_EXTENSION) == 'MOV') {
     $tmp = $dir2.gmdate("Y",filemtime($filename))."/".gmdate("Ymd\THis",filemtime($filename))."_".basename($filename, '.mp4')."_to_mac.".pathinfo($filename, PATHINFO_EXTENSION);
     echo $tmp."\n";
     #copy($filename, $tmp);
   } 
    
}

var_dump($a);

?>

