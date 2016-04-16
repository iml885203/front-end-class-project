<div class="nooks">
  <div class="grid">
    <?php
      //readfile
      $filename = '../data.txt';
      $str = '';
      if (file_exists($filename)) {
        $file = fopen($filename, 'r');
        if ($file != null) {
          $count = 0;
          $numberArray = array();
          $contentArray = array();
          while (!feof($file)) {
            // $str .= fgets($file)."<br>";
            $index = fgets($file);
            if ($index == "start\n") {
              //echo "----start----<br>";
              //echo "<div class='grid-thing insertup'>";
              $count++;
              $number = fgets($file);
              //echo "numbet: ".$number."<br>";
              //echo '<h3>#'.$number.'</h3><p>';
              array_push($numberArray, $number);
              $contentArea = array();
              while (true) {
                $content = fgets($file);
                if ($content == "end\n") {
                  //echo "----end----<br>";
                  //echo '</p></div>';
                  array_push($contentArray, $contentArea);
                  break;
                } else {
                  //echo $content.'<br>';
                  array_push($contentArea, $content);
                }
              }
            }
          }
          fclose($file);
        }
      }
      while($count--){
        echo "<div class='grid-thing insertup'>";
        echo '<h3>#'.$numberArray[$count].'</h3><p>';
        $contentCount = count($contentArray[$count]);
        while($contentCount--){
          echo $contentArray[$count][$contentCount].'<br>';
        }
        echo '</p></div>';
      }
    ?>

    <div class="grid-thing insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
    <div class="grid-thing insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br>
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br>
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
    <div class="grid-thing insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算)
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
    <div class="grid-thing insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
    <div class="grid-thing insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
    <div class="grid-thing insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
  </div>
</div>
