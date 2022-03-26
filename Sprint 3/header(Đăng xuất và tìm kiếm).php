<?php
	include("config.php");
	@session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Website Ticket | TRANG CHỦ</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
   <?php
	{?>
    				<li><a href="login.php">Đăng xuất</a></li> |
    <?php }
	if(isset($_GET['thoat']))
	{
		unset($_SESSION['login']);
		header('location:login.php');
	}
?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">
		 <form method="get">	
				<input type="text" name="s" class="textbox" value="TÌM KIẾM" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'TÌM KIẾM';}">
				<input type="submit" value="Tìm" >
				</form>
				<div id="response"> </div>
		 </div>
    </div>
     <div class="clear"></div>
     </div>
</body>
</html>