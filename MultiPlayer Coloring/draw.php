<?php

$file = fopen("drawing.json", "r") or die("dead");

$jsonjson = fread($file,filesize("drawing.json"));
fclose($file);

$decode = json_decode($jsonjson, true);

$x = $_POST["x"];
$y = $_POST["y"];
$color = $_POST["color"];

for($i = 0; $i < count($decode); $i++)
{
    if($decode[$i]["x"] < $x && $decode[$i]["x"] + 100 > $x
    && $decode[$i]["y"] < $y && $decode[$i]["y"] + 100 > $y)
    {
        $decode[$i]["color"] = $color;
        break;
    }
}

$encode = json_encode($decode);
file_put_contents("drawing.json", $encode);
