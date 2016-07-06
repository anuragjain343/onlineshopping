
<!DOCTYPE>
<html>
<?php
if(isset($_post['submit']))
{
	
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
 {
      $emailErr = "Invalid email format"; 
	 
    }
	echo $emailErr;
}



?>
<body>
<form method="post" action ="demo.php">
email:<input type="text" name="email" >
<input type="submit" name="submit" value="submit">

</form>

<?php echo $email;?>
</body>

</html>
