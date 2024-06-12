<!DOCTYPE HTML>
<head>
		<title>Yerih Yumi Laundry</title>
<style>
*{
padding: 0;
margin: 0;
text-decoration: none;
list-style: none;
box-sizing: border-box;
}

header{
font-family: Tahoma, sans-serif;
}


label.logo{
color: white;			
font-size: 30px;			
line-height: 60px;						
font-weight: bold;			
margin: 0 20px;
}



nav {
background-color: #9ADE7B;
color: white;
padding: 10px 20px;
height: 80px;
width: 100%;
}

h2{
	font-weight: bold;
	font-size: 20px;
	color: #609966;
	font-family: Tahoma, sans-serif;
	margin-top: 30px;
	margin-bottom: 0;
}

p{
	font-weight: bold;
	font-size: 15px;
	color: black;
	font-family: Tahoma, sans-serif;
	margin-top: 10px;
	margin-bottom: 25px;
}

.back {
	font-family: Tahoma, sans-serif;
	color: white;
	background-color: #609966;
	margin: auto;
	padding: 10px;
	border-radius: 3px;
}

</style>
</head>
<header>
	<nav>
		<label class="logo">Yerih Yumi Laundry Shop</label>
	</nav>
</header>
<?php
	$localhost="localhost";
    $username="root";
    $password="";
	$database="yerihappointment";
	
	$connection=mysqli_connect($localhost, $username, $password, $database) or die ("Sql Error!!!");

	$name= $_POST['name'];
	$contact= $_POST['contact'];
    $servicetype= $_POST['servicetype'];
    $pickupdate= $_POST['pickupdate'];
	$picktimeslot= $_POST['picktimeslot'];
    $deliverydate= $_POST['deliverydate'];
	$deltimeslot= $_POST['deltimeslot'];
    $address= $_POST['address'];
    $comments= $_POST['comments'];

	

$sql="insert into appointments(name, contact, servicetype, pickupdate, picktimeslot, deliverydate, deltimeslot, address, comments) values ('$name', '$contact', '$servicetype', '$pickupdate', '$picktimeslot', '$deliverydate', '$deltimeslot', '$address', '$comments')";
$result=mysqli_query($connection, $sql);

if ($result){
    echo "<center><h2>SUCCESSFULLY SUBMITTED A SCHEDULE FOR PICK-UP AND DELIVERY!</h2><p>Expect a notification 1 hour prior your pick-up and delivery schedule.</p></center><br><center><a class='back' href='user.html'>Home</a></center>";
}
else{
    die("Error");
}

?>



</html>