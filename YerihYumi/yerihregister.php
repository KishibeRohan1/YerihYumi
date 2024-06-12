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

$sql="select * from yerihregister where username='$username'";
$result=mysqli_query($connection, $sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "<center><h2>Username already exist</h2></center><br><center><a class='back' href='registration.html'>back</a></center>";
    }else{
        $sql= "insert into yerihregister( firstname, surname, email, username, password) values ('$firstname','$surname','$email','$username','$password')";
        $result=mysqli_query($connection, $sql);
        if($result){
            echo "<center><h2>Account Successfully Registered</h2></center><br><center><a class='back' href='admin.html'>Go back to Admin Page</a></center>";
        }else{
            die(mysqli_error($connection));
        }
    }
}
?>

<br>
