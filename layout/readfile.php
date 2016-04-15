<?php
//readfile
  $filename = "../data.txt";
  $str = "";
  if(file_exists($filename)){
    $file = fopen($filename, "r");
    if($file != NULL)
    {
        while (!feof($file)) {
            // $str .= fgets($file)."<br>";
            $index = fgets($file);
            if($index == "start\n"){
              echo "----start----<br>";
              $number = fgets($file);
              echo "numbet: ".$number."<br>";

              while(true){
                $content = fgets($file);
                if($content == "end\n"){
                  echo "----end----<br>";
                  break;
                }
                else{
                  echo $content."<br>";
                }
              }
            }
        }
        fclose($file);
    }
  }
  echo $str;
?>
