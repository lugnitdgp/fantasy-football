
<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>css/bid_page.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/jquery-ui.min.js" type="text/javascript"></script>
	<script>
		$(function(){
			$("#search").autocomplete({
				source: "<?php echo base_url()?>index.php/Bid/search_result/<?php echo $category?>" // path to the get_birds method
			});
		});
	</script>
	<style type="text/css">
		.ui-autocomplete { position: absolute; cursor: default; background:#CCC }

		/* workarounds */
		html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */
		.ui-menu {
			list-style:none;
			padding: 2px;
			margin: 0;
			display:block;
			float: left;
		}
		.ui-menu .ui-menu {
			margin-top: 50px;
		}
		.ui-menu .ui-menu-item {
			margin:0;
			padding: 0;
			zoom: 1;
			float: left;
			clear: left;
			width: 100%;
		}
		.ui-menu .ui-menu-item a {
			text-decoration:none;
			display:block;
			padding:.2em .4em;
			line-height:1.5;
			zoom:1;
		}
		.ui-menu .ui-menu-item a.ui-state-hover,
		.ui-menu .ui-menu-item a.ui-state-active {
			font-weight: normal;
			margin: -1px;
		}
		.ui-menu-item:hover{
			background-color: #777;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1>CHOOSE <?php

			switch($category){
				case 1:
					echo "GOALKEEPER";
					break;
				case 2:
					echo "DEFENDER";
					break;
				case 3:
					echo "MIDFIELDER";
					break;
				case 4:
					echo "STRIKER";
					break;
				case 5:
					echo "MARQUEE";
					break;
			}
			?></h1>
		
		<div class="search-two">
			<form method="post" action="<?php echo base_url();?>index.php/Main">
				<input id="search" type="text" placeholder="Search..." name="player" required autocomplete="off" autofocus>
				<input type="submit" value="Search">
				<div class="clear"></div>
			</form>
		</div>
		
	</div>
</body>
</html>