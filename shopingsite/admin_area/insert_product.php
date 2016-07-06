<!DOCTYPE>
<?php
include("includes/db.php");
?>
<html>
<head><title> insert product </title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body bgcolor="#d9ea47">
<form action="insert_product.php" method="post" enctype="multipart/form-data">
<table align ="center"  width="750" bgcolor="lightgray" border="2">
<tr><td colspan="7" align="center">
<h2>Insert new product here </h2></td>
</tr>


<tr>
<td align="center">product id:</td>
<td><input type="text" name="product_id" size="50"></td>
</tr>





<tr>
<td align="center">product categories:</td>
<td> <select name="product_cat">
<option> select Categories</option>

<?php


$con=mysqli_connect("localhost","root","","shopingsite");



$get_cats="select*from categories";
$run_cats=mysqli_query($con,$get_cats);
while($row_cat=mysqli_fetch_array($run_cats))
{
	
	$cat_id=$row_cat['cat_id'];
	$cat_title=$row_cat['cat_title'];
	echo"<option value='$cat_id'> $cat_title </option>";
}


?>

</select></td>
</tr>
<tr>
<td align="center">product barnd:</td>
<td>
<select name="product_brand">
<option> select Brands</option>
<?php


$con=mysqli_connect("localhost","root","","shopingsite");
$get_brands="select*from brands";
$run_brands=mysqli_query($con,$get_brands);
while($row_brands=mysqli_fetch_array($run_brands))
{
	
	$brands_id=$row_brands['brands_id'];
	$brands_title=$row_brands['brands_title'];
	echo "<option value='$brands_id'>$brands_title</option>";
}

?>

</select>
</td>
</tr>

<tr>
<td align="center">product title:</td>
<td><input type="text" name="product_title" size="50"></td>
</tr>


<tr>
<td align="center">product price:</td>
<td><input type="text" name="product_price" size="50"></td>
</tr>


<tr>
<td align="center">product discription:</td>
<td> <textarea name="product_decs" cols="30" rows="10"> </textarea> </td>
</tr>


<tr>
<td align="center">product image:</td>
<td><input type="file" name="product_image"></td>
</tr>


<tr>
<td align="center">product keyword:</td>
<td><input type="text" name="product_keyword" size="50"></td>
</tr>

<tr>
<td align="center"></td>
<td><input type="submit" name="submit" value="submit"></td>
</tr>

</table>


<?php
$con=mysqli_connect("localhost","root","","shopingsite");
if(isset($_POST['submit']))
{
	$product_id=$_POST['product_id'];
	$product_cat=$_POST['product_cat'];
	$product_brand=$_POST['product_brand'];
	$product_title=$_POST['product_title'];
	$product_price=$_POST['product_price'];
	$product_decs=$_POST['product_decs'];
	$product_image=$_FILES['product_image']['name'];
    $product_image_temp=$_FILES['product_image']['temp_name'];
	
	move_uploaded_file($product_image_temp,"F:/myproject/xampp/htdocs/shopingsite/admin_area/$product_image");
	
	
	
	$product_keyword=$_POST['product_keyword'];
	
	
  $insert_result= "INSERT INTO products VALUES('$product_id','$product_cat','$product_brand','$product_title','$product_price','$product_decs','$product_image','$product_keyword')";
  $result=mysqli_query($con,$insert_result);
  if($insert_result)
  {
	  echo"<script>alert('Succesfully inserted')</script>";
	  
	  echo"<script>window.open('nsert_product.php','self')</script>";
  }
  ?>
<?php
}
?>
</body>
</html>


