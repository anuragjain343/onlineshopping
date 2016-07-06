
<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
<head>
<title>
onchlick shop
</title>
<link rel="stylesheet" href="style1/style.css" media="all">
</head>
<body>
<div class="wapper">

<div class="header_wapper">

<img id="logo" height=100% width=22%; src="images/Capture3.png"/>
<img id="banner" height=100%; width=78%; src="images/Capture2.png"/>


</div>





<div class="menubar">
<ul id="menu">
<li><a href ="index.php">HOME</a></li>
<li><a href ="all_product.php">ALL PRODUCT</a></li>
<li><a href ="#">MY ACCOUNT</a></li>
<li><a href ="#">SIGN UP</a></li>
<li><a href ="#">SHOPING CART</a></li>
<li><a href ="#">CANTECT US</a></li>
</ul>
<div id="form">
<form method="get"  action="index.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="SEARCH A PRODUCT"/>
<input type="submit" name="search" value="search">
<?php
if(isset($_GET['search']))
{
	$user_query=$_GET['keywork'];
$get_product="select*from products where keyword='$user_query'";

$run_product=mysqli_query($con,$get_product);
while($row_product=mysqli_fetch_array($run_product))
{
	$product_id=$row_product['product_id'];
	$product_cat=$row_product['product_cat'];
	$product_brand=$row_product['product_brand'];
	$product_title=$row_product['product_title'];
	$product_price=$row_product['product_price'];
	$product_image=$row_product['product_image'];
	
	echo" <div id='single_product'><h3><b>$product_title</b></h3>
	
	
	
	<img src='admin_area/product_images/$product_image'width='180' height='180'/>
	


	<p><b> Rs $product_price</b></p>
	<a href='index.php?product_id=$product_id'><button 'float:right'>Add To Cart</button></a>
	
	<a href ='detail.php?product_id=$product_id'><button 'float:right'>Detail</button></a>

	
	</div>";
	







}





















}


?>


</form>
</div>
</div>




<div class ="wapper_contain">

<div id="slidbar">

<div id="slid_title">Categories</div>

<ul id="cats">
<?php
getcats();
?>
</ul>

<div id="slid_title">Brand</div>

<ul id="cats">
<?php
getbrands();
?>
</ul>


</div>




<div id="contain1">
<div id ="caartdetail">
<h1> Welcome Guest!<h1>
<h2>Total No Of Item:-<br>
Total RS/-</br>
<a href="index.php">Go to Cart</a></h2>




 </div>
<div id="product_box">



 
 
 
 
</div>
 </div>

</div>




<div id ="fotter">
<div id ="ft1">
<b>Contact Us</b>
<p>Corporate Office Just@shop online system Pvt.Ltd. vellore-INDIA +919629784503 info@just@shop.com</p>
</div>
<div id ="ft2">
<b>Follow us</b>
<ul>
<li><a href=http://www.facebook.com><img src="images/fb.jpg" height=25%;width=25%;/></a></li>
<li><a href=http://www.twitter.com><img src="images/tw.jpg" height=25%;width=25%;/></a></li>
<li><a href=htpp://www.gmail.com><img src="images/gm.jpg" height=25%;width=25%;/></a></li>
</ul>
</div>
</div>











</div>
</body>
</html>
