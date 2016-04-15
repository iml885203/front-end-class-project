<?php
  $filename = "../data.txt";
  $countname = "../count.txt";
  $str = $_POST['content'];
  //count file
  $count = file($countname);
  $countwrite = fopen($countname, "w+");
  if($count != null){
    echo $count[0]+1;
    fwrite($countwrite, $count[0]+1);
  }
  else{
    echo "1";
    fwrite($countwrite, "1");
  }
  fclose($countwrite);
  //data file
  $datawrite = fopen($filename, "a+");
  fwrite($datawrite, "start\n");
  fwrite($datawrite, $count[0]+1);
  fwrite($datawrite, "\n".$str."\n");
  fwrite($datawrite, "end\n");
  fclose($datawrite);
?>
