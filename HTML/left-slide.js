
<style>main div {width: auto;height: 100%;;margin-right: 25px;;}
		div img{margin-right: 20px;}
		.scroll_div {width:70%; height:146px; margin:0 auto; overflow: hidden; white-space: nowrap;background:#ffffff;}
		.scroll_div img {width:200px;height:140px;border: 0;margin: auto 2px;border:1px #efefef solid;}	
			#scroll_begin, #scroll_end, #scroll_begin ul, #scroll_end ul, #scroll_begin ul li, #scroll_end ul li {
		display:inline;}/*设置ul和li横排*/
		
		</style>






<script type="text/javascript">
	
		function ScrollImgLeft(){
			var speed=15
			var scroll_begin = document.getElementById("scroll_begin");
			var scroll_end = document.getElementById("scroll_end");      /*建立variable>*/
			var scroll_div = document.getElementById("scroll_div");
			scroll_end.innerHTML=scroll_begin.innerHTML                 /*滚动结束时等于开始时  */
			function Marquee(){
    				if(scroll_end.offsetWidth-scroll_div.scrollLeft<=0)   /*当结束时显示宽度小于左转总宽度
    																			左转总宽度递减开始时显示宽度*/
      				scroll_div.scrollLeft-=scroll_begin.offsetWidth
   				 	else
      				scroll_div.scrollLeft++
										}
			var MyMar=setInterval(Marquee,speed)
				scroll_div.onmouseover=function() {clearInterval(MyMar)}                    /* 鼠标在上面停止，不在则继续运行*/
				scroll_div.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
}
</script>

 <div id="scroll_div" class="scroll_div">
      <div id="scroll_begin"> <ul>
	   		<li><img src="https://ffp.hnair.com/FFPClub/cn/gbhy/gbdj/201809/P020180906581988518804.png"/></li>
	   		<li><img src="https://ffp.hnair.com/FFPClub/cn/gbhy/gbdj/201809/P020180906582413040526.png" /></li>
	   		<li><img src="https://ffp.hnair.com/FFPClub/cn/gbhy/gbdj/201809/P020180906582712572630.png" /></li>
	   		   </ul>
      
      </div>
      <div id="scroll_end"></div>
    </div>
    <!--#####滚动区域#####-->
<script type="text/javascript">ScrollImgLeft();</script>
<!--//向左滚动代码结束-->