<?PHP include('display/scripts/reload.php') ?>

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

	<div id="pibg">HOW TO CONNECT</div>

	<div id="piright"></div></center>

   <!-- PAGE TITLE -->

   <!-- DOWNLOADS --><div style="margin-top:15px;"></div><div id="downloads">

To connect to our server is very simple. What do you have to do? Just follow the steps below and you'll be able to enjoy a unique experience in our server! If you're having any kind of trouble, please, see our Forum for our support.<br><br>

<font style="font-size:14px;font-family:'Trajan';font-weight:bold;">1. Download and Install the game</font><br>

If you still do not have the game, download and install the Lineage II Interlude (C6) client on your computer.<br>

<br>

Note: Once installed, do not start the game and do not Update it.<br><br>

<a href="http://www.gamershell.com/download_18458.shtml" target="_blank"><img src="display/images/download.png" style="width:43px;height:43px;" align="absmiddle">&nbsp;&nbsp;&nbsp;Download Lineage II - The Caothic Throne: High Five client</a>

<br><br>

<font style="font-size:14px;font-family:'Trajan';font-weight:bold;">2. Download and Install our Server Files</font><br>

Now that you have the Client, you have to download our Server Files in order to play in our Server! It is very simple - just press one of the links below, save them to your Desktop, unzip them and put them in your Lineage 2 Client directory.<br><br>

<a href="#" target="_blank"><img src="display/images/download.png" style="width:43px;height:43px;" align="absmiddle">&nbsp;&nbsp;&nbsp;Download L2Server Server Files [4Shared]</a><br><br>

<a href="#" target="_blank"><img src="display/images/download.png" style="width:43px;height:43px;" align="absmiddle">&nbsp;&nbsp;&nbsp;Download L2Server Server Files [2Shared]</a><br>

<br><br>

<font style="font-size:14px;font-family:'Trajan';font-weight:bold;">3. Play the Game!</font><br>

Everything is set! All you have to do is go to the system folder, find L2.exe, double-click it and play it! Enjoy the Game!<br><br>

   </div><!-- DOWNLOADS -->

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