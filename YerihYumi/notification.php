
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

input[type="submit"]{
	height: 30px;
	width: 50px;
	background-color: #609966;
	color: white;
	font-size: 15px;
	font-weight: bold;
	text-transform: uppercase;
	border: none;
	border-radius: 3px;
}

h2{
    font-family: Tahoma, sans-serif;
    margin-top: 20px;
    margin-bottom: 10px;

}
</style>
</head>
<header>
	<nav>
		<label class="logo">Yerih Yumi Laundry Shop</label>
	</nav>
</header>

<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ ."/vendor/autoload.php";


$message = $_POST['message'];
$phone_number = $_POST['phone'];

$apiURL = "ggdnm6.api.infobip.com";
$apiKey = "19a53feb41d5d203dfeb6fffc4da7d73-d8a7d430-1573-486b-97a2-01bd9ffbb7cf";

$configuration = new Configuration(host: $apiURL, apiKey: $apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $phone_number);

$theMessage = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from: "Syntax Flow"
);

$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);
$response = $api->sendSmsMessage($request);

echo "<center><h2>Message Sent Successfully</h2></center>";


?>

<center><form action="notification.html" method="get"><input type="submit" value="back"></form></center>

</html>
