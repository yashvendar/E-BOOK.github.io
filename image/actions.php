<?php
	session_start();
	try{
	 	$conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               /* $a=$_SESSION["email"];
         	$b=$_SESSION["addcart"];
         	echo $a;
         	echo $b;*/
         if(isset($_SESSION['email']) && isset($_SESSION['addcart'])){
         	//$a=$_SESSION["email"];
         	//$b=$_SESSION["addcart"];
         	//echo $a;
         	//echo $b;
         	$st=$conn->prepare("insert into cart (login_id,b_id) values(:log,:bid)");
                $st->bindParam(":log",$_SESSION["email"]);
                $st->bindParam(":bid",$_SESSION['addcart']);
                $st->execute();
                $row=$st->rowCount();
                $cart= $_SESSION['cart'];
                $cart=$cart+$row;
                $_SESSION['cart']=$cart;
                echo $row;
                echo $_SESSION['email'];
                echo $_SESSION['addcart'];
                unset($_SESSION['addcart']);
               if($st){
                	header("location:searches.php");
                }
         }
         elseif(isset($_SESSION['email']) && isset($_SESSION['remove'])){

                        $st=$conn->prepare("delete from cart where b_id=:bid");
                        $st->bindParam(":bid",$_SESSION['remove']);
                        echo $remove;
                        $t_price=$_SESSION['price'];
                        $t_price=$t_price-$_SESSION['$remove'];
                       	$_SESSION['price']=$price;
                        $st->execute();	
                        $row=$st->rowCount();
                        $cart=$_SESSION['cart'];
                        $cart=$cart-1;
                        $_SESSION['cart']=$cart;
                        unset($_SESSION['remove']);
                        header("location:cart.php");

         }
         elseif(isset($_SESSION['search']) && $_SESSION['find']){
         	header("location:searches.php");
         	unset($_SESSION['find']);
         }
	}
	catch(PDOException $e){

		die("connection failed".$e->getmessage());
	   
	}
	

?>

