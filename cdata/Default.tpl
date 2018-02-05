<?php
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
    <div id="ntbg">
	 <div id="nticon"><img src="display/images/news/icons/{newsimg}.png"></div>
	 <div id="nttext">
	   <div class="title">{title}</div>
	   <div class="author">Author: {author}</div>
	 </div>
	 <!--<div id="ntbutton"><a href="#"><div id="read_more"><div class="rmtxt">READ MORE</div></div></a></div>-->
	</div>
	<div id="ntext">{short-story}</div>
HTML;


$template_full = <<<HTML
  <div id="newstop"><div class="ntitle">{title}</div><div class="nfull">Comments ({comments-num})</a></div></div>
  <div id="newsbg"><div class="ntxt">
{short-story}
  </div></div>
  <div id="newsbot"></div>
  <div id="aspace"></div>
HTML;


$template_comment = <<<HTML
<div id="commentsn">
<div class="author"><font color="#45d1ff;">{author}</font>  <font color="#919191">{date}</font></div>
<div class="ctxt">
{comment}
</div></div>
<br><br>
HTML;


$template_form = <<<HTML
<div style="margin-top:15px;" class="addcomm"><div class="cfirst">
  <div class="cusername">
      Username
      <input type="text" name="name" value="{username}">
  </div>
  <div class="cemail">
  E-mail:
      <input type="text" name="mail"  value="{usermail}">
  </div>
</div>
  <div style="margin-top:15px;height:140px;" class="addc">
      <textarea cols="40" rows="6" id=commentsbox name="comments"></textarea>
  </div>
  <div style="margin-top:20px;" class="test">
      <button type="submit" name="submit">
  </div>
</div>
HTML;


$template_prev_next = <<<HTML
<div id="ppagination">[prev-link]<div class="pgprev" style="display:inline-block;height:33px;"></div>[/prev-link]<p class="pages" style="height:24px;display:inline-block;vertical-align:top;">{pages}</p>[next-link]<div class="pgnext" style="height:31px;display:inline-block;"></div>[/next-link]</div>
HTML;


$template_comments_prev_next = <<<HTML
<div id="ppagination">[prev-link]<div class="pgprev" style="display:inline-block;height:31px;"></div>[/prev-link]<p class="pages" style="height:31px;display:inline-block;vertical-align:top;margin-top:-0px;">{pages}</p>[next-link]<div class="pgnext" style="height:31px;display:inline-block;margin-top:-1px;"></div>[/next-link]</div>
HTML;


?>