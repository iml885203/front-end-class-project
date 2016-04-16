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
    <span class="blurryInMain"><?php echo $_GET["number"]; ?></span>
  </div>
</div>
<script type="text/javascript">
var count = $('.blurryin').children('span').length;
var $ele = $('.blurryin span:nth-child(1)');
var t;
function runblurryin(){
  if(!!count){
    console.log($ele);
    $ele.addClass('In');
    $ele = $ele.next('.blurryInMain');
    count--;
    t = setTimeout("runblurryin()",100);
  }
};
$(runblurryin(count));
</script>
