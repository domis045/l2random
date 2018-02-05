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

	<div id="pibg">SERVER INFORMATION</div>

	<div id="piright"></div></center>

   <!-- PAGE TITLE -->

   <!-- INFORMATION --><div style="margin-top:15px;"></div>

  <div id="server_rates">

<div id="ifirst">Server Rates</div><div id="irates">

XP Rate: <font color="#d3b9f0">0x</font><br>

SP Rate: <font color="#d3b9f0">0x</font><br>

Party XP Rate: <font color="#d3b9f0">0x</font> <font color="#bfb9c6">(0*0=0x)</font><br>

Party SP Rate: <font color="#d3b9f0">0x</font> <font color="#bfb9c6">(0*0=0x)</font><br>

Adena Rate: <font color="#d3b9f0">0x</font><br>

Drop Rate: <font color="#d3b9f0">0x</font><br>

Spoil Rate: <font color="#d3b9f0">0x</font><br>

Quest Rate: <font color="#d3b9f0">0x</font><br>

RaidBoss Drop Rate: <font color="#d3b9f0">0x</font><br>

  </div></div>

  <div id="enchant_rates">

<div id="isecond">Server Enchant Rates</div><div id="irates">

Simple Scroll: <font color="#d3b9f0">00%</font><br>

Blessed Scroll: <font color="#d3b9f0">00%</font><br>

Crystal Scroll: <font color="#d3b9f0">00%</font><br>

Safe Enchant: <font color="#d3b9f0">+4</font><br>

Max Enchant: <font color="#d3b9f0">+16</font>

  </div></div>

  <div id="raidboss_respawn">

<div id="ithird">Epic Respawn Time</div><div id="irates">

Antharas: <font color="#d3b9f0">48 hours</font> <font color="#bfb9c6">(+/- 4 hours)</font><br>

Baium: <font color="#d3b9f0">40 hours</font> <font color="#bfb9c6">(+/- 4 hours)</font><br>

Zaken: <font color="#d3b9f0">48 hours</font> <font color="#bfb9c6">(+/- 4 hours)</font><br>

Valakas: <font color="#d3b9f0">56 hours</font> <font color="#bfb9c6">(+/- 6 hours)</font><br>

Queen Ant: <font color="#d3b9f0">36 hours</font> <font color="#bfb9c6">(+/- 4 hours)</font><br>

Core: <font color="#d3b9f0">28 hours</font> <font color="#bfb9c6">(+/- 2 hours)</font><br>

Orfen: <font color="#d3b9f0">28 hours</font> <font color="#bfb9c6">(+/- 2 hours)</font><br>

Sailren: <font color="#d3b9f0">36 hours</font> <font color="#bfb9c6">(+/- 8 hours)</font><br>

Frintezza: <font color="#d3b9f0">56 hours</font> <font color="#bfb9c6">(+/- 6 hours)</font>

  </div></div>

       <div id="clear"></div>

  <div id="other">

<div id="ifourth">Other Information About Our Server</div><div id="irates">

<b>The buff system</b><br>

Maximum allowed buffs for each player are 0 including dances and songs. The buff system has not been magnificently modified. Duration has been changed to 1 hour for all buffs. The server will provide a buffer at each Town, Village, Township or Harbor.<br><br>

<b>In-Game Command's</b><br>

<font color="#d3b9f0">.menu</font> - Server statistics, Change Password, Repair Bugged Character etc..<br><br>

<b>Grand Olympiad</b><br>

Grand Olympiad starts at 18:00 (GMT+2) and ends at 24:00 (GMT+2). Heroes change every Sunday, 24:00 (GMT+2). Olympiad Points can be only exchanged on Sunday and you can retrieve your Hero Status from Monument of Heroes.<br><br>

<b>GM Shop</b><br>

At our GM Shop, you can find all kinds of Armors, Weapons and Jewelery up till B-Grade. Alongside them, you can also find some Receipts, Consumables (such as Soulshots/Spiritshots/Blessed Spiritshots up till B-Grade, Spirit Ore, Soul Ore, Arrows etc.), some Quest items among other things.<br><br>

<b>Other NPC's</b><br>

At our server, you can find different kind of NPC's, such as <font color="#d3b9f0">Class Changer, Catacboms/Necropolics Gatekeeper, Blacksmith of Mammon, Merchant of Mammon, Wedding Manager, Donation Shop, Event Shop</font>.<br>

  </div></div>

   <!-- INFORMATION -->

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