<?php

$file = fopen("drawing.json", "r") or die("nigga");

echo fread($file,filesize("drawing.json"));
fclose($file);