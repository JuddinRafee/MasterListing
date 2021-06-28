<?php
include "db.php";
$total='0.0';

?>
<body>
	<br>    </br>
	<a href="http://localhost/bekam/login.php" class="neww2" >Logout</a>
	<a <a href="http://localhost/bekam/welcome.php" class="new" >BACK</a>
</body>

<center>
	

<body>

	<br>    </br>
	

	<br><font size="20"><strong><center>MASTER LISTING </center></br>
	

<style>	
a[class=new2]
{


color:#fff;
font-size:50px;
cursor:pointer;
float:right;
position: absolute;
top: 90px;
left: 780px;
background-color:rgba(0, 0, 0, 0.8);

}	

a[class=neww2]{
width:59px;
background-color:#123;
color:#fff;
border:2px solid#06F;
padding:5px;
font-size:18px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;
float:right;

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
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: red; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
}

#myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
</style>
	
	
	
<body full background = "http://backgroundcheckall.com/wp-content/uploads/2017/12/background-images-for-websites-professional-white-12.jpg">
</body>

	
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
$sql="select * from customer";
$query= $db->query($sql);
if(mysqli_num_rows($query)>0)
{
$i=1;
while($row=mysqli_fetch_object($query))
{
?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row->cust_name; ?></td>
<td><?php echo $row->cust_ic; ?></td>
<td><?php echo $row->cust_phone; ?></td>
<td><?php echo $row->cust_address; ?></td>
<td><?php echo $row->cust_cup; ?></td>
<td><?php echo $row->status_cus; ?></td>


</tr>
<?php
}
}
?>

</table>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
