<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yerihsales";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname= $_POST['fullname'];
	$weight= $_POST['weight'];
	$servicetype= $_POST['servicetype'];
	$date= $_POST['date'];
	$sales= $_POST['sales'];

    $sql = "insert into sales (fullname, weight, servicetype, date, sales) values ('$fullname', '$weight', '$servicetype', '$date', '$sales')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "" . $sql . "" . $conn->error;
    }
}

$sql = "SELECT * FROM sales";
$result = $conn->query($sql);
?>


<!DOCTYPE HTML>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<head>
<title>Sales</title>
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

table.textbox{
	border-collapse: collapse;
	color: #609966;
	font-family: Tahoma, sans-serif;
	font-size: 20px;
	text-align: left;
}

table.textbox th{
	background-color: #609966;
	color: white;
}

table.textbox tr:nth-child(even) {
	background-color: #f2f2f2;
}

table.textbox td{
	padding-top: 15px;
	padding-bottom: 25px;
	padding-left: 10px;
	padding-right: 10px;
	font-size: 17px;
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

#enter{
	color: white;
	background-color: #609966;
	width: 80px;
	padding: 8px;
	border-radius: 3px;
	font-family: Tahoma, sans-serif;
	border: none;
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
		<li><label class="app"><h1>SALES</h1></label></li>
	</ul>
	</div>
<form action="sales.php" method="post">
	<table style="width:100%" class="textbox">
		<tr>
			<th>Name</th>
			<th>Weight/kg</th>
			<th>Service Type</th>
			<th>Date</th>
			<th>Sales Total</th>
			<th>Operation</th>
		</tr>
		</tr>
			<td><input type="text" id="fullanme" name="fullname"></td>
			<td><input type="text" id="weight" name="weight"></td>
			<td><select id="servicetype" name="servicetype">
						<option name="wash" value="Wash">Wash</option>
						<option name="dry" value="Wash&Dry">Wash & Dry</option>
						<option name="fold" value="Wash,Dry,&Fold">Wash, Dry, & Fold</option>
					  </select></td>
			<td><input type="date" name="date" id="date"></div>
					<script type="text/javascript">
						$(function(){
							var dtToday = new Date();
						 
							var month = dtToday.getMonth() + 1;
							var day = dtToday.getDate();
							var year = dtToday.getFullYear();
							if(month < 10)
								month = '0' + month.toString();
							if(day < 10)
							 day = '0' + day.toString();
							var maxDate = year + '-' + month + '-' + day;
							$('#date').attr('min', maxDate);
						});
						</script></td>
			<td><input type="text" id="sales" name="sales"></td>
			<td><input type="submit" id="enter" name="enter" value="enter" class="enter"></td>
		</tr>
	</table>
	<table style="width:100%">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Weight/kg</th>
			<th>Service Type</th>
			<th>Date</th>
			<th>Sales</th>
			<th><a href="salesdeleteform.html" style="color: red;">DELETE</a></th>
		</tr>

<?php
		$connection = mysqli_connect("localhost", "root", "", "yerihsales");
		if ($connection-> connect_error) {
			die("Connection failed:". $connection-> connect_error);
		}

		$sql= "select salesid, fullname, weight, servicetype, date, sales from sales";
		$result= $connection-> query($sql);

		if ($result-> num_rows > 0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>". $row["salesid"]. "</td><td>". $row["fullname"]. "</td><td>". $row["weight"]. "</td><td>". $row["servicetype"]. "</td><td>". $row["date"]. "</td><td>". $row["sales"]. "</td><td>". " ". "</td></tr>"; 
			}
		}
		else{
			echo "";
		}
		
	$connection-> close();
	?> 
	</table>
</form>

</body>
</html>

<!--
	<a href='salesdelete.php' name='submitid' onclick='return confirm('are you sure you want to delete this record?');'>delete</a>
-->