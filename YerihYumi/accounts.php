<!DOCTYPE HTML>
<head>
<title>Users Accounts</title>
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

.list ul{
	float: left;
	list-style: none;

}

.list ul li{
	display: inline-block;
	line-height: 50px;
	vertical-align: middle;
	margin:0 10px;
}

label.logo{
	color: white;
	font-size: 30px;
	line-height: 60px;
	font-weight: bold;
	margin: 0 20px;
	
}

label.back a{
	color: white;
	background-color: #609966;
	padding: 5px;
	border-radius: 3px;
	font-family: Tahoma, sans-serif;

}

nav {
	background-color: #9ADE7B;
	color: white;
	padding: 10px 20px;
	height: 80px;
	width: 100%;
    }

.app h1{
	font-family: Tahoma, sans-serif;
  	color: #609966;

}

section{
	margin-right: 30px;
}

section input[type="text"]{
	margin-top: 18px;
	margin-bottom: 0;
	margin-left: 0;
	margin-right: 20px;
	float: right;
}

section a{
	font-family: Tahoma, sans-serif;
	background-color: #609966;
	color: white;
	padding: 5px;
	border: 1px;
	border-radius: 3px;
	float: right;
	margin-top: 11px;
	margin-bottom: 0;
	margin-left: 0;
	margin-right: 20px;
}

table{
	border-collapse: collapse;
	color: #609966;
	font-family: Tahoma, sans-serif;
	font-size: 20px;
	text-align: left;
}

th{
	background-color: #609966;
	color: white;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}

td{
	padding: 8px;
	font-size: 17px;
}
</style>
</head>
<header>
	<nav>
		<label class="logo">Yerih Yumi Laundry Shop</label>
	</nav>
</header>
<body>
	<div class="list">
	<ul>
		<li><label class="back"><a href="admin.html">back</a></label></li>
		<li><label class="app"><h1>USERS ACCOUNTS</h1></label></li>
	</ul>
	<section>
		<a href="deleteform.html">delete</a>
		<a href="updateform.html">update</a>
	</section>
	</div>

	<table style="width:100%">
		<tr>
			<th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>E-mail</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php
			$connection = mysqli_connect("localhost", "root", "", "yerihaccounts") or die("error");

			$sql= "select userid, firstname, surname, email, username, password from yerihregister";
			$result= $connection-> query($sql);

			if ($result-> num_rows > 0){
				while ($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["userid"]. "</td><td>". $row["firstname"]. "</td><td>". $row["surname"]. "</td><td>". $row["email"]. "</td><td>". $row["username"]. "</td><td>". $row["password"]. "</td></tr>"; 
				}
			
			}
			else{
				echo "0 result";
			}
			
		$connection-> close();
		?> 
	</table>


</body>
</html>