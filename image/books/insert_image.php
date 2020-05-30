<?php
    
    if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}

    try{
        $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");

            extract($_POST);

            if(isset($but2)){
                    $f=0;
                if(empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($num))
                {
                    $f=1;
                }

                $st=$conn->prepare("insert into login (login_id,password,fname,lname,number) values(:login,:pass,:fn,:ln,:nu)");
                $st->bindParam(":login",$email);
                $st->bindParam(":pass",$pass);
                $st->bindParam(":fn",$fname);
                $st->bindParam(":ln",$lname);
                $st->bindParam(":nu",$num);

                $ab=$st->execute();  
                if($ab)
                {
                    $_SERVER['email']=$email;
                    header("location:login_success.php");
                } 
            }
    }
    catch(PDOException $e){
        die("connection failed".$e->getmessage());
    }
?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Book rental portal">
		<meta name="keywords"  content="book rent,rent book,mnit book rent">
		<meta name="author" content="Mohammad Faizan,Yashvendar ,Aakash Gopal Vacchani">
		<title>Sign Up</title>
		<link rel="stylesheet" type='text/css' href="./css/style.css">
	</head>
<title>Insert Data in books Table</title>	
<body>
<form method="POST" action="Insert.php">
  <div class="container">

    <h1>Insert New Data in Books and Book Catagery</h1>
    <p>Please fill in this form to create an account.</p>

	<ul><p><label for="names"><b>Book ID</b></label></p>
    <input type="text" placeholder="Book id" name="b_id" required></ul>

    <ul><p><label for="names"><b>Book Name</b></label></p>
    <input type="text" placeholder="Book Name" name="b_nm" required></ul>

    <ul><p><label for="names"><b>Quantity of books</b></label></p>
    <input type="text" placeholder="Enter Quantity" name="b_no" required></ul>

    <ul><p><label for="names"><b>Book Author</b></label></p>
    <input type="text" placeholder="Book's author" name="b_author" required></ul>

    <ul><p><label for="email"><b>Book publisher</b></label></p>
    <input type="text" placeholder="Book publisher" name="b_publisher" required></ul>

    <ul><p><label for="psw"><b>Book Description</b></label></p>
    <input type="text" placeholder="Book Description" name="b_desc" required></ul>

    <ul><p><label for="number"><b>Book Price</b></label></p>
    <input type="text" placeholder="Book Price" name="b_price" required></ul>

    <ul><p><label for="number"><b>Book's Image Name</b></label></p>
    <input type="text" placeholder="Enter Image Name" name="b_path" required></ul>
    <p><label for="number"><b>New/Old</b></label></p>
    <input type="checkbox" name="newbook" value=1 >
    
	<ul><p style="text-align: center";><label for="number" style="text-align: center; font-size: 30px"><b>Select Catagery</b></label></p>
	
	<p><label for="number"><b>Science Fiction</b></label></p>
    <input type="checkbox" name="science_fiction" value=1>
    
    <p><label for="number"><b>Novels</b></label></p>
    <input type="checkbox" name="novel" value=1 >
    
    <p><label for="number"><b>Kids</b></label></p>
    <input type="checkbox" name="kid" value=1 >
    
    <p><label for="number"><b>Action & Aduencture</b></label></p>
    <input type="checkbox" name="action_&_aduencture" value=1 >
    
    <p><label for="number"><b>Romance</b></label></p>
    <input type="checkbox" name="romance" value=1>
    
    <p><label for="number"><b>MyStory & Fantasy</b></label></p>
    <input type="checkbox" name="myStory_&_fantasy" value=1>
    
    <p><label for="number"><b>Horror</b></label></p>
    <input type="checkbox" name="Horror" value=1>
    
    <p><label for="number"><b>Travel</b></label></p>
    <input type="checkbox" name="travel" value=1>
    
    <p><label for="number"><b>Computer Science</b></label></p>
    <input type="checkbox" name="computer_science"value=1 >
    
    <p><label for="number"><b>Science</b></label></p>
    <input type="checkbox" name="science" value=1>
    
    <p><label for="number"><b>History</b></label></p>
    <input type="checkbox" name="history" value=1>
    
    <p><label for="number"><b>Math</b></label></p>
    <input type="checkbox" name="math" value=1>
    
    <p><label for="number"><b>Poetry</b></label></p>
    <input type="checkbox" name="poetry" value=1>
    
    <p><label for="number"><b>Encyclopedia</b></label></p>
    <input type="checkbox" name="encyclopedia" value=1>
    
    <p><label for="number"><b>Religious</b></label></p>
    <input type="checkbox" name="religious" value=1>
    
    <p><label for="number"><b>biographies</b></label></p>
    <input type="checkbox" name="biographies" value=1>
    </ul>
    <div class="clearfix">
      <ul><button type="submit" name="Insert_data" > Insert data</button></ul>	
    </div>
  </div>
</form>

</body>
</html>
