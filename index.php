<?PHP 
// Remove the comment when you fix this file (need db connection)
//include('display/scripts/reload.php') 
?>

<?php include('display/extra/variables.php'); ?>

<!DOCTYPE html>

<html>

<?PHP include('display/extra/head.php') ?>

<body>

<div id="container">

 <!-- STATUS -->

<?PHP include('display/extra/server_status.php') ?>

  <!-- STATUS -->

       <div id="main_top">

  <!-- NAVIGATION -->

   <div id="nav">

<?php echo $navigation ?>

   </div>

  <!-- NAVIGATION -->

       </div>

       <div id="main_center">

     <div id="left">

  <!-- LEFT -->

    <!-- BUTTONS -->

	 <div id="sbuttons">

	   <div id="sbfirst"><div style="padding-top:11px;"></div>

	   <?php echo $serverstart ?>

<div id="timer">

<div class="numbers" id="count2"></div>

<div id="dday" style="display:inline-block;"></div>&nbsp;<div id="days" style="display:inline-block;">Days</div>&nbsp;

<div id="dhour" style="display:inline-block;"></div>&nbsp;<div id="hours" style="display:inline-block;">Hours</div>&nbsp;

<div id="dmin" style="display:inline-block;"></div>&nbsp;<div id="minutes" style="display:inline-block;">Minutes</div>&nbsp;

<div id="dsec" style="display:inline-block;"></div>&nbsp;<div id="seconds" style="display:inline-block;">Seconds</div>

<style>

#asd {color:#fff;}

</style>

<script src="display/js/time.js" type="text/javascript"></script>

</div>

	   

	   </div>

	   <div id="sbsecond"><div style="padding-top:18px;"><?php echo $secondbutton ?></div></div>

	   <div id="sbthird"><div style="padding-top:18px;"><?php echo $thirdbutton ?></div></div>

	 </div>

	<!-- BUTTONS -->

	<!-- SERVER TOPS -->

<?PHP include('display/extra/server_tops.php') ?>

	<!-- SERVER TOPS -->

<?PHP include('display/extra/side_panels.php') ?>

	<!-- VOTE -->

<?php echo $vote ?>

	<!-- VOTE -->

  <!-- LEFT -->

	 </div>

	 <div id="right">

  <!-- RIGHT -->

   <!-- SLIDER -->

   <div id="slider"><div id="sliderbg"><div id="sliderimg"><div id='slideshow_panel'>

<?php echo $slider ?>

	</div></div></div></div>

   <!-- SLIDER -->

   <!-- PAGE TITLE -->

    <center><div id="pileft"></div>

	<div id="pibg">SERVER NEWS</div>

	<div id="piright"></div></center>

   <!-- PAGE TITLE -->

   <!-- NEWS -->

<?php

$number = "5";

$category="1";

include("display/nsystem/show_news.php");

?>

   <!-- NEWS -->

   <!-- RIGHT -->

	 </div>

       </div>

	   <div id="main_bottom"></div>

	   <div id="clear"></div>

	   <div id="footer">

  <!-- FOOTER -->

    <div class="text"></div>

  <!-- FOOTER -->

	   </div>

</div>

</body>

</html>