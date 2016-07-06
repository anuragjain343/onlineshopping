
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
<li><a href ="#">HOME</a></li>
<li><a href ="#">ALL PRODUCT</a></li>
<li><a href ="#">MY ACCOUNT</a></li>
<li><a href ="#">SIGN UP</a></li>
<li><a href ="#">SHOPING CART</a></li>
<li><a href ="#">CANTECT US</a></li>
</ul>
<div id="form">
<form method="get"  action="result.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="SEARCH A PRODUCT"/>
<input type="submit" name="search" value="search">

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
<div id="product_box">

<?php
if(isset($_GET['product_id']))
{
	
$product_id=$_GET['product_id'];
	
global $con;
$get_product="select*from products where product_id='$product_id'";
$run_product=mysqli_query($con,$get_product);
while($row_product=mysqli_fetch_array($run_product))
{
	$product_id=$row_product['product_id'];
	$product_cat=$row_product['product_cat'];
	$product_decs=$row_product['product_decs'];
	$product_title=$row_product['product_title'];
	$product_price=$row_product['product_price'];
	$product_image=$row_product['product_image'];
	
	echo" <div id='single_product'><h3><b>$product_title</b></h3>
	
	
	
	<img src='admin_area/product_images/$product_image'width='350' height='400'align='center'/>
	<p><b>ART.NO:-$product_id</b></p>
    <p><b>Rs/- $product_price</b></p>
	<p><b>CAT.NO:-$product_cat</b></p>
	<p><b>DETAIL ABOUT PRODUCT:- $product_decs</b></p>
	<a href='index.php?product_id=$product_id'><button 'float:right'>Add To Cart</button></a>
	
	
	<a href='index.php'><button 'float:right'>GO BACK</button></a>
	
	</div>";
	
}
}
























?>
</div>
 </div>

</div>

<div id="footer"> this is foter</div>
</div>
</body>
</html>
