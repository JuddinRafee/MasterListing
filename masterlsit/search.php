<?php
	include 'db.php';

?>

<p><a href="http://localhost/bekam/welcome.php" class="neww" >BACK</a></p>
<p>
</p>
<center><br></br><form action="search.php" method="POST">
	<input type="text" name="search" placeholder="Search(insert name or ic number or address)">
	<button	 class="new" type="submit" name="search_submit">Search</button>
</form>

<style>
a[class=new]{
width:100%;
background-color:#123;
color:#fff;
border:2px solid#06F;
padding:5px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;

}	
a[class=neww]{
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


button[type=submit]{
width:70px;
height:40px;
background-color:#123;
color:#fff; 

}

input[type=text]{
width:55%;
height:40px;

}
</style>
<body full background = "http://pilarreadingcenter.org/wp-content/uploads/2016/04/Wood-White-Background-HD.jpg">
</body>

<div class="search_cust">
	<?php
	if(isset($_POST['search_submit'])) {
		$search = mysqli_real_escape_string($db,$_POST['search']);
		$sql = "SELECT * FROM customer WHERE cust_name LIKE	'%$search%' or cust_address LIKE'%$search%' or cust_ic LIKE	'%$search%' or cust_cup LIKE'%$search%' or status_cus LIKE'%search%'";
		$result = mysqli_query($db,$sql);
		$queryresult = mysqli_num_rows($result);

		
		if($queryresult >0) {

							?>
													<center><table cellpadding="10" cellspacing="0" border="5">
													

<tr>
<th>NO</th>
<th>Name</th>
<th>IC</th>
<th>Phone No.</th>
<th>Address</th>
<th>Category</th>
<th>Disease</th>

</tr>

<?php

		
		$i=1;
			while($row = mysqli_fetch_assoc($result)) {
							

			
				echo "<div class='cust_box'>
				<tr>
					<td> ".$i++." </td>			
					<td>".$row['cust_name']. "</td>
					<td>".$row['cust_ic']. "</td>
					<td>".$row['cust_phone']. "</td>
					<td>".$row['cust_address']. "</td>
					<td>".$row['cust_cup']. "</td>
					<td>".$row['status_cus']. "</td>
					<td>
                    </td>
					</tr>
				


				</div>";
				



				
				}
		}else {
			echo "There are no result matching your search";
		}			
	}
	?>
	</table>
	</div>