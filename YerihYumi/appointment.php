<!DOCTYPE HTML>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<head>
<title>Appointment Form</title>
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

label.logo a{
	color: white;
}

nav {
	background-color: #9ADE7B;
	color: white;
	padding: 10px 20px;
	height: 80px;
	width: 100%;
    }

nav ul{
	float: right;
	margin-right: 20px;
}

nav ul li{
	display: inline-block;
	line-height: 60px;
	margin: 0 10px;
	padding: 0 20px;
	border-radius: 10px;
}

nav ul li a{
	color: white;
	font-size: 15px;
	text-transform: uppercase;
	font-weight: bold;
}

nav ul li:hover{
	background: #609966;
	transition: .5s;
}

.flex-container{
	font-family: Tahoma, sans-serif;
	display: flex;
	align-items: right;
	justify-content: space-around;
	flex-wrap: nowrap;
}


.left fieldset{
	padding-left: 20px;
}

.flex-container > div{
  	width: 100%;
	margin-left: 20px;
	margin-bottom: 5px;
  	text-align: left;
  	line-height: 40px;
}

label:not(.logo){
	width: 140px;
	display: inline-block;
	font-family: Tahoma, sans-serif;
	font-weight: bold;
}

#comments{
	resize: none;
	margin-bottom: -50px;
}

.left input[type="submit"]{
	height: 20px;
	width: 50%;
	background-color: #609966;
	color: white;
	font-size: 15px;
	font-weight: bold;
	text-transform: uppercase;
	border: none;
	border-radius: 5px;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left: -20px;
}

.left input[type="submit"]:hover{
	opacity: 0.8;
}



.design{
	margin-right: 20px;
}

</style>
</head>
<header>
	<nav>
		<label class="logo">Yerih Yumi Laundry Shop</label>
		<ul>
			<li><a href="user.html" class="active">Home</a></li>
			<li><a onClick="document.location='yerihyumi.html'">Logout</a></li> 
		</ul>
	</nav>
</header>
<body>
	<div class="services">
		<div class="flex-container">
			<div class="left">
				<form id="myForm" action="appointmentform.php" method="post">
					<fieldset>
					<legend>APPOINTMENT</legend>
					<label>Full Name:</label>
					<input type="text" id="name" name="name" required><br>
					<label>Contact Number:</label>
					<input type="text" id="contact" name="contact" required><br>
					<label>Service Type:</label>
					<select id="servicetype" name="servicetype">
						<option name="wash" value="Wash">Wash</option>
						<option name="dry" value="Wash&Dry">Wash & Dry</option>
						<option name="fold" value="Wash,Dry,&Fold">Wash, Dry, & Fold</option>
					  </select>
					<div><label for="date">Pick-Up Date: </label>
						<input type="date" name="pickupdate" id="pickupdate">
						<select id="picktimeslot" name="picktimeslot">
   							<option name="pick1" value="7:00am-8:00am">7:00 am - 8:00 am</option>
    						<option name="pick2" value="8:00am-9:00am">8:00 am - 9:00 am</option>
    						<option name="pick3" value="9:00am-10:00am">9:00 am - 10:00 am</option>
    						<option name="pick4" value="10:00am-11:00am">10:00 am - 11:00 am</option>
    						<option name="pick5" value="11:00am-12:00am">11:00 am - 12:00 pm</option>
								</select>
									</div>
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
							$('#pickupdate').attr('min', maxDate);
						});
						</script>
				
					<div><label for="date">Delivery Date: </label>
						<input type="date" name="deliverydate" id="deliverydate">
						<select name="deltimeslot">
    						<option name="del1" value="2:00pm-3:00pm">2:00 pm - 3:00 pm</option>
   							<option name="del2" value="3:00pm-4:00pm">3:00 pm - 4:00 pm</option>
    						<option name="del3" value="4:00pm-5:00pm">4:00 pm - 5:00 pm</option>
    						<option name="del4" value="5:00pm-6:00pm">5:00 pm - 6:00 pm</option>
    						<option name="del5" value="6:00pm-7:00pm">6:00 pm - 7:00 pm</option>
								</select>
									</div>
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
							$('#deliverydate').attr('min', maxDate);
						});
						</script>
						
						<label>Address:</label>
						<input type="text" id="address" name="address" length="60" required><br>
						<label>Comments:</label><br>
						<textarea id="comments" name="comments" rows="5" cols="50"></textarea>
						<p for="confirmationCheckbox" style="line-height: 1.5; margin-top: 20px;"><br>
						<input type="checkbox" id="confirmationCheckbox" required>
							<b>Disclaimer:</b>  Submitted appointments are final and cannot be canceled.
								<br>&emsp; Ensure that the details provided are accurate, as the appointment is
								<br>&emsp; considered final upon submission.Thank you for your understanding.
						</p>
						  <script>
							function confirmSubmit() {
							  return confirm("Are you sure you want to submit the form?");
							}
						  
							document.getElementById("confirmationCheckbox").addEventListener("change", function() {
							  document.getElementById("submitButton").disabled = !this.checked;
							});
						  </script>

						<center><input type="submit" id="submit" name="submit" value="submit" ></center>

					</fieldset>
				</form>
			</div>
			

			<div class="design"><center><img src="deliverytime.png" style="height: 500px;"></center></div>
			<p style="position: absolute;">
		</div>
	</div>
</body>
<footer>
</footer>
</HTML>