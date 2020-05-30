<?php 
	session_start();
	function alert_func($msg)
	{
		echo '<script type="text/javascript">alert($msg)</script>';
	}
	$f=0;
	try{
		$conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		extract($_POST);
		if(isset($but))
		{
			if(empty($email) || empty($pass))
			{
				$f=1;

			}

			$st=$conn->prepare("select * from login where login_id=:log and password=:pas");

			$st->bindParam(":log",$email);

			$st->bindParam(":pas",$pass);

			$st->execute();

			$count=$st->rowCount();

			if($count>0)
			{

				$_SESSION["email"]=$email;
				header("location:login_success.php");
			}
			else
			{
				$f=2;
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
		<title>bookshop</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/menu.css">
		<link rel="stylesheet" type="text/css" href="./css/cart.css">
		<link rel="stylesheet" type="text/css" href="./css/showItems.css">
		<link rel="stylesheet" type="text/css" href="./css/scrolle.css">
	</head>

	<body onResize="resetall()">
		<header>
        <!---------------------------------------- Menu sidebar start, css in menu.css---------------------------------->
        <span class="menu_icon" onclick="openNav()">&#9776</span>
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a>
                <?php
                    echo '<h3>';
                    echo 'Hello,';
                    echo  $_SESSION['user'];
                    echo '</h3>';
                 ?>
                 <hr>
                </a>
                <a class="home" href="home.php">Home</a>
                <a>Book Category</a>
                <a>Book by Year</a>
                <a class="after_login">Your Orders</a>
                <a class="after_login">Account Setting</a>
                <a href="signin.php" class="Sing_In_out">Sign in</a>
            </div>
            
		    <script>
		        var action=0;
                function openNav(){
                    if(action==0){
                        document.getElementById("mySidenav").style.width="250px";
                    document.getElementsByTagName('body')[0].style.marginLeft="250px";
                    action=1;
                    }
                    else{
                        closeNav();
                    }
                }
                function closeNav(){
                    document.getElementById("mySidenav").style.width="0";
                    document.getElementsByTagName('body')[0].style.marginLeft="0";
                    action=0;
                    
                }
                function sidebar_action(){
                    if(action==1){
                        closeNav();
                    }
                }
        </script>
        <!---------------------------------------------------- End of Menu--------------------------------------------->
         <div id="name">
				<h1 style="white-space: nowrap;"><span class="highlight">e</span>-bOOKs</h1>
				        
			</div>
			<form class="SearchBar" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><img src="./image/sbutton.png" style="width:25px; height:15px;"/></button>
            </form>
			<nav class="upperbar">    
				<ul>
					<li class="current" style="cursor: pointer;"><a herf="index.php">HOME</a></li>
					<li><a herf="about.html" style="text-decoration: none; color: white;cursor: pointer;">ABOUT</a></li>
					<li><a href="signin.php" style="text-decoration: none; color: white;cursor: pointer;">Sign In</a></li>
				</ul>
		</nav>
		<!--------------------------------------cart start,css in cart.css--------------------------------------------------------------->
		
		<div class="cart">
                        <img src="./image/cart.png" class="cart_image" style="width:40px; height:40px; margin-bottom:-70px; margin-left:-20px"/>
                        <p class="cart_notification" style="font-size:20px; cursor: pointer;">6</p>
                    </div>
        <!-------------------------------------------------cart End-------------------------------------------------------------------->
        <!------siderbar-----start css in cart.css -->
		<div class="sidebar">
            <img src="./image/facebook.png" style="height:45px; width:45px;margin-top: 10px;" />
            <img src="./image/insta.jpeg" style="height:45px; width:45px;" />
            <img src="./image/twitter.png" style="height:45px; width:45px;" />
            <img src="./image/link.jpeg" style="height:45px; width:45px;" />
        </div>
        <!-------------------------siderbar---End----------------------------->
        </header>
        
		
		<!--------------------------------------Start Image Side Scroller,css in scrolle.css---------------------------------------->
		<div class="imageSideScroller">
		<img src="./image/sideshow/img1.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img2.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img3.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img4.jpg" class="myslides scroller_image" />
		<img src="./image/sideshow/img5.jpg" class="myslides scroller_image" />
		<div class="leftsidekey" onclick="plusdiv(-1)" style="display:flex;justify-content:center;align-items:center;top:150px;font-size:50px;position:absolute;  padding-bottom:10px;">&#10094</div>
		<div class="rightsidekey" onclick="plusdiv(1)" style="display:flex;justify-content:center;align-items:center;top:150px;font-size:50px;position:absolute;  padding-bottom:10px;">&#10095</div>
		<div class="scroller_badge" style="">
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(1)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(2)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(3)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(4)"></button>
			<button class="Imageselect dot_white circle" type="button" onclick="currentDiv(5)"></button>
		</div>
	</div>
	<script>
		var slideIndex=1;
		showDivs(slideIndex);
		carousel()
		function plusdiv(n) {
			slideIndex+=n;
			showDivs(slideIndex);
		}
		function currentDiv(n){
			myIndex=n;
			showDivs(slideIndex=n);
		}

		function showDivs(n){
			var i;
			var x=document.getElementsByClassName("myslides");
			var dots=document.getElementsByClassName("Imageselect");
			//console.log(x);
			if (n > x.length) {
				slideIndex=1;
			}
			if(n<1){
				slideIndex=x.length;
			}
			for(i=0;i < x.length; i++){
				x[i].style.display = "none";
			}
			for(i=0;i<dots.length;i++){
				dots[i].className[i]=dots[i].className.replace("dot_white","");
			}
			x[slideIndex-1].style.display="block";
			dots[slideIndex-1].className+="dot_white";

		}
		function carousel() {
			var i;
 			var x = document.getElementsByClassName("myslides");
  			for (i = 0; i < x.length; i++) {
    			x[i].style.display = "none";  
  			}
  			slideIndex++;
  			if (slideIndex > x.length) {slideIndex = 1}    
  				x[slideIndex-1].style.display = "block";  
  				setTimeout(carousel, 5000); // Change image every 2 seconds
		}
	</script>
	<!-----------------------------------------------END Image Side Scroller--------------------------------------------------------->


		
        <!-- -----------------------------showItems start, css in showItems.css-------------------------------------------------->
        <div class="showCat" style="display:flex;flex-direction:column;justify-content:center;">
            <div class="first_row">
                <a href="si_fi.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Science Fiction</h3>
                    <img src="./image/front_page/books_150015-668x1024.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/download1.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/download.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/images.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="novels.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Novels</h3>
                    <img src="./image/front_page/noval1.jfif" class="firstshowImage"/>
                    <img src="./image/front_page/noval2.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/noval3.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/noval4.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="kids.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Kids</h3>
                    <img src="./image/front_page/kid.jfif" class="firstshowImage"/>
                    <img src="./image/front_page/kid1.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/kid2.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/kid3.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="action_adventure.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Action & Aduencture</h3>
                    <img src="./image/front_page/Action_&_Aduencture.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Action_&_Aduencture1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Action_&_Aduencture2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Action_&_Aduencture3.jpg" class="fourthshowImage"/>
                </div></a>
            </div>
        <!------------------Start ImagesScroll,css in scrolle.css---------------------------------------------------------------->
        <div class="ImagesScroll" style="background-color:black; text-align: center;">
		<img src="./image/sideshow/img1.jpg" class="myimages scroller_images" />
		<img src="./image/sideshow/img2.jpg" class="myimages scroller_images" />
		<img src="./image/sideshow/img3.jpg" class="myimages scroller_images" />
		<img src="./image/sideshow/img4.jpg" class="myimages scroller_images" />
		<img src="./image/sideshow/img5.jpg" class="myimages scroller_images" />
		<div class="keys" style="margin-top:150px;">
			<button class="leftsidekey" onclick="moveLeft()" style="display:flex;justify-content:center;align-items:center;font-size:50px;position:absolute;  padding-bottom:10px;">&#10094</button>
			<button class="rightsidekey" onclick="moveRight()" style="display:flex;justify-content:center;align-items:center;font-size:50px;position:absolute;  padding-bottom:10px; right:0px;float:right">&#10095</button>
		</div><div class="slider_badge">
			<div type="button" onclick="scroll_action()" style="right: 0px;"><a class="slideStartStop">Slide Start/Stop</a></div>
		</div>
	</div>
	<p id="demo"></p>
	<script >
		var i;
		var slideImage=0;
		var scroll_var=0;

		function moveRight() {
			++slideImage;
			scroll_var=0;
			Scroll_img();
		}

		function scroll_action(){
			if(scroll_var){
				scroll_var=0;
			}
			else{
				scroll_var=1;
				Scroll_img();
			}
		}

		var total_image=document.getElementsByClassName('myimages');
		var items=Math.floor(document.body.clientWidth/(400+20));
		

		function moveLeft() {
			--slideImage;
			if(slideImage<0){
				slideImage+=total_image.length;
			}
			scroll_var=0;
			Scroll_img();
		}

		function resetall(){
			total_image=document.getElementsByClassName('myimages');
			items=Math.floor(document.body.clientWidth/(400+20));
			scroll_var=0;
			Scroll_img();
		}
		
		Scroll_img();
		function Scroll_img() {
			
			var count=items;
			var x=document.getElementsByClassName('myimages');
			for(i=0;i<total_image.length;i++){
				x[i].style.display="none";
			}
			for(i=slideImage;i<slideImage+items;i++){
				
					x[i%(x.length)].style.marginLeft=Math.floor(document.body.clientWidth-items*(400+20))/2+"px";
					
					x[i%(x.length)].style.display="block";
			}
			
			if(scroll_var){
				slideImage++;

				setTimeout(Scroll_img, 2000);
			}
		}
	</script>
        <!--------------------------------------------------------------------------------------->
            
            <div class="second_row">
                <a href="romance.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Romance</h3>
                    <img src="./image/front_page/Romance.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Romance1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Romance2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Romance3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">MyStory & Fantasy</h3>
                    <img src="./image/front_page/MyStory_&_Fantasy.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/MyStory_&_Fantasy1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/MyStory_&_Fantasy2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/MyStory_&_Fantasy3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="horror.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Horror</h3>
                    <img src="./image/front_page/horror.jfif" class="firstshowImage"/>
                    <img src="./image/front_page/horror1.jfif" class="secondshowImage"/>
                    <img src="./image/front_page/horror2.jfif" class="thirdshowImage"/>
                    <img src="./image/front_page/horror3.jfif" class="fourthshowImage"/>
                </div></a>
                <a href="travel.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Travel</h3>
                    <img src="./image/front_page/Travel.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Travel1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Travel2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Travel3.jpg" class="fourthshowImage"/>
                </div></a>
            </div>
            
            <div class="third_row">
                <a href="" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Computer Science</h3>
                    <img src="./image/front_page/computer.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/computer1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/computer2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/computer3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="science.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">science</h3>
                    <img src="./image/front_page/science.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/science1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/science2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/science3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="history.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">History</h3>
                    <img src="./image/front_page/History.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/History1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/History2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/History3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="math.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Math</h3>
                    <img src="./image/front_page/math.jpeg" class="firstshowImage"/>
                    <img src="./image/front_page/math1.jpeg" class="secondshowImage"/>
                    <img src="./image/front_page/math2.jpeg" class="thirdshowImage"/>
                    <img src="./image/front_page/math3.png" class="fourthshowImage"/>
                </div></a>
            </div>
            
            <div class="fourth_row">
                <a href="" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Poetry</h3>
                    <img src="./image/front_page/Poetry.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Poetry1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Poetry2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Poetry3.jpg" class="fourthshowImage"/>
                </div></a>
				<a href="" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Encyclopedia</h3>
                    <img src="./image/front_page/Encyclopedia.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Encyclopedia1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Encyclopedia2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Encyclopedia3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="religious.php" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Religious</h3>
                    <img src="./image/front_page/Religious.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/Religious1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/Religious2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/Religious3.jpg" class="fourthshowImage"/>
                </div></a>
                <a href="" style="text-decoration: none; color: black;"><div class="showItemclm">
                    <h3 class="showItemHeading">Biographies</h3>
                    <img src="./image/front_page/biographies.jpg" class="firstshowImage"/>
                    <img src="./image/front_page/biographies1.jpg" class="secondshowImage"/>
                    <img src="./image/front_page/biographies2.jpg" class="thirdshowImage"/>
                    <img src="./image/front_page/biographies3.jpg" class="fourthshowImage"/>
                </div></a>
            </div>
        </div>
        <!---------------------------------------------------- showItems End ---------------------------------------------->
		
		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="./image/buy.jpg">
					<h3>Buy Books</h3>
					<p>Buy books for affordable price</p>
				</div>
				<div class="box">
					<img src="./image/rent.png">
					<h3>Rent Books</h3>
					<p>Rent books for affordable price</p>
				</div>
				<div class="box">
					<img src="./image/donate.png">
					<h3>Sell Books</h3>
					<p>Sell Books</p>
				</div>
			</div>
		</section>

		<footer>
			<p>e-bOOKs ,Copyright &copy; 2019</p>
		</footer>
		<?php 
				if($f==1)
				{
					alert_func("all feilds are required");
				}
				elseif($f==2)
				{
					alert_func("either email or password is incorrect");
				}

		?>
	</body>
	
</html>
