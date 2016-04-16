<div class="sendsucess">
  <div class="blurryin">
    <span class="blurryInMain">匿</span>
    <span class="blurryInMain">名</span>
    <span class="blurryInMain">發</span>
    <span class="blurryInMain">文</span>
    <span class="blurryInMain">成</span>
    <span class="blurryInMain">功<br></span>
    <span class="blurryInMain">文</span>
    <span class="blurryInMain">章</span>
    <span class="blurryInMain">編</span>
    <span class="blurryInMain">號</span>
    <span class="blurryInMain">#</span>
    <span class="blurryInMain"><?php echo $_GET["number"]; ?><br></span>
    <span class="blurryInMain">頁</span>
    <span class="blurryInMain">面</span>
    <span class="blurryInMain">即</span>
    <span class="blurryInMain">將</span>
    <span class="blurryInMain">跳</span>
    <span class="blurryInMain">轉</span>
  </div>
  <br>
  <div class="niceass">

  </div>
</div>
<script type="text/javascript">
var count = $('.blurryin').children('span').length;
var $ele = $('.blurryin span:nth-child(1)');
var niceass = 3;
var t;
function gotonooks(){
  console.log('run');
  if(!!niceass){
    console.log(niceass);
    niceass--;
    $('.niceass').html(niceass);
    setTimeout("gotonooks()",1000);
    if(niceass == 0){
      $('.menu ul li:nth-child(2)').click();
    }
  }
}
function runblurryin(){
  if(!!count){
    console.log(count);
    $ele.addClass('In');
    $ele = $ele.next('.blurryInMain');
    count--;
    setTimeout("runblurryin()",100);
    if(count == 0){
      gotonooks();
    }
  }
};
$(runblurryin(count));
</script>
