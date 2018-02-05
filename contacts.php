<?php include('display/extra/variables.php'); ?>

<?PHP include('display/scripts/reload.php') ?>

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

	<div id="pibg">CONTACTS</div>

	<div id="piright"></div></center>

   <!-- PAGE TITLE -->

   <!-- DOWNLOADS --><div style="margin-top:15px;"></div><div id="downloads">

Skype: <a href="skype:SkypeName?chat">Skype</a><br>

E-Mail: <a href="mailto:mail@gmail.com">mail@gmail.com</a><br><br>

1. Please, understand that we will only respond to serious questions/problems.<br>

2. All "hi, you there" type of messages <b>will</b> be ignored!<br>

3. Please, talk like civilized people, otherwise you <b>will</b> be ignored.<br>

4. We don't need any GM's!

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