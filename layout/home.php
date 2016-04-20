<div class="surface">
  <img class="blurry" src="images/surface_blurry.png" alt="" />
  <img src="images/surface.png" alt="" />
  <div class="solgan">
    <div>
      <p class="oao blurryInMain">
          ＯＡＯ
          <br>NTUT NOOK
          <br>北科人的情慾管道
      </p>
    </div>
  </div>
</div>
<div class="advantage">
  <div class="title">
    <h2>網 站 特 點</h2>
  </div>
  <div class="special">
    <div class="left">
      <img src="images/mask.png" />
      <h3>匿名</h3>
      <p>
        小角落的匿名制，創造一層神秘的面紗，朦朧且美麗，給您的交友空間帶來更多的愉悅
      </p>
    </div>
    <div class="right">
      <img src="images/rocket.png" />
      <h3>方便</h3>
      <p>
        簡單易懂又快速方便的介面，一目了然，了解我們想帶給你們的服務。
      </p>
    </div>
  </div>
</div>
<div class="recent">
  <div class="title">
    <h2>最 近 貼 文</h2>
  </div>
  <div class="post">
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
      $index = 4;
      $index = $count - $index;
      while($count--){
        echo "<div class='block insertup'>";
        echo '<h3>#'.$numberArray[$count].'</h3><p>';
        $contentCount = count($contentArray[$count]);
        for($i=0 ; $i < $contentCount ; $i++){
          echo $contentArray[$count][$i].'<br>';
        }
        echo '</p></div>';
        if($count == $index){
          break;
        }
      }
    ?>
    <!-- <div class="block insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div>
    <div class="block insertup">
      <h3>#24</h3>
      <p>
        25y/172/58/微腹肌 ‪#‎濃眉大眼溫柔系極稀有暖男‬
        <br> 想被當成公主捧在手心上呵護嗎？ 想被當成女王對人頤指氣使嗎？
        <br> 誠實/體貼/尊重/信任/多變 無不良前科/嗜好/癖好(事先討論好的不算) 因為工作，所以休假偶爾會出去走走/看電影 有養一隻毛小孩(貓) 所以也會帶他出去溜一溜
        <br> 以上皆是 ‪#‎誠實作答‬ 如果 ‪#‎妳‬ 覺得可以相信我 覺得可以聊看看 歡迎來信： 1.詢問 2.給張妳最有自信的照片 3.附上怎麼聯絡到妳
      </p>
    </div> -->
  </div>
  <div class="title">
    <h2>合作廠商資訊</h2>
  </div>
  <div class="company">
    <div class="com">

      <div class="logo hw">
        <a href="http://herrangus.github.io/NTUT-Hw-Plus/" target="_blank">
          <img  src="http://herrangus.github.io/NTUT-Hw-Plus/images/logo.png" alt="" />
        </a>
      </div>
      <h2>北科Hw+</h2>
      <div class="info">
        <h3>積分兌換</h3>
        <p>
          <img src="images/ticket.png" alt="" />
          <br>即日起，只要1000積分
          <br>一日住宿卷，免費兌換
        </p>
      </div>
    </div>

    <div class="com">

      <div class="logo">
        <a href="http://zxc22884.github.io/minterm/" target="_blank">
          <img src="http://zxc22884.github.io/minterm/image/logo_%E6%9A%AB.png" alt="" />
        </a>

      </div>
      <h2>NTUT FOOD</h2>
      <div class="info">
        <h3>餐廳資訊</h3>
        <p>
          <img src="images/maintain.png" alt="" />
          <br>尚未開放，敬請期待
        </p>
      </div>
    </div>
    <div class="com">

      <div class="logo">
        <a href="http://workforland.azurewebsites.net/wd/mid/index.php" target="_blank">
          <img  src="http://workforland.azurewebsites.net/wd/mid/img/logo.png" alt="" />
        </a>
      </div>
      <h2>北科I美食</h2>
      <div class="info">
        <h3>餐廳資訊</h3>
        <p>
          <img src="https://raw.githubusercontent.com/ntutdaniel/WD_MID_PROJECT/master/mid_project/img/M-2.jpg" alt="" />
          <br>AJC 大叔便當
          <br>大叔的雞肉採用台灣新鮮冷藏雞肉，
          <br>國內上市公司優良合格供應商，
          <br>點餐後店內現做供應，美味吃出。
        </p>
      </div>
    </div>
  </div>
</div>
<!-- <script src="js/home.js"></script> -->
