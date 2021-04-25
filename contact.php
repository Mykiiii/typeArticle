<?php
if(isset($_POST['send']))
{
	 $user=$_POST['user'];
	 $email=$_POST['email'];
	 $subject=$_POST['subject'];
	 $message=$_POST['message'];

	 $to = "mohitmv0673@gmail.com";
	 $headers = "From:mohitmv0673@gmail.com";
	 $msg="Name :".$user."\n Email :".$email."\n Message :".$message;

if(mail($to,$subject,$msg,$headers))
{
	echo '<script>alert("mail send successfully...")</script>';
	header("refresh:1;Contact_us.php");
}
else
{
	echo '<script>alert("mail send not successfully...")</script>';
	header("location:Contact_us.php");
}
}
?>