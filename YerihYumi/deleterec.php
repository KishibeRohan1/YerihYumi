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
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "yerihaccounts";
    $connection = mysqli_connect($localhost, $username, $password, $database) or die("My Connection Error");

    $userid = $_POST['userid'];

    $sql = "DELETE FROM yerihregister WHERE userid='$userid'";
    $result = $connection->query($sql);

    if ($result) {
        echo "<center><h2>Record deleted successfully!</h2></center>";
        echo "<br><center><a class='back' href='accounts.php'>Return to page</a></center>";
    } else {
        echo "<center><h2>There was an error while deleting the record!</h2></center>";
        echo "<br><center><a class='back' href='accounts.php'>Return to page</a></center>";
    }
?>


</html>
