    <?php
      $file = 'school3.json';
      if(file_exists($file)){
        $filedata = file_get_contents($file);
        $objson = json_decode($filedata);
          echo"<hr><code><pre>";
          print_r($objson);
          echo"</hr></code></pre>";
      }
      else
      {
       echo $file .' does not exist';
      }

      echo $objson->school[0]->courses->MD;
      echo("<br>");
      echo $objson->school[1]->courses->Bouw;


     ?>
