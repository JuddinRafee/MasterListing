<?php
include "db1.php";
?>
<body>
	<br>    </br>

	
	<br><font size="20"><strong><center>STAFF LIST </center></br>
	
</body>
<div class="topnav">
    <a href="http://localhost/bekam/welcome.php" class="topnav" >BACK</a>

	<a href="http://localhost/bekam/login.php" class="topnav" >Logout</a>
</div>
<center>
<style>	
a[class=new2]{
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
a[class=neww]{
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
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
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
}
td:last-child{background-color: #F00;color;#FFF;
font-weight: bold;text-decoration: underline}
</style>
<body full background = "http://backgroundcheckall.com/wp-content/uploads/2017/12/background-images-for-websites-professional-white-12.jpg">
</body>
	
	
<center><table cellpadding="10" cellspacing="0" border="5">
<tr>
<th>NO</th>
<th>Fullname</th>
<th>Username</th>
<th>Password</th>
<th>Delete</th>


</tr>

<?php
$sql="select * from staff";
$query= $db1->query($sql);
if(mysqli_num_rows($query)>0)
{
$i=1;
while($row=mysqli_fetch_object($query))
{
?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row->fullname; ?></td>
<td><?php echo $row->user; ?></td>
<td><?php echo $row->pass; ?></td>

<td> <button onClick ="deleteme(<?php echo $row->id
; ?>)" value="Delete"name="Delete"id="new">Delete</td>

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
function deleteme(delid)
{
	if(confirm("Do you want to Delete?")){
		window.location.href='delete2.php?del_id=' +delid+'';
		return true;
	}
}
</script>
