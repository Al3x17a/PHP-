<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Template</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './theme/menu.php';
include './theme/logo.php';
?>  
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/Nitro_Wallpaper_5000x2813.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome !!!</a></h2>
				<p class="meta"><span class="date">June 04, 2012</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>This is content area</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
include './theme/sidebar.php';
?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
include './theme/footer.php';
?>
<!-- end #footer -->
</body>
</html> 