<?php
include('db1.php');
$error="";
$id="0";
$name="";
$user="";
$pass="";


//delete exist 
if(isset($_GET['deleted']))
{
$sql="delete from staff where id='{$_GET['id']}' ";
$query=$db1->query($sql);
if($query)
{
	{header('Refresh:0; staff.php'); }
}
}

?>
<center>
<?php


$output = NULL;


if(isset($_POST['submit'])) {
	
	$mysqli =NEW MySQLi("localhost", "root","","login");
	
		
	$fullname = $mysqli->real_escape_string($_POST['fullname']);
	$username = $mysqli->real_escape_string($_POST['user']);
	$password = $mysqli->real_escape_string($_POST['pass']);
	$rpassword = $mysqli->real_escape_string($_POST['rpass']);
	
	$query = $mysqli->query("SELECT * FROM staff WHERE user = ' $username'");
	
	if(empty($username) or empty($password) or empty ($fullname) or empty($rpassword)){
		$output = "Please fill in all fields";
	}elseif($query->num_rows !=0){
		$output = "Username is already taken";
	}elseif($rpassword !=$password){
		$output = "Your password don't match";
	}elseif(strlen($password) <5){
		$output = "Your password must  be at least 5 characters";
	}else{
		//Encrypt the password
		
		
		//Insert the record
		$insert = $mysqli->query("INSERT INTO staff(fullname,user,pass) 
		VALUES('$fullname','$username','$password')");
			if($insert != TRUE){
				$output = "There is problem<br />";
				$output .=$mysqli->error;
			}else{
				$output = "Staff have been registered! ";
			}
	}


}
?>

<style>

.header{
width:360px;
margin:50px auto;
font:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
border-radius:100px;
border:2px solid #ccc;
padding :100px 50px 100px;
margin-top:100px;
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

a[class=new]{
width:65px;
background-color:#123;
color:#fff;
border:2px solid#06F;
padding:5px;
font-size:16px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;
float:left;
height:20px;

}	

</style>
<body full background = "https://images.unsplash.com/photo-1491183672482-d0af0e44929d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e041b3a3488b7dd2d028c7350c7c6ee1&auto=format&fit=crop&w=1950&q=80">
</body>


<html>

<head>
<a href="http://localhost/bekam/welcome.php" class="new" >BACK</a>
<br/>
	<title>Register</title>
	
	
</head>

<div class="header">
	<h1>Register</h1>


<form method="post" action=" ">
	<table>
		 <tr>
			<td>Full name:</td>
			<td><input type="text" name="fullname" class="textInput"></td>
		</tr>
		
		<tr>
			<td>Username:</td>
			<td><input type="text" name="user" class="textInput"></td>
		</tr>
		
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" class="textInput"></td>
		</tr>
		
		<tr>
			<td>Repeat Password:</td>
			<td><input type="password" name="rpass" class="textInput"></td>
		</tr>
				
		
	</table>
	<input type="submit" name="submit" value="Register">
</form>
<?php
echo $output;
?>
