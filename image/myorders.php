<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	//session_start();
	try{
		//echo 'enter';
		$conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'after connection';

		//if(isset($_SESSION["email"]))
		//{
			
			$st=$conn->prepare("select * from login where login_id=:mail");

			$m="faizan@4053";
			//$st->bindParam(":log",$_SESSION["email"]);
			//$st->bindParam(":log",$email)
			$st->bindParam(":mail",$m);
			$st->execute();
			while($ft=$st->fetch()){
				//print_r($ft);
				echo $ft['login_id'];
				echo '<h1>';
				echo $ft['login_id'];
				echo '</h1>';
				?> 
				<img src="<?php echo $ft['b_path']; ?>" height="100" width="100">

				<? php 
			}
		//}

	}
	catch(PDOException $e){
		die("connection failed".$e->getmessage());
	}
?>
</body>
</html>
