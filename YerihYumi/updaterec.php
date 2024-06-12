
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
	font-size: 15px;
	color: black;
	font-family: Tahoma, sans-serif;
	margin: 30px 20px;
}

.back {
	font-family: Tahoma, sans-serif;
	color: white;
	background-color: #609966;
	margin: 30px 20px;
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
	$database="yerihaccounts";
	 $connection=mysqli_connect($localhost, $username, $password, $database) or die ("Sql Error!!!");

     $firstname= $_POST['firstname'];
     $surname= $_POST['surname'];
     $email= $_POST['email'];
     $username= $_POST['username'];
     $password= $_POST['password'];
	 $userid= $_POST['userid'];

	$query="UPDATE yerihregister set firstname='$firstname', surname='$surname', email='$email', username='$username', password='$password' where userid='$userid'";
	$result= mysqli_query($connection, $query);
	
	if($result){
        echo "<center><h2>record successfully updated!</h2></center><br><center><a class='back' href='accounts.php'>return to page</a></center>";
    }
    
    ?>

</html>