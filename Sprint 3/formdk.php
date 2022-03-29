<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<script type="text/javascript">
function validateForm()
{
var a = document.getElementById("username").value;
var b = document.getElementById("password").value;
var c = document.getElementById("confirmPasswordInput").value;
var d = document.getElementById("email").value;
var e = document.getElementById("coding").value;
var f = document.getElementById("class").value;
var g = document.getElementById("phone").value;
user = String(a);
pass = String(b);
confirmpassword = String(c);
email = String(d);
coding = String(e);
fclass = String(f);
phone = String(g);
if (user=="")
{
alert("Bạn cần nhập username !");
return false;
}
if(pass == "")
{
	alert("Bạn cần nhập mật khẩu");
	return false;
}
if(confirmpassword=='')
{
alert("Bạn cần xác nhận lại mật khẩu");
return false;
}
if(email=='')
{
	alert("Bạn cần nhập email");
	return false;
}
if(coding=='')
{
	alert("Bạn cần nhập mã sinh viên");
	return false;
}
if(fclass=='')
{
	alert("Bạn cần nhập lớp");
	return false;
}
if(phone=='')
{

	alert("Bạn cần nhập số điện thoại");
	return false;
}
else
{ 
	alert ("Đăng ký thất bại")};
	return false;	
	alert("Đăng ký thành công");
	
	

}

</script>

<h4 class="title">TẠO TÀI KHOẢN </h4>		   
<form action="themtk.php" method="POST">
    <div class="col_1_of_2 span_1_of_2">
	    <div><input type="text" id="username" name="username" placeholder="Tên hiển thị(*)" ></div>
	    <div><input type="password" id="password" name="password" placeholder="Mật khẩu(*)" ></div>
	    <div><input type="password" id="confirmPasswordInput" placeholder="Nhập lại mật khẩu(*)" ></div>
	    <div><input type="email" id="email" name="email" placeholder="Email(*)" ></div>
    </div>
	<div class="col_1_of_2 span_1_of_2">	
		<div><input type="number" id="coding" name="coding" placeholder="Mã sinh viên(*)" ></div>
   		<div><input type="text" id="class" name="class" placeholder="Lớp(*)" ></div>	         
		<div><input type="number" id="phone" size ="10" name="phone" placeholder="SĐT(10 số)" ></div>	          
	</div>
	<div>
    <div><input type="text" id="fname" name="fname" placeholder="Họ tên(*) " ></div>
		<!-- <input type="text" value="" class="code"> - <input type="text" value="" class="number">
		<p class="code">Họ + Tên(*)</p> -->
	</div>
    <input type="submit" value="Đăng ký" onclick="validateForm()">
</form>
	
				
