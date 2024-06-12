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

nav {
	background-color: #9ADE7B;
	color: white;
	padding: 10px 20px;
	height: 80px;
	width: 100%;
    }

label.logo{
	color: white;
	font-size: 30px;
	line-height: 60px;
	font-weight: bold;
	margin: 0 20px;
	font-family: Tahoma, sans-serif;
}

h2{
	font-weight: bold;
	font-size: 15px;
	color: black;
	font-family: Tahoma, sans-serif;
	margin: 30px 20px;
}

.back a{
	font-family: Tahoma, sans-serif;
	color: white;
	background-color: #609966;
	margin: 10px 20px;
	padding: 10px;
	border-radius: 3px;
	text-decoration: none;
	font-weight: bold;
}


</style>
</head>


<?php
	$localhost="localhost";
    $username="root";
    $password="";
	$database="yerihaccounts";
	
	$connection=mysqli_connect($localhost, $username, $password, $database) or die ("Sql Error!!!");

    $username= $_POST['username'];
	$password= $_POST['password'];
    
    $sql= "SELECT * FROM yerihregister WHERE username='$username'";
    $result=mysqli_query($connection, $sql);

    if (empty($username)|| (empty($password))){
		echo "field required.";
        }else{
	        $stmt= $connection->prepare("SELECT * FROM yerihregister WHERE username='$username'");
	         $stmt->execute();
	        $stmt_result = $stmt->get_result();
	 
	     if($stmt_result->num_rows>0){
			        $data = $stmt_result->fetch_assoc();
			        if($data['password'] === $password){
				        include_once 'user.html';
			        }else {
						echo "<nav><label class='logo'>Yerih Yumi Laundry Shop</label></nav>";
				        echo "<center><h2>Invalid username or password</h2></center>";
						echo "<center><label class='back'><a href='yerihyumi.html'>back</a></label></center>";
			        }
	         }else{
				echo "<nav><label class='logo'>Yerih Yumi Laundry Shop</label></nav>";
	        	echo "<center><h2>invalid email or password</h2></center>";
				echo "<center><label class='back'><a href='yerihyumi.html'>back</a></label></center>";
	         }
    }

	

?>
