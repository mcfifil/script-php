<?php

#$dir = '/media/philippe/EVERIO_HDD/SD_VIDEO/PRG006/';
$dir = '/media/philippe/HP SimpleSave/Video_lz/';
$dir2 = '/media/philippe/HP SimpleSave/Video Famille/';
$seq = "6";
$files = scandir($dir);

foreach($files as $file) {

	if (pathinfo($dir.$file, PATHINFO_EXTENSION) == "MOD") {
        echo $dir2.gmdate("Y",filemtime($dir.$file))."/".gmdate("Ymd\THis",filemtime($dir.$file))."_".$file.$seq.".avi"."\n";
    	rename($dir.$file, $dir2.gmdate("Y",filemtime($dir.$file))."/".gmdate("Ymd\THis",filemtime($dir.$file))."_".$file.$seq.".avi");
    }

}


?>
