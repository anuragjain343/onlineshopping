<!DOCTYPE>  
<html>

<?php
 if (empty($_POST["email"])) {
    
	$emailErr = "Email is required";
  } else {
    
	$email = $_POST["email"];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
	$emailErr = "Invalid email format"; 
    }
  }
    
 
?>
<form method="post" action="">
E-mail: <input type="text" name="email">

<input type="submit" name="submit" value="submit">  
</form>

</html>