<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$ketnoi=new mysqli(
		'localhost',
		'root',
		'',
		'leoshop'
	);
	$ketnoi->set_charset('utf8');
?>
<?php 
$hanhdong="";
$thongbao="";
if(isset($_POST['hanhdong']))
{
	$hanhdong=$_POST['hanhdong'];	
		
	if($hanhdong=='SUA_TK')
		$thongbao=SuathongtinTK();	

}
function SuathongtinTK()
{
	global $ketnoi;
	$masp="";
	$tensp="";
	$giasp="";
	$anhsp="";
	$anhcolon="";
	$avaibiliti="";
	$mahsx="";
	$soluong="";
	$mota="";
		
	if(isset($_POST['txtmatkhau']))
		$giasp=$_POST['txtmatkhau'];
	if(isset($_POST['txtdiachi']))
		$anhsp=$_POST['txtdiachi'];
	if(isset($_POST['txtgioitinh']))
		$anhcolon=$_POST['txtgioitinh'];
	if(isset($_POST['txtho']))
		$avaibiliti=$_POST['txtho'];
	if(isset($_POST['txtten']))
		$baohanh=$_POST['txtten'];
	if(isset($_POST['txtemail']))
		$soluong=$_POST['txtemail'];
	if(isset($_POST['txtsdt']))
		$mota=$_POST['txtsdt'];
	if(isset($_POST['txtngaysinh']))
		$safeoff=$_POST['txtngaysinh'];
        ?>;