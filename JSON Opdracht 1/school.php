<?php

$file = 'school3.json';
if(file_exists($file)){
  $filedata = file_get_contents($file);
  $objson = json_decode($filedata);
    echo"<hr><code><pre>";
    print_r($objson);
    echo"</pre></code><hr>";
}

else {
  echo $file . ' not exists';
}

echo $objson->school[0]->courses->MD;
echo ("<br>");
echo $objson->school[1]->courses->Bouw;
 ?>
