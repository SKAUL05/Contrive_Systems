<!--A Design by SarathKaul
Author: Sarath Kaul
Author URL: http://www.contrivesystems.com
-->

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contrive_systems";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if(!$conn)
	{
		echo("Database Connection Failed");
		exit();
	}

//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>
<link href="Imagess/logo1.png" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart|Contrive Systems</title><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/stylexx.css" rel='stylesheet' type='text/css' />
<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
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
		// Close the dropdown if the user clicks outside of it
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
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
<?php  $x= "LOGIN"; ?>
<?php
$userID = $_SESSION['c_id'];
$name=" ";
$start="NOT LOGGED";
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
	//width:80px;
	margin-top:-80%;
	margin-left:70%;
	font-family: 'Baloo Bhaina', cursive;
}

.dropdown1-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
	//margin-top:-10%;
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
			<div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
		 </div>
		</div>
    </div>


<!-- View Cart Box Start -->
<?php
if(isset($_SESSION["carts"]) && count($_SESSION["carts"])>0)
{
	echo '<div class="cart-view-table-front" id="view-cart">';
	//echo '<h3>Your Shopping Cart</h3>';
	//echo '<form method="post" action="cart_update.php">';
	//echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	//echo '<tbody>';
    $value=0;
	$total =0;
	$b = 0;
	foreach ($_SESSION["carts"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$value=$value+$product_qty;	
		$bg_color = ($b%2==1) ? 'odd' : 'even'; //zebra stripe
		//echo '<tr class="'.$bg_color.'">';
		//echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		//echo '<td>'.$product_name.'</td>';
		//echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
			
	}
	echo '<a href="view_cart.php"><img src="Imagess/catrtly.png"></a>';
	echo '<div class="value">';
	echo '<span class="value" >'.$value.'</span>';
	echo '</div>';
	echo '<td colspan="4">';
	//echo '<a href="view_cart.php" class="button">Checkout</a>';
	//echo '</td>';
	//echo '</tbody>';
	//echo '</table>';
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	//echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	//echo '</form>';
	echo '</div>';

}
?>
<!-- View Cart Box End -->
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
					   	  	<li><a href="contact.html">Contact</a></li>
					   	 </ul>
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
				     <div class="side_banner">
					   <div class="banner_img"><img src="img/4.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
				    </div>
				    
			  </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        Products&nbsp;
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="women">
                        3dprinters
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
                 
                <div class="clearfix"></div>		
		        </div>		
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						</div>
					<div class="pages">   
       	            </div>
					<div class="clearfix"></div>
				</div>
<!-- Products List Start -->
<?php
$results = mysqli_query($conn,"SELECT product_code, product_name ,Image, price FROM 3dprinters ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="img/{$obj->Image}"></div>
	<div class="product-info">
	Price {$obj->price} 
	
	<fieldset>
	
	
	
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Add</button></div>
	</div></div>
	</form>
	</li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
<!-- Products List End -->					   
			   
			   
			   
			   
			   
			   
			   
			   
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
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
