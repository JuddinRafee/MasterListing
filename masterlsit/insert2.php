<?php
include('db.php');
$error="";
$id="0";
$name="";
$ic="";
$phone="";
$add="";
$cup="";
$sta="";

if(isset($_POST['btnsave']))
{
$name=$_POST['txtname'];
$ic=$_POST["txtic"];
$phone=$_POST['txtphone'];
$add=$_POST['txtadd'];
$cup=$_POST['txtcup'];
$sta=$_POST['txtsta'];


if(strlen($name)<4)
{
	$error=" must at lease more than 4 character!!!";
}
else
{
	if($_POST['txtid']=="0")
	{
	//add new 
	$sql="insert into customer(cust_name,cust_ic,cust_phone,cust_address,cust_cup,status_cus) values
	('$name','$ic','$phone','$add','$cup','$sta')";
	$query=$db->query($sql);
	
	if($query)
{
	header('Refresh:0; view.php');

 }
}
	
	else
	{
	//update 
	$sql="update customer set cust_name='$name', cust_ic='$ic', cust_phone='$phone',cust_address='$add',
	cust_cup='$cup',status_cus='$sta' where cust_id= '{$_POST['txtid']}'";
	$query=$db->query($sql);
if($query)
{
	header('Refresh:0; view.php');

 }
}
}
}
if(isset($_GET['edited']))
{
$sql="select * from customer where cust_id='{$_GET['id']}' ";
$query=$db->query($sql);
$row=mysqli_fetch_object($query);

$id=$row->cust_id;
$name=$row->cust_name;
$ic=$row->cust_ic;
$phone=$row->cust_phone;
$add=$row->cust_address;
$cup=$row->cust_cup;
$sta=$row->status_cus

}

//delete exist 
if(isset($_GET['deleted']))
{
$sql="delete from customer where cust_id='{$_GET['id']}' ";
$query=$db->query($sql);
if($query)
{
	{header('Refresh:0; view.php');}
	
}
}

?>
<head>
<body full background = "https://images.unsplash.com/photo-1491183672482-d0af0e44929d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e041b3a3488b7dd2d028c7350c7c6ee1&auto=format&fit=crop&w=1950&q=80">
</body>

<title>Insert</title>
<style>
.insert{
width:360px;
margin:50px auto;
font:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
border-radius:10px;
border:2px solid #ccc;
padding :10px 40px 25px;
margin-top:70px;
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

input[type=text]{
width:100%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
}

</style>
<style>	
	
a[class=new]{
width:100%;
background-color:#123;
color:#fff;
border:2px solid#06F;
padding:5px;
font-size:18px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;

}	

</style>
	
</head>

<body>
<p align="left"><a href="http://localhost/bekam/view2.php" class="new" >BACK</a></p>
</body>
<div class="insert">
<h1 align="center">Insert</h1>
<form action="" method="post" style="text-align:center;">
<center><table>
<tr>
<td>Customer Name</td>
<td><input type="text" name="txtname" value="<?php echo $name; ?>">
<input type="hidden" name="txtid" value="<?php echo $id; ?>"> </td>
</tr>

<tr>
<td>IC No.</td>
<td><input  type="text" name="txtic" value="<?php echo $ic; ?>"></td>
</tr>

<tr>
<td>Phone No.</td>
<td><input type="text" name="txtphone" value="<?php echo $phone; ?>"></td>
</tr>



<tr>
<td>Address</td>
<td><input type="text" name="txtadd" value="<?php echo $add; ?>"></td>
</tr>

<tr>
<td>Category</td>
<td><input type="text" name="txtcup" value="<?php echo $cup; ?>"></td>
</tr>

<tr>
<td>Disease</td>
<td><input type="text" name="txtsta" value="<?php echo $sta; ?>"></td>
</tr>


<td><center><input type="submit" value="Save" name="btnsave"></center></td>

</form>
</table></center>