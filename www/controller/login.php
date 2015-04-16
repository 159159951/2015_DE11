<?php
session_start();
include ("../models/user.php");

//Xu ly dang nhap
if(isset($_POST['login'])){
	if($_POST['username']=="")
	{
		$is_error = "Chưa điền tên người dùng";
	}
	else if($_POST['password']=="")
	{
		$is_error = "Chưa điền mật khẩu";
	}
	else
	{
		//Xử lý đăng nhập
		$a = "select * from user where username = '".$_POST['username']."'";
		$q = mysql_query($a);
		if($r = mysql_fetch_array($q)){
			//Kiem tra xem dung mat khau hay khong
			if($r['password']== $_POST['password'])
			{
				//Dung mat khau
				$_SESSION['user']= $r['fullname'];
				header("location:http://localhost");
			}
			else
			{
				$is_error = "Mật khẩu không đúng.!";
			}
			
		}
		else{
				$is_error = "Tên người dùng không đúng.!";
			}
	}
		
}



include ("../views/login.html");
?>