<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1000000000" >
	<title>USSD PHONE SIMULATOR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="prism.css">
	<style type="text/css">
		pre[class*="language-"].line-numbers {
		    position: relative;
		    padding-left: 0px !important;
		    counter-reset: linenumber;
		}
		.phone{

		}
		.tempCont,.codes{
			position: absolute;top: 70px;left: 420px;height: 550px;width: 450px;background: white;border-radius: 20px;overflow: hidden;
			-webkit-box-shadow: 13px 21px 22px 19px rgba(0,0,0,0.04);
			-moz-box-shadow: 13px 21px 22px 19px rgba(0,0,0,0.09);
			box-shadow: 13px 21px 22px 19px rgba(0,0,0,0.09);
		}
		.codes{
			border-radius: 0 !important;
			left: 420px !important;
			right: 10px !important; 
			width: 450px !important;
			padding-left: 0px !important;
			display: none;
		}
		pre{
			padding-left: -20px !important;
		}
		code{
			padding-left: -20px !important;
		}
		.tempCont{
			display: block;
		}
		.settings{
			max-height: 400px;
			width: 350px;
			margin-left: 50px;
			display: ;
			border:0px solid green;
			background-color: white;
			position: absolute;
			top: 140px;
			-webkit-box-shadow: 13px 21px 22px 19px rgba(0,0,0,0.04);
			-moz-box-shadow: 13px 21px 22px 19px rgba(0,0,0,0.04);
			box-shadow: 13px 21px 22px 19px rgba(0,0,0,0.04);
			padding: 30px;
			border-radius: 10px;
			border-top: 5px solid darkorchid;
		}
		.settings h1{
			font-size: 24px;
		}
		.form .row{
			margin-top: 20px;
		}
		.form .row input{
			width: 95%;
			margin-bottom: 10px;
			height: 25px;
			border: none;
			border-bottom-color: currentcolor;
			border-bottom-style: none;
			border-bottom-width: medium;
			outline: none;
			border-bottom: 1px solid green;
			padding-left: 0px;
			color: #4169e1;
			margin-left: 5%;
		}
		.form .row input:focus{
			border-bottom: 1px solid darkblue;
		}
		.form .row4 button{
			height: 30px;
			width: 120px;
			border:none;
			outline: none;
			background-color: transparent;
			border: 1px solid #4169e1;
			border-radius: 20px;
			cursor: pointer;
			color: #4169e1;
		}
		.alert, .alertMsg{
			height: 40px;
			border:1px solid green;
			background:green;
			text-align: left;
			margin-top: 10px;
			margin-bottom: 10px;
			display: none;

		}
		.alertMsg{
			border:1px solid red;
			background: rgb(200,20,20,0.8);


		}
		.alertMsg p,.alert p{
			color: white !important;
		}
		.alert p,.alertMsg p{
			font-size: 16px;
			padding-top: 10px;
			padding-left: 20px;
		}
		.phone .volume{
			height: 100px;
			width: 7px;
			background: white;
			border:1px solid transparent;
			position: absolute;
			top: 100px;
			left: -7px;
			border-radius: 2px;
		}
		.phone .power{
			height: 50px;
			width: 7px;
			background: white;
			border:1px solid transparent;
			position: absolute;
			top: 120px;
			right: -7px;
			border-radius: 2px;
		}
		.endSession{
			position: absolute;
			bottom: 10px;
			right: 0;
			border:none;
			background: transparent;
			font-weight: bold;
			margin-right: 10px;
			cursor: pointer;
			color: #4169e1 !important;
		}
		.copy{
			border:none;
			background: transparent;
			font-weight: bold;
			margin-right: 10px;
			cursor: pointer;
			color: #4169e1 !important;
			margin-top: -10px;
		}
		.nav{
			height: 40px;width: 100%;position: fixed;top: 0;left: 0;background-color: white;box-shadow:-1px 6px 9px -4px rgba(0,0,0,0.06)
		}
		.nav h1{
			padding-top: 10px;padding-left: 30px;
		}
		ul{
			position: absolute;
			top: 10px;
			right: 30px;

		}
		ul li{
			display: inline;
			margin-right: 10px;
		}
		a{
			text-decoration: none;
		}
		.colorCont{
			position: absolute;top: 0;left: 0;width: 100%;height: 250px;background:  cornflowerblue
		}
		.colorCont h1{
			color: white;font-size: 20px;font-weight: 10;padding-top: 30px;padding-left: 60px;
		}
		.colorCont p{
			font-size: 16px;color: white;padding-left: 60px;margin-top: 20px;
		}
		.codes .header{
			position: absolute;top: 0px;left: 0;width: 100%;height: 10%;border-bottom: 1px solid white;background: #6495ed;
		}
		.codes .header h1{
			color: white;padding-top: 20px;padding-left: 10px;
		}
		.codes .container{
			height: 90%;position: absolute;bottom: 0;left: 0;width: 100%;overflow-y: scroll;padding-top: -5px;background-color: #272822;
		}
		.codes .header button{
			float: right;margin-left: 10px;
			color: green !important;
		}
	</style>
</head>
<body style="padding-top: 20px;">
	<div class="nav" style="">
		<h1 style=""><a href="#">USSD Chamble</a></h1>
		<ul >
			<li><a href="#" class="goSettings">Settings</a></li>
			<li><a href="#" class="goCodes">PHPServerCodes</a></li>
			<li><a href="#">About me</a></li>
			<li><a href="#">Contact me</a></li>
			<li><a href="#">Ask Help?</a></li>
		</ul>
	</div>
	<div style="" class="phone">
		<div class="volume"></div>
		<div class="power"></div>
		<div class="top">
			<center>
				<div class="mic"></div>
			</center>
			<label style="color: white">YPHONE</label>
		</div>
		<div class="screen">
			<div class="loading">
				<div class="loader"></div>
				<label style="float: right;padding-top: 10px;padding-right: 10px;">USSD code running</label>
			</div>
			<div class="bar"></div>
			<div class="iconsPage" style="">
				<center>
					<div class="row">
						<div class="time">
							<h1 class="clock">--:--:--</h1>

						</div>
						<p style="color: white;margin-top: -40px;margin-bottom: 40px;font-size: 13px;letter-spacing: 1px;">Made by YvesNiyobuhungiro</p>
					</div>
					<div class="icons" style="background: url('menu.png');background-size: 100% 100%;"></div>
					<div class="icons" onclick="goUssd()" style="background: url('playstore-icon.png');background-size: 100% 100%;"></div>
					<div class="icons" style="background: url('sms.png');background-size: 100% 100%;"></div>
				</center>
			</div>
			<div class="ussd">
				<center>
					<div class="result">
						<div class="textOutput">
							
						</div>
						<div class="resultInputs">
							<input type="text" name="" class="resultInput" autofocus="">
							<button class="resend">SEND</button>
							<button class="cancel">CANCEL</button>
						</div>
					</div>
				</center>
				
				<div class="keyboard">
					<center>
						<div class="row1" style="height: 50px;">
							<input autofocus="" value="*454#"   type="text" name="" class="input">
							<button class="delete">X</button>
						</div>

						<div class="row">
							<button>1</button>
							<button>2</button>
							<button>3</button>
						</div>
						<div class="row">
							<button>4</button>
							<button>5</button>
							<button>6</button>
						</div>
						<div class="row">
							<button>7</button>
							<button>8</button>
							<button>9</button>
						</div>
						<div class="row">
							<button>*</button>
							<button>0 <sup>+</sup></button>
							<button>#</button>
						</div>
						<div class="row">
							<button class="send">.</button>
						</div>
					</center>
				</div>
			</div>
		</div>
		<div class="btm">
			<button style="transform: rotate(0deg);">|==|</button>
			<button class="circleBtn" onclick="goHome()">Home</button>
			<button><=</button>
		</div>
	</div>
	<div style="" class="tempCont">
		<div class="colorCont">
			<h1>USSD Tool</h1>
			<p>
				This project was made for developers by develper. <br />
				Please feel free to ask me anything :)
			</p>
		</div>
		<div class="settings">
			<h1>Settings</h1>
			<div class="form">
				<div class="alert">
					<p>Data has been successfuly stored.</p>
				</div>
				<div class="alertMsg">
					<p>Data has been successfuly stored.</p>
				</div>
				<div class="row">
					<label>Phone Number:</label>
					<input type="text" name="" placeholder="Phone" autofocus="" class="phoneNumber">
				</div>
				<div class="row">
					<label>Call Back URL:</label>
					<input type="text" name="" placeholder="URL" class="url">
				</div>
				<div class="row">
					<label>Service Code:</label>
					<input type="text" name="" placeholder="Service Code" class="code">
				</div>
				<div class="row4">
					<button class="save">Save</button>
				</div>
			</div>
		</div>
	</div>
	<div class="codes" >
		<div class="header">
			<h1>Sample PHP code server for ussd</h1>
			<button class="copy" >Copy</button>
		</div>
		<div class="container">
			<pre class="" >
				<code class="language-php">
$number=$_REQUEST['phone'];
$sessionId=$_REQUEST['sessionId'];
$text=$_REQUEST['text'];
$code=$_REQUEST['code'];
$mode="menu";
$level = 1;
$ussd_array = explode ("*",$text);
if(count($ussd_array)==0){
	$level=0;
}else{
	$level=count($ussd_array);
}
$level=$level+1;
if(trim($text)=="")
	$level=1;
	switch ($ussd_array[0]) {
		case '0':
			$mode="menu";
			break;
		case '':
			$mode="menu";
			break;
		case '1':
			$mode="create";
			break;
		case '2':
			$mode="balance";
			break;
		case '3':
			$mode="sendMoney";
			break;
		
		default:
			# code...
			break;
	}

	if($level==1){
		displayMenu();
	}else{
		if($mode=="menu"){
			switch ($text) {
				case '0':
					displayMenu();
					break;
				case '1':
					createAccount();
					break;
				case '2':
					checkBalance();
					break;
				case '3':
					checkNumber();
					break;
				case '4':
					sendMoney();
					break;
				
				default:
					displayError();
					break;
			}
		}else if($mode=="create"){
			switch ($text) {
				case '1':
					createAccount();
					break;
				case '1*1':
					echo "END You choose \n Male";
					break;
				case '1*2':
					echo "END You choose \n Female";
					break;
				case '1*3':
					echo "END You choose \n Not Now";
					break;
				
				default:
					displayError();
					break;
			}

		}else if($mode=="balance"){
			checkBalance();

		}else if($mode=="sendMoney"){
			switch ($text) {
				case '3':
					sendMoney();
					break;
				case '3*1':
					echo "END You choose \n MTN";
					break;
				case '3*2':
					echo "END You choose \n AIRTEL";
					break;
				case '3*3':
					echo "END You choose \n TIGO";
					break;
				
				default:
					displayError();
					break;
			}

		}
}
function displayMenu(){
	$text="CON USSD Testing \n";
	$text.="1. Create Account \n";
	$text.="2. Check Balance \n";
	$text.="3. Check My Number \n";
	$text.="4. Send Money \n";
	$text.="5. Buy Books \n";
	$text.="44. Next \n";
	echo $text;
}
function createAccount(){
	$text="CON Creating Account\n";
	$text.="1. Male \n";
	$text.="2. Woman \n";
	$text.="3. Not Now \n";
	echo $text;
}
function checkBalance(){
	$text="END Account Balance\n";
	$text.="Your account Balance is 43,050Rwf \n";
	echo $text;
}
function displayError(){
	$text="END Error\n";
	$text.="Uknown USSD command \n";
	echo $text;
}
function checkNumber(){
	
	$text="END Ckeck Number\n";
	$number=$_REQUEST['phone'];
	$text.="Your number is ".$number." \n";
	echo $text;
}
function sendMoney(){
	$text="CON Send Money\n";
	$text.="1. MTN \n";
	$text.="2. TIGO \n";
	$text.="3. AIRTEL \n";
	echo $text;
}
			  	</code>
			</pre>
				
		</div>	
	</div>
	<script type="text/javascript" src="prism.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<script type="text/javascript">
		
		//settings js
		check();
		selector(".save").addEventListener("click",save)
		function save(){
			var phone=selector(".phoneNumber").value;
			var url=selector(".url").value;
			var code=selector(".code").value;
			var ussdData={
				phone:phone,
				url:url,
				code:code,
				sessionId:0
			}
			localStorage.setItem("ussdData",JSON.stringify(ussdData))
			selector(".alert").style.display="block"
			setTimeout(()=>{
				selector(".alert").style.display="none"
			},5000)
		}
		function check(){
			if(localStorage.getItem("ussdData")!==undefined && localStorage.getItem("ussdData")!==null){
				var ussdData=JSON.parse(localStorage.getItem("ussdData"))
				selector(".phoneNumber").value=(ussdData.phone);
				selector(".url").value=(ussdData.url);
				selector(".code").value=(ussdData.code);

			}
		}
		selector(".copy").addEventListener("click",()=>{
			copyToClipboard(codes);
		})

		const copyToClipboard = (str) => {
		  const el = document.createElement('textarea');
		  el.value = str;
		  document.body.appendChild(el);
		  el.select();
		  document.execCommand('copy');
		  document.body.removeChild(el);
		};

		selector(".goSettings").addEventListener("click",()=>{
			selector(".codes").style.display="none";

			selector(".tempCont").style.display="block";
		})
		selector(".goCodes").addEventListener("click",()=>{
			selector(".codes").style.display="block";

			selector(".tempCont").style.display="none";
		})

	</script>
</body>
</html>