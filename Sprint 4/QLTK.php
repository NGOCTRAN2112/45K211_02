<link rel="stylesheet" type="text/css" href="../style.css">
<?php 
$ketnoi="";
$ketnoi=new mysqli(
  'localhost',
  'root',
  '',
  'Website'
);
$ketnoi->set_charset('utf8');

?>
<?php 

	include_once('../QL_TK/XL_Cap_Nhat_Tai_Khoan.php');
	if(isset($_POST['chucnang']))
	{
		$chucnang=$_POST['chucnang'];
		if($chucnang=='them')
			include_once('../QL_TK/MH_ThemTK.php');
		else if($chucnang=='sua')
			include_once('../QL_TK/MH_Sua_TK.php');
	}
?>
<?php 
$SQl = "SELECT * FROM taikhoan where id = " .$_REQUEST['id'];
$result=mysqli_query($ketnoi,$SQl);

?>
<?php 
$SQlKH="SELECT * FROM taikhoan ORDER BY id DESC LIMIT 0 , 5";
$resultKH=mysqli_query($ketnoi,$SQlKH);
?>
<?php 
$Count_Kh="SELECT count( * ) FROM taikhoan";
$bang_KH=mysqli_query($ketnoi,$Count_Kh); 
$row=mysqli_fetch_array($bang_KH);
$tongsodong=$row[0];
?>
<style type="text/css">
<!--
.style2 {color: #FF0000; font-weight: bold; }
-->
</style>
<a href="/Website Ticket">Quay lại</a>
<table width="100%" border="1" bordercolor="#CCCCCC">
<tr>
<td align="left" class="title" style="color:#000" background="../Login-Admin/images/bg.png" ><strong>Thống kê</strong></td>
</tr>
</table>
<br />
<table width="100%" height="110" border="1" bordercolor="#CCCCCC">
  <tr>
    <td height="35" colspan="6" class="title" ><strong>Thông tin cá nhân</strong></td>
  </tr>
  <tr>
    <td width="119"  height="21" align="center" class="title" style="color:#000"   background="../Login-Admin/images/bg.png"><strong>Mã sinh viên</strong></td>
    <td width="312"  align="center" class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Tên sinh viên</td>
    <td width="213" align="center"  class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Giới tính<br>    </td>
    <td width="289" align="center"  class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Địa chỉ</td>
    <td colspan="2" align="center"  class="title" style="color:#000"   background="../Login-Admin/images/bg.png">Chức năng</td>
  </tr>
  <?php while($row=mysqli_fetch_array($result)){?>
  <tr>
    <td  height="21" align="center" bgcolor="#E5e5e5" class="smallfont" ><?php echo $row['id']; ?></td>
    <td  align="left" bgcolor="#E5e5e5" class="smallfont"><?php echo $row['username']; ?>&nbsp;</td>
    <td align="left"  bgcolor="#E5e5e5" class="smallfont"><?php echo $row['gender']; ?>&nbsp;</td>
    <td  bgcolor="#E5e5e5" class="smallfont"><?php echo $row['address']; ?>&nbsp;</td>
    <td width="52"  bgcolor="#E5e5e5" class="smallfont"><a href="#"onClick="frmQlsp_onSubmit( <?php echo  $row['id']; ?>,'sua')">&nbsp;Sửa</a></td>
  </tr>
  <?php }?>

	
</table>
<br />

<form action="" method="post" name="frmQLSP">
<input name="chucnang" type="hidden" value="">
<input name="masp" type="hidden" value="">
<input name="hanhdong" type="hidden" value="">
</form>
<script language="JavaScript" type="text/javascript">
function frmQlsp_onSubmit(masp,chucnang)
{
	document.frmQLSP.chucnang.value=chucnang;
	document.frmQLSP.masp.value=masp;
	document.frmQLSP.submit();	
}

</script>

