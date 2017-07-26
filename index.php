<!DOCTYPE html> 
<html>
	<head>
		<title>Chat System in PHP</title>
		<!--Include Custom CSS-->
		<link rel="stylesheet" href="css/style.css" media="all"/>
		<!--Bootstrap CSS file-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!--Include Jquery File-->
		<script src="js/jquery.js"></script>
		<!--Include Bootstrap JS File-->
		<script src="js/bootstrap.js"></script>
	<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','includes/chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
	</head>
	
<body onload="ajax();">


	<div id="container">
		<div class="row">
			<div class="col-sm-2 col-md-6">	
				<h1 class="alert alert-success">Live Chat</h1>
				<h1 class="alert alert-success">
					<form method="post" action="index.php">
			<div class="form-group">
				<input class="form-control" placeholder="Enter your Name" name="name" type="text">	
			</div>	
			<div class="form-group">
				<textarea class="form-control" placeholder="Your Message" name="msg"></textarea>	
			</div>	
			<div class="form-group">
				<input class="btn btn-success btn-block" name="send"  type="submit" value="Send">	
			</div>	
		
			</form>
		</div></h1>
		
			<div class="col-sm-2 col-md-6">	
				<div id="chat"></div></div>
				</div>
				</div>
			<?php 
			include 'includes/db.php';
			?>
			<?php 
			if(isset($_POST['send'])){ 
			
			$name = $_POST['name'];
			$messsage = $_POST['msg'];
			
			$query = "INSERT INTO chat (name,msg) values ('$name','$message')";
			
			$run = $con->query($query);
			}
			?>	
	</div>
</body>
</html>