<?php
$myfile = fopen("1_readfile_data.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("1_readfile_data.txt"));
fclose($myfile);
?> 