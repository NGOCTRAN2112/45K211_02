<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include('config.php');
	@session_start();
?>
<?php
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if(empty($user) && empty($pass))
		// Không điền mã sinh viên và mật khẩu
		{
			echo "<script>alert('Vui lòng nhập đầy đủ thông tin.');</script>";
		}else
		{
			$query = mysqli_query($con,"select id from taikhoan where username = '{$user}' && password = '{$pass}'");
			$result = mysqli_fetch_array($query);
			// Hàm mysqli_fetch_array() sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp, mảng liên tục hoặc cả hai.
			// $result là kết quả của truy vấn, là kết quả trả về của các hàm: mysqli_query(),
			if($result)			
			{
				echo "Đăng nhập thành công !. <a href='index.php'  style='	text-decoration:none;'>Ấn đây để quay về trang chủ</a>";
				$_SESSION['login'] = $result['id'];
				// session chứa thông tin về người dùng có id trên và có sẵn cho tất cả các trang trong ứng dụng.
			}
			else
			{
				echo "Vui lòng kiểm tra USER or PASS !. <a href='login.php' style='	text-decoration:none;'> &lsaquo;&lsaquo; Quay trở lại</a>";
			}
		}
	}
?>