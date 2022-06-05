<?php
$myfile = fopen("locations.txt", "w");
$txt = "lat:".$_GET['lat']."\tlong:".$_GET['long'];
fwrite($myfile, $txt);
fclose($myfile);
?>