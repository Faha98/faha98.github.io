<?php 
	try {
		if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
			require_once "cfg/core.php";
			$db = new Connection();
			$pdo_conn = $db->openConnection();
			$sql = "INSERT INTO respond (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
			$pdo_statement = $pdo_conn->prepare( $sql );
			$result = $pdo_statement->execute( array( ":name"=>htmlspecialchars($_POST["name"]), ":email"=>htmlspecialchars($_POST["email"]), ":phone"=>htmlspecialchars($_POST["phone"]), ":message"=>htmlspecialchars($_POST["message"])));
		} else{
			header('Location: http://zealotalb.uz/#sec-4-r');
		}
	}	
	catch (PDOException $e) {
		echo "There is some problem in connection: " . $e->getMessage();
	}
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="css/main.css">
 </head>
 <body style="text-align: center; font-family: 'Montserrat', sans-serif; font-size: 18px; color: #fff; background: #2c3e50">
 <img src="img/Logo.svg" alt="Zealot" width="400" height="200" align="center" style="margin-top: 100px;">
 	<p style="margin-top: 100px; font-weight: 700;"><span style="font-weight: 700;font-size: 24px; font-style: italic;"><?php echo $_POST["name"] ?></span>, спасибо за ваше сообщение. Я отвечу на него как можно скорее.</p>
 	<br>
 	<p>Вы будете перенаправлены на главную страницу через <span id="time">10</span> сек.</p>
 	<script>
 		function startTimer(duration, display) {
 		    var timer = duration, seconds;
 		    setInterval(function () {
 		        seconds = parseInt(timer % 60, 10);
 		        display.textContent = seconds;

 		        if (--timer < 0) {
 		            timer = duration;
 		        }
 		    }, 1000);
 		}

	    display = document.querySelector('#time');
	    startTimer(9, display);
 		setTimeout(function() {
 			window.location.replace("http://zealotlab.uz");
 		}, 10000);
 	</script>
 </body>
 </html>