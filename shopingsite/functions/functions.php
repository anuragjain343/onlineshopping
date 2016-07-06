<?php
$con=mysqli_connect("localhost","root","","shopingsite");

function getcats()
{
	global $con;
$get_cats="select*from categories";
$run_cats=mysqli_query($con,$get_cats);
while($row_cat=mysqli_fetch_array($run_cats))
{
	
	$cat_id=$row_cat['cat_id'];
	$cat_title=$row_cat['cat_title'];
	echo "<li><a href='index.php?cat_id=$cat_id'>$cat_title</a></li>";
}


}

function getbrands()
{
	global $con;
$get_brands="select*from brands";
$run_brands=mysqli_query($con,$get_brands);
while($row_brands=mysqli_fetch_array($run_brands))
{
	
	$brands_id=$row_brands['brands_id'];
	$brands_title=$row_brands['brands_title'];
	echo "<li><a href='index.php?brands_id=$brands_id'>$brands_title</a></li>";
}


}


function getproduct()
{
	if(!isset($_GET['cat_id']))
	{
		if(!isset($_GET['brands_id']))
	{
	
	
global $con;
$get_product="select*from products order by RAND() LIMIT 0,9";
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
	<a href='addcart.php?product_id=$product_id'><button 'float:right'>Add To Cart</button></a>
	
	<a href ='detail.php?product_id=$product_id'><button 'float:right'>Detail</button></a>

	
	</div>";
	
}
}
}
}








function getproduct_cat()
{
	if(isset($_GET['cat_id']))
	{
		$cat_id=$_GET['cat_id'];
global $con;
$get_product_cat="select*from products where product_cat='$cat_id'";
$run_product_cat=mysqli_query($con,$get_product_cat);
while($row_product_cat=mysqli_fetch_array($run_product_cat))
{
	$product_id=$row_product_cat['product_id'];
	$product_cat=$row_product_cat['product_cat'];
	$product_brand=$row_product_cat['product_brand'];
	$product_title=$row_product_cat['product_title'];
	$product_price=$row_product_cat['product_price'];
	$product_image=$row_product_cat['product_image'];
	
	echo" <div id='single_product'><h3><b>$product_title</b></h3>
	
	
	
	<img src='admin_area/product_images/$product_image'width='180' height='180'/>
	


	<p><b> Rs $product_price</b></p>
	<a href='index.php?product_id=$product_id'><button 'float:right'>Add To Cart</button></a>
	
	<a href ='detail.php?product_id=$product_id'><button 'float:right'>Detail</button></a>

	
	</div>";
}	
}
}









function getproduct_brands()
{
	if(isset($_GET['brands_id']))
	{
		$brands_id=$_GET['brands_id'];
global $con;
$get_product_brands="select*from products where product_brand='$brands_id'";
$run_product_brands=mysqli_query($con,$get_product_brands);
while($row_product_brands=mysqli_fetch_array($run_product_brands))
{
	$product_id=$row_product_brands['product_id'];
	$product_cat=$row_product_brands['product_cat'];
	$product_brand=$row_product_brands['product_brand'];
	$product_title=$row_product_brands['product_title'];
	$product_price=$row_product_brands['product_price'];
	$product_image=$row_product_brands['product_image'];
	
	echo" <div id='single_product'><h3><b>$product_title</b></h3>
	
	
	
	<img src='admin_area/product_images/$product_image'width='180' height='180'/>
	


	<p><b> Rs $product_price</b></p>
	<a href='index.php?product_id=$product_id'><button 'float:right'>Add To Cart</button></a>
	
	<a href ='detail.php?product_id=$product_id'><button 'float:right'>Detail</button></a>

	
	</div>";
}	
}
}
































?>