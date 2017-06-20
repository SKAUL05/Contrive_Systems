<!--A Design by Sarath Kaul
Author: Sarath Kaul
Author URL: http://github.com/SKAUL05
-->
<!DOCTYPE HTML>
<html>
<head>
<link href="Imagess/logo1.png" rel="shortcut icon">
<title>Contrive Systems</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/stylexx.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
<script src="js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popups.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {

    var dropdowns = document.getElementsByClassName("dropdown1-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

		</script>
<?php session_start(); $x= "LOGIN"; ?>
<?php
$userID = $_SESSION['c_id'];
$user="root";
$pass="";
$name=" ";
$start="NOT LOGGED";
$db="contrive_systems";
$host="localhost";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
	{
		echo("Database Connection Failed");
		exit();
	}
//echo "Connection Established";
if($userID != 0){
$sql = "SELECT * from register where user_id='$userID'";
 $result = mysqli_query($conn,$sql) or die("cannot execute query");
                $count = mysqli_num_rows($result);
                $row = mysqli_fetch_array($result);
				$name = $row['First_Name'];
				$x="LOGOUT";
				$start="WELCOME";
}
?>


<style>
.dropbtn1 {
    background-color:black;
    color: orange;
    padding: 10px;
    font-size: 16px;
	width:100%;
    border-radius:4px;
    cursor: pointer;
	margin-top:-80%;
	margin-left:5%;
}

.dropbtn1:hover, .dropbtn1:focus {
    background-color: orange;
	color:black;
	box-shadow: 0 18px 16px 0 rgba(0,0,0,0.24), 0 27px 50px 0 rgba(0,0,0,0.19);
}
.dropbtn1:active {
  background-color: orange;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.dropdown1 {
    position: relative;
    display: inline-block;
	margin-top:-80%;
	margin-left:70%;
	font-family: 'Baloo Bhaina', cursive;
}

.dropdown1-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	font-size:13px;
	font-family: 'Lemon', cursive;
}

.dropdown1-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown1 a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
		
</head>
<body>
<div class="header">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<a href="index.php"><img id="title"src="Imagess/title.png" alt=""/></a>
			 </div>
		   <div class="header_right">
			 <ul class="social">
				<li><a href="https://www.fb.com/contrivesystems" target="_blank"> <i class="fb"> </i> </a></li>
				<li><a href=""><i class="tw"> </i> </a></li>
				<li><a href=""><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href="https://www.instagram.com/contrive.systems" target="_blank"><i class="instagram"> </i> </a></li>
			 </ul>
		   <!---<div class="lang_list">--> 
			  <div class="dropdown1">
					<button onclick="myFunction()" class="dropbtn1"style="font-family: 'Baloo Bhaina', cursive;">ACCOUNT</button>
					<div id="myDropdown" class="dropdown1-content" style="font-family: 'Lemon', cursive;">
					<a href="index.php"> <?php echo $start;echo " "; echo $name; ?> </a>
					<a href="account.php">ABOUT ME</a>
					<?php if($userID ==0){?>      
					<a href="login_page.php"><?php echo $x;?></a>
					<?php } 
					 if($userID !=0){?>      
					<a href="logout.php"><?php echo $x;?></a>
					<?php } ?>
					</div>
				</div>
   		<!----	</div>---->
			<div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
		 </div>  
		 <div class="banner_wrap">
			<div class="bannertop_box">
	  			<div class="welcome_box" style="margin-top:70%;">
	  				<h2>Welcome to Contrive Systems</h2>
	  				<p>We thrive on building the best available printers and scanners in market.</p>
	  			</div>
   		 	</div>
   		 	<div class="banner_right">
   		 		<h1 style="color: #ffaa1f;">Best of 3d Printers &<br>Scanners</h1>
   		 		<p>Manufacturers and Resellers of 3D Printing and Scanning Technologies.</p>
   		 	</div>
   		 	<div class='clearfix'></div>
	    </div>
	   </div>
	</div>
	<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
				   	  	<h3 class="menu_head">Menu</h3>
				   	     <ul class="nav">
					   	  	<li><a href="#">About</a></li>
					   	  	<li><a href="3D.php">3D Printers</a></li>
					   	  	<li><a href="#">Electronic Parts</a></li>
					   	  	<li><a href="#">Mechanical Parts</a></li>
					   	  	<li><a href="#">Filaments</a></li>
					   	  	<li><a href="#">Accessories</a></li>
					   	  	<li><a href="#">Support</a></li>
					   	  	<li><a href="#">Services</a></li>
							<li><?php if($userID ==0){?>      
					            <a href="login_page.php"><?php echo $x;?></a>
					            <?php } 
					            if($userID !=0){?>      
					            <a href="logout.php"><?php echo $x;?></a>
					            <?php } ?>
							</li>
					   	  <li><a href="register_page.php">Register</a></li>
					   	 </ul>
			   	    </div>
			   	    <div class="side_banner">
					   <div class="banner_img"><img src="img/4.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
				    </div>
				    <div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Printers</a></li>
							<li><a href="#">Scanners</a></li>
							<li><a href="#">PLA</a></li>
							<li><a href="#">ABS</a></li>
							<li><a href="#">UVResin</a></li>
							<li><a href="#">Nylon</a></li>
							<li><a href="#">PVA</a></li>
							<li><a href="#">PETG</a></li>
							<li><a href="#">Motors</a></li>
							<li><a href="#">Extruders</a></li>
							<li><a href="#">Rods</a></li>
							<li><a href="#">Bearings</a></li>
							<li><a href="#">Tools</a></li>
							<li><a href="#">Tapes</a></li>
							<li><a href="#">HeatBed</a></li>
					        <li><a href="#">PCTPE</a></li>
						</ul>
						<a href="#" class="link1">View all tags</a>
				     </div>
				     <div class="tags">
				      	<h4 class="tag_head">Articles Experts</h4>
				      	 <ul class="article_links">
							<li><a href="#">Eleifend option congue nihil</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">commodo consequat. Duis autem</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
						  </ul>
						 <a href="#" class="link1">View all</a>
				      </div>
				</div>
			   <div class="col-md-9">
				<h3 class="m_1">New Products</h3>
				 <div class="content_grid">
				   <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="#">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img/1.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								 <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img/2.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>		
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							</div>
		                    <div class="sale-box1"><span class="on_sale1 title_shop">New</span></div>	
		                   </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
				  	      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img/3.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				   </div>
				   <div class="clearfix"></div>
			  </div>
			  <div class="content_grid">
				  <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img1/1.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img1/2.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
				  	      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img1/3.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				       </div>
				  <div class="clearfix"></div>
			   </div>
			   <h3 class="m_2">Top Products</h3>
			   <div class="content_grid">
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img2/1.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>		
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	     <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img2/2.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>		
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    <div class="sale-box1"><span class="on_sale1 title_shop">Top</span></div>
							</div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
				  	  <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img2/3.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								 <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="clearfix"></div>
			    </div>
			    <h3 class="m_2">Sale Products</h3>
			   <div class="content_grid">
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img3/1.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>		
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img3/2.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    <div class="sale-box1"><span class="on_sale1 title_shop">Sale</span></div>
							</div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
				  	    <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="img3/3.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>	
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$45.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				   </div>
				   <div class="clearfix"></div>
			    </div>
			  </div>
			</div>
		 </div>
		</div>
		<div class="container">
		 <marquee behavior=scroll direction="left" scrollamount="15"> <div class="brands">
			 <ul class="brand_icons">
				<li><img src='img/mar.png' class="img-responsive" alt=""/></li>
				<li><img src='img/mar1.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon3.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon4.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon5.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon6.jpg' class="img-responsive" alt=""/></li>
				<li class="last"><img src='images/icon7.jpg' class="img-responsive" alt=""/></li>
			 </ul>
		   </div></marquee>
	    </div>
	    <div class="container">
	      <div class="instagram_top">
	      	<div class="instagram text-center">
				<h3></i> Instagram feed:&nbsp;<span class="small">#ContriveBase</span></h3>
			</div>
	        <ul class="instagram_grid">
			  <li><a class="popup-with-zoom-anim" href="#small-dialog2"><img src="Imagess/insta1.jpg" class="img-responsive"alt=""/></a></li>
              <div id="small-dialog2" class="mfp-hide">
				<div class="pop_up">
					<h4>Contrive Base</h4>
					<img src="Imagess/Inst1.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog3"><img src="Imagess/Insta2.jpg" class="img-responsive" alt=""/></a></li>
			  <div id="small-dialog3" class="mfp-hide">
				<div class="pop_up">
					<h4>Contrive Base</h4>
					<img src="Imagess/Inst2.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog4"><img src="Imagess/Insta3.jpg" class="img-responsive" alt=""/></a></li>
			  <div id="small-dialog4" class="mfp-hide">
				<div class="pop_up">
					<h4>Contrive Base</h4>
					<img src="Imagess/Inst3.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog5"><img src="Imagess/Insta4.jpg" class="img-responsive" alt=""/></a></li>
			  <div id="small-dialog5" class="mfp-hide">
				<div class="pop_up">
					<h4>Contrive Base</h4>
					<img src="Imagess/Inst4.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog6"><img src="Imagess/Insta5.jpg" class="img-responsive" alt=""/></a></li>
              <div id="small-dialog6" class="mfp-hide">
				<div class="pop_up">
					<h4>Contrive Base</h4>
					<img src="Imagess/Inst5.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			  <li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="Imagess/Insta6.jpg" class="img-responsive" alt=""/></a></li>
			  <div class="clearfix"></div>
			  <div id="small-dialog1" class="mfp-hide">
				<div class="pop_up">
					<h4>Contrive Base</h4>
					<img src="Imagess/Inst6.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			</ul>
		  </div>
	      <ul class="footer_social">
			<li><a href="https://www.fb.com/contrivesystems"> <i class="fb"> </i> </a></li>
			<li><a href="https://www.instagram.com/contrive.systems/"><i class="tw"> </i> </a></li>
			<li><a href="mailto:contrivesystems@gmail.com"><i class="pin"> </i> </a></li>
			<div class="clearfix"></div>
		   </ul>
	    </div>
     </div>
     <div class="footer">
			<div class="container">
				<div class="footer-grid">
					<h3>Category</h3>
					<ul class="list1">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">About us</a></li>
					  <li><a href="#">Eshop</a></li>
					  <li><a href="#">Features</a></li>
					  <li><a href="#">New Collections</a></li>
					  <li><a href="#">Blog</a></li>
					  <li><a href="#">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="#">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
				  <div class="footer-grid">
					<h3>Newsletter</h3>
					<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
					<div class="search_footer">
			          <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
			          <input type="submit" value="Submit">
			        </div>
			        <img src="images/payment.png" class="img-responsive" alt=""/>
				 </div>
				 <div class="footer-grid footer-grid_last">
					<h3>About Us</h3>
					<p class="footer_desc">We are Manufacturers and Resellers of 3D Printing and Scanning Technologies, located at Mumbai, India. With a team of qualified engineers, our motto is to provide latest & reliable technology to our customers at affordable prices.</p>
                    <p class="f_text">Phone:  &nbsp;+91-9619012911</p>
                    <p class="email">Email:&nbsp;<a href="mailto:contrivesystems@gmail.com">contrivesystems@gmail.com</a></p>	
                 </div>
				 <div class="clearfix"> </div>
			</div>
		</div>
        <div class="footer_bottom">
        	<div class="container">
        		<div class="copy">
				   <p>Copyright &copy; 2017 Contrive Systems. All Rights Reserved . Design by <a href="mailto:kaul.sarath@gmail.com" target="_blank">SarathKaul</a> </p>
			    </div>
        	</div>
        </div>
		


</body>
</html>		