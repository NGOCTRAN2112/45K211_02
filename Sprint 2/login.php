<?php
	include("config.php");
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>website</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
<div class="header-top">
			  <div class="header-top-left">
			 <div class="cssmenu">
					<a href="index.php">Thoát</a>
			</div>
			<div class="clear"></div>
	 </div>
     <div class="clear"></div>
     </div>
	</div>
        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Đăng Kí Thành Viên</h4>
					<p>1. Thành viên cần phải đăng kí thông tin một cách chính xác, họ tên phải được viết hoa kí tự đầu và có dấu rõ ràng. Ví dụ <span>Đặng Ngọc Trân</span>, tên truy cập chỉ được chấp nhận kí tự, _ và số, ví dụ <span>ngoctran_10</span>, các tên truy cập chứa kí tự lạ sẽ bị ban quan trị xóa nick ngay lập tức. Kính mong thành viên chấp hành đúng để có thể sinh hoạt trên website 1 cách nghiêm túc và chuyên nghiệp.</p>
                    <p>2. Sau khi điền đầy đủ các thông tin chính xác, các bạn nhấp vào nút Đăng kí, sau khi hệ thống duyệt đơn đăng kí của bạn sẽ gởi đến bạn 1 email kích hoạt tài khoản.
					<div class="button1">
					   <a href="dangki.php"><input type="submit" name="Submit" value="Đăng kí tại đây"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Đăng Nhập Vào Hệ Thống</h4>
					<div id="loginbox" class="loginbox">
						<form action="checklogin.php" method="post">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label id="user" for="modlgn_username">Mã số sinh viên</label>
						      <input id="user" type="text" name="user" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label id="pass" for="modlgn_passwd">Mật khẩu</label>
						      <input id="pass" type="password" name="pass" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <input type="submit" name="login"  id="login" class="button" value="Đăng nhập"><div class="clear"></div>
							 </div>
						  </fieldset>
</body>
</html>