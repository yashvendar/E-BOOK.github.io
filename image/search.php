<?php
	session_start();
	$_SESSION["search"]='Messiah';
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Book rental portal">
		<meta name="keywords"  content="book rent,rent book,mnit book rent">
		<meta name="author" content="Mohammad Faizan,Yashvendar ,Aakash Gopal Vacchani">
		<title>bookshop</title>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/menu.css">
		<link rel="stylesheet" type="text/css" href="./css/orders.css">
		<link rel="stylesheet" type="text/css" href="./css/cart.css">
		<link rel="stylesheet" type="text/css" href="./css/showItems.css">
		<style>

footer {
	padding:3px;
	margin-top:0px;
	color:#ffffff;
	background-color: #e8491d;
	text-align:center;
	font-size: 20px;
}


.item_pic{
  border: 1px solid black;
  margin-top:-20px;
  margin-left:70px;
  border-radius: 4px;
  padding: 5px;
  width: 250px;
  height:350px;
}

.order_id{
  padding-left:300px;
  font-size:20px;
  margin-left:150px;
  padding-top:-300px;

}

.vl{

  border-left: 3px solid #d8d8d8;
  height: 400px;
  margin-left:380px;
  margin-top: -430px;


}

.button_2{
background:#e8491d;
height:30px;
border-radius:5px;


}
.button_3{
background:#e8491d;
height:30px;
border-radius:5px;


}

.imgr{
margin-top:0px;

}

.bor{
	border: black 1px solid;
	margin-left:90px;
	margin-right:20px;
	margin-top: -10px;
	width: 1100px;
}  

.buynow_cls{
	width:100px;
	height:100px;	
	margin-top:-50px;	
	margin-left:880px;
			
} 
.rent_cls{
	width:100px;
	height:100px;	
	margin-top:-100px;	
	margin-left:980px;			
}  

 
</style>
		
	</head>
	<body>
		<header>
		<!---------------------------------------- Menu sidebar start, css in menu.css---------------------------------->
		     <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a>Home</a>
                <a>Book Category</a>
                <a>Book by Year</a>
                <a>Your Orders</a>
                <a>Account Setting</a>
                <a>Log Out</a>
            </div>
            <span style="cursor:pointer" class="menu_icon" onclick="openNav()">&#9776;</span>
		    <script>
                function openNav(){
                    document.getElementById("mySidenav").style.width="250px";
                    document.getElementsByTagName('body')[0].style.marginRight="250px";
                
                }
                function closeNav(){
                    document.getElementById("mySidenav").style.width="0";
                    document.getElementsByTagName('body')[0].style.marginRight="0";
                }
        </script>
        <!---------------------------------------------------- End of Menu--------------------------------------------->
		<div class="container">
			<div id="name">
				<h1><span class="highlight">e</span>-bOOKs</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a herf="index.php">HOME</a></li>
					<li><a herf="about.html">ABOUT</a></li>
					<li><a herf="help.html">HELP</a></li>
				</ul>
			</nav>
		</div>
        
        <!--------------------------------------cart start,css in cart.css--------------------------------------------------------------->
		
		<div class="cart">
                        <img src="./image/cart.png" class="cart_image"/>
                        <p class="cart_notification">6</p>
                    </div>
        <!-------------------------------------------------cart End-------------------------------------------------------------------->

		</header>
		<!------siderbar-----start css in cart.css -->
		<div class="sidebar">
            <img src="./image/facebook.png" style="height:45px; width:45px;" />
            <img src="./image/insta.jpeg" style="height:45px; width:45px;" />
            <img src="./image/twitter.png" style="height:45px; width:45px;" />
            <img src="./image/link.jpeg" style="height:45px; width:45px;" />
        </div>
		    <?php
                //session_start();

                try{
                //echo 'enter';
                $conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo 'after connection';

                //if(isset($_SESSION["email"]))
                //{
                	$search=$_SESSION["search"];
                    $st=$conn->prepare("select * from books where b_nm like '%$search%' or b_author like '%$search%' or b_publisher like '%$search%'");
                    $st->execute();
		    		while($ft=$st->fetch())
			
                    {?> 
                        
                        <div class=item_pic><div class='img'><img src="./image/<?php echo $ft['b_path']; ?>" height="350px" width="250px"></div></div>
			
			
			<div class="buynow_cls">	
			<form method="post">
			<button type="buy" name="buynow" class="button_2">Buy Now</button> 
			</form>
			</div>
			<div class="rent_cls">
			<form method="post">
			<button type="rent" name="rentnow" class="button_3">Rent Book</button>
			</form>
			</div>
			
			</div>
			<div class="bor"></div>

		

		    
		    <?php
			echo '<div class="vl"></div>';
                	echo '<div class="order_id">';
                        echo $ft['b_name'];
                        echo '<h1>';
                        echo $ft['b_author'];
                        //echo $ft[b_path];
                        echo '</h1>';
                        echo $ft['b_publisher'];                       
			echo '</div>';
                        } 
                      }
                      
                      catch(PDOException $e){
		die("connection failed".$e->getmessage());
	}
	
	?>
<p>

<footer>
			<p>e-bOOKs ,Copyright &copy; 2019</p>
		</footer>
</body>
</html>
