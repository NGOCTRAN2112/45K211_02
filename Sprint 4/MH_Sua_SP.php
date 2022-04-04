<link rel="stylesheet" type="text/css" href="../style.css"/>
<?php 
	include_once('../KETNOI/ketnoi.php'); 
	$dieukien="";
	if(isset($_POST['masp']))
	{
		$masp=$_POST['masp'];
		$dieukien=" WHERE id={$masp}";
	}
	$strSQL="Select * From taikhoan {$dieukien}";
	$bang_sp=mysqli_query($ketnoi,$strSQL );
	
	$row=mysqli_fetch_array($bang_sp);
?>

<form action="" method="post" name="frmCapnhat" id="frmCapnhat">
	<input name="masanpham" type="hidden" value="<?php echo  $row['id']; ?>" />
	<table width="100%" height="372" border="1"  bordercolor="#CCCCCC">
      <!--DWLayoutTable-->
      <tr>
        <td height="23" colspan="3" align="center" valign="top" class="title">Sửa thông tin <?php echo $masp ?></td>
      </tr>
      <tr>
        <td width="176" bgcolor="#E5e5e5" class="smallfont">Tên sinh viên</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txttensp" type="text" id="txttensp" value="<?php echo  $row['username']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Mật khẩu</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtmatkhau" type="text" id="txtgiasp" value="<?php echo  $row['password']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Địa chỉ</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtdiachi" type="text" id="txtanhsp" value="<?php echo  $row['address']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Giới tính</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtgioitinh" type="text" id="txtgiasp" value="<?php echo  $row['gender']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Họ</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtho" type="text" id="txtgiasp" value="<?php echo  $row['fname']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Tên</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtten" type="text" id="txtgiasp" value="<?php echo  $row['lname']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Email</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtemail" type="text" id="txtgiasp" value="<?php echo  $row['email']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Sđt</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtsdt" type="text" id="txtsdt" value="<?php echo  $row['dienthoai']; ?>" size="30" /></td>
      </tr>
      <tr>
        <td width="176" height="27" align="left" bgcolor="#E5e5e5" class="smallfont">Ngày sinh</td>
        <td width="435" bgcolor="#E5e5e5" class="smallfont"><input name="txtngaysinh" type="text" id="txtngaysinh" value="<?php echo  $row['ngaysinh']; ?>" size="30" /></td>
      </tr>
        <td height="28" bgcolor="#E5e5e5" class="smallfont"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td bgcolor="#E5e5e5" class="smallfont"><input name="bntGhi" type="submit" id="bntGhi" value="Cập nhật" /></td>
      </tr>
    </table>
	<input name="hanhdong" type="hidden"  value="SUA_SP">
</form>

