<!doctype html>
<html>
<head>
<head>
<body full background = "http://i.imgur.com/zl8K2Hy.png">
</body>

<body>

<!-- HTML -->

</body>
</html>
<meta charset="UTF-8">
<title>Login</title>
<style> 
.login{
width:360px;
margin:50px auto;
font:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
border-radius:100px;
border:5px solid #ccc;
padding :10px 50px 100px;
margin-top:70px;
}

input[type=text],input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
}



input[type=submit]{
width:100%;
background-color:#123;
color:#fff;
border:2px solid#06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;

}
a[class=new2]
{
width:30;
color:#000000;
height:7%;
font-size:50px;
background-color:#fbfcfc

}	
</style> 
</head>
<body>
<br><center> <a class ="new2">YAYASAN KEBAJIKAN ARTIS TANAH AIR</center></br>

<div class="login">
<h1 align="center"><font size = "7" color = "white">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
</form>
<center>
<?php

$con=mysqli_connect("localhost","root","","login");

if(isset($_POST['submit'])){
$user=mysqli_real_escape_string($con, $_POST['user']);
$pass =mysqli_real_escape_string($con,$_POST['pass']);
$select_user="SELECT *FROM staff WHERE user ='$user' AND pass='$pass'";
$run_user=mysqli_query($con,$select_user);
$check_user=mysqli_num_rows($run_user);
if($check_user>0){
header("location: welcome2.php");}

	}

if(isset($_POST['submit'])){
$user=mysqli_real_escape_string($con, $_POST['user']);
$pass =mysqli_real_escape_string($con,$_POST['pass']);
$select_user="SELECT *FROM admin WHERE user ='$user' AND pass='$pass'";
$run_user=mysqli_query($con,$select_user);
$check_user=mysqli_num_rows($run_user);
if($check_user>0){
header("location: welcome.php");}
	else{
		echo "Username or Password invalid" ;
	}
}
?>
</body>
</html>
