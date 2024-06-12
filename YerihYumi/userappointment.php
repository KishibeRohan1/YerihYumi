<!DOCTYPE HTML>
<head>
<title>Appointments</title>
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

label.done a{
	color: #609966;
	font-family: Tahoma, sans-serif;
	text-decoration: underline;

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

table{
	border-collapse: collapse;
	color: #609966;
	font-family: Tahoma, sans-serif;
	font-size: 18px;
	text-align: left;
}

th{
	background-color: #609966;
	color: white;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}

td{
	padding: 8px;
	font-size: 15px;
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
		<li><label class="app"><h1>APPOINTMENTS</h1></label></li>
	</ul>
	</div>
	<table style="width:100%">
		<tr>
			<th>Name</th>
			<th>Contact Number</th>
			<th>Service Type</th>
			<th>Pick-up Date</th>
			<th>Pick-up Time</th>
			<th>Address</th>
			<th>Comments</th>
			<th> </th>
		</tr>
		<?php
			$connection = mysqli_connect("localhost", "root", "", "yerihappointment");
			if ($connection-> connect_error) {
				die("Connection failed:". $connection-> connect_error);
			}

			$sql= "select userid, name, contact, servicetype, pickupdate, picktimeslot, address, comments from appointments order by pickupdate ASC, picktimeslot DESC";
			$result= $connection-> query($sql);

			if ($result-> num_rows > 0){
				while ($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["name"]. "</td><td>". $row["contact"]. "</td><td>". $row["servicetype"]. "</td><td>". $row["pickupdate"]. "</td><td>". $row["picktimeslot"]. "</td><td>". $row["address"]. "</td><td>". $row["comments"]. "</td><td>". " ". "</td></tr>"; 
				}
			}
			else{
				echo "";
			}
			
		$connection-> close();
		?> 
	</table>


</body>
</html>