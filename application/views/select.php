<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<p id="head">Select the type of Player</p>
<!-- <link href="jimgMenukwicks.css" rel="stylesheet" type="text/css" /> -->
<script type="text/javascript" src="http://localhost/myShootball/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/myShootball/js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="http://localhost/myShootball/js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="http://localhost/myShootball/js/jquery.kwicks-1.5.1.pack.js"></script>
<style>
body {
	margin:10px;
	padding:0;
	color: #333;
	background-color: #EDEDED;
	background-image: url(http://localhost/myShootball/images/surya.jpg);
	background-repeat: repeat-x;
	background-attachment: fixed;
	background-position: center top;
	width: 100%;
}
</style>
<!--[if IE]>
<script type="text/javascript">
$().ready(function() {
	$(".jimgMenu ul").kwicks({max: 310, duration: 400, easing: "easeOutQuad"});
});
</script> 
<![endif]-->
<script type="text/javascript">
$().ready(function() {
	$('.jimgMenu ul').kwicks({max: 310, duration: 300, easing: 'easeOutQuad'});
	});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/select_page.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/x.css">
</head>
<body>
<div class="jimgMenu">
  <ul>
    <li id="goalkeeper"><a href="<?php echo base_url();?>index.php/Bid/index/1">Goalkeeper</a></li>
    <li id="forward"><a href="<?php echo base_url();?>index.php/Bid/index/4">Striker</a></li>
    <li id="defender"><a href="<?php echo base_url();?>index.php/Bid/index/2">Defender</a></li>
    <li id="marquee"><a href="<?php echo base_url();?>index.php/Bid/index/5">marquee</a></li>
   <!-- <li id="abstract"><a href="#nogo">Abstract</a></li> -->
    <li id="midfielder"><a href="<?php echo base_url();?>index.php/Bid/index/3">Midfielder</a></li>
  </ul>
</div>
<br  style="clear:both"/><br />
<div class="description">
		
</div>
<hr style="width:92%;text-align:center;height:1px;border:1px;color:#e2e2e2;background-color:#e2e2e2;" />
</body>
</html>
