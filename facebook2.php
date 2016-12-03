<div style="float:left; height:auto; width:300px; margin-top:8px; padding-left:5px;">


<script type="text/javascript">

$(document).ready(function() {	


  //Get all the LI from the #tabMenu UL
  $('#tabMenu > li').click(function(){
        
    //remove the selected class from all LI    
    $('#tabMenu > li').removeClass('selected');
    
    //Reassign the LI
    $(this).addClass('selected');
    
    //Hide all the DIV in .boxBody
    $('.boxBody div').slideUp('0');
    
    //Look for the right DIV in boxBody according to the Navigation UL index, therefore, the arrangement is very important.
    $('.boxBody div:eq(' + $('#tabMenu > li').index(this) + ')').slideDown('0');
    
  }).mouseover(function() {

    //Add and remove class, Personally I dont think this is the right way to do it, anyone please suggest    
    $(this).addClass('mouseover');
    $(this).removeClass('mouseout');   
    
  }).mouseout(function() {
    
    //Add and remove class
    $(this).addClass('mouseout');
    $(this).removeClass('mouseover');    
    
  });

  //Mouseover with animate Effect for Category menu list
  $('.boxBody #category li').mouseover(function() {

    //Change background color and animate the padding
    $(this).css('backgroundColor','#FFF');
    $(this).children().animate({paddingLeft:"0px"}, {queue:false, duration:300});
  }).mouseout(function() {
    
    //Change background color and animate the padding
    $(this).css('backgroundColor','');
    $(this).children().animate({paddingLeft:"0"}, {queue:false, duration:300});
  });  
	
  //Mouseover effect for Posts, Comments, Famous Posts and Random Posts menu list.
  $('.boxBody li').click(function(){
    window.location = $(this).find("a").attr("href");
  }).mouseover(function() {
    $(this).css('backgroundColor','#FFF');
  }).mouseout(function() {
    $(this).css('backgroundColor','');
  });  	
	
});

</script>
<style>

/*body{font-family:Myriad Pro;font-size:14px;color:#000000;background-color:#FFFFFF}*/
a {text-decoration:none;}
a:hover {text-decoration:none}

#tabMenu {margin:0;padding:0 0 0 0;list-style:none;}
#tabMenu li {float:left;height:33px;width:100px;cursor:pointer;cursor:hand;}

li.posts {background:url(images/fbutton.png) }
li.comments {background:url(images/gbutton.png) }
li.category {background:url(images/vbutton.png) }

li.mouseover {background-position:0 0;}
li.mouseout {background-position:0 0;}
li.selected {background-position:0px -33px; background-repeat:no-repeat;}

.box {width:300px;;}
/*.boxTop {background:url(images/boxTop.gif) no-repeat;height:11px;clear:both}*/
*html .boxTop {margin-bottom:0px;}
.boxBody {padding-top:32px; }
/*.boxBottom {background:url(images/boxBottom.gif) no-repeat;height:11px;}
*/
.boxBody div {display:none; border:solid; border-width:thin; border-color:#ffffff;}
.boxBody div.show {display:block; border:solid; border-width:thin; border-color:#ffffff;}
.boxBody #category a {display:block; border:solid; border-width:thin; border-color:#ffffff;}

/*.boxBody div ul {margin:0 10px 0 25px;padding:0;width:500px;list-style-image:url(images/arrow.gif)}
*html .boxBody div ul {margin-left:10px;padding-left:15px;}
.boxBody div li {border-bottom:1px dotted #8e8e8e; padding:4px 0;cursor:hand;cursor:pointer;}
.boxBody div ul li.last {border-bottom:none}
.boxBody div li span {font-size:8px;font-style:italic; color:#888;}*/
</style>
</head>
<body>

<div class="box">
<ul id="tabMenu">
  <li class="posts selected"></li>
  <li class="comments"></li>
  <li class="category"></li>


</ul>
<!--<div class="boxTop"></div>-->

<div class="boxBody">
  
  <div id="posts" class="show">
    <table width="auto" height="390" border="0">
  <tr>
    <td>Facebook</td>
  </tr>
</table>
  </div>  
  
  <div id="comments">
  <table width="auto" height="390" border="0">
  <tr>
    <td>google</td>
  </tr>
</table>
  </div>
  
  
  
  <div id="category">
  <table width="auto" height="390" border="0">
  <tr>
    <td>
    <object style="margin-left:80px;" id="counters99" allowscriptaccess="always" type="application/x-shockwave-flash" data="http://static.99widgets.com/counters/swf/counters.swf?id=881227_2&ln=en" width="128" height="170" wmode="transparent"><param name="allowscriptaccess" value="always" /><param name="movie" value="http://static.99widgets.com/counters/swf/counters.swf?id=881227_2&ln=en" /><param name="wmode" value="transparent" /><embed src="http://static.99widgets.com/counters/swf/counters.swf?id=881227_2&ln=en" type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent" width="120" height="160"></embed></object>
    
    <a href="http://s10.flagcounter.com/more/Wp0"><img src="http://s10.flagcounter.com/count/Wp0/bg_FFFFFF/txt_000000/border_FFFFFF/columns_4/maxflags_56/viewers_0/labels_0/pageviews_0/flags_0/" alt="online car buy and sales  information" border="0"></a></td>
  </tr>
</table>
  </div>
  
  
  
  </div>        



<!--<div class="boxBottom"></div>-->

</div>


</div>
</div>