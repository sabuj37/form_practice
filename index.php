<!DOCTYPE html>
<html>
<head>
	<title>New project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<?php 

	// declare variable

	$name ="";
	$number ="";
	$email ="";
	$password ="";
if ($_SERVER["REQUEST_METHOD"] =="POST") {
		$name = $_POST["name"];
		$number = $_POST["number"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
}
	
	?>
    	<div class="container mt-5 bg-success">
    		<div class="row">
    		<div class="col-6">
             <form action="" method="post">
    	     <p>
    		<input type="text" name="name" placeholder="Enter your user name" required="">
    	    </p>
    	    <p>
    		<input type="number" name="number" placeholder="Enter your mobile No">
    	    </p>
    	   <p>
    		<input type="email" name="email" placeholder="Enter your Email Adders" required="">
    	   </p>
    	   <p>
    		<input type="password" name="password" placeholder="Enter your password" required="">
    	   </p>
    	<input type="submit" name="submit" value="submit">
    </form>
    </div>
	    <div class="col-6">
	    	<img src="1.jpg">
	    </div>

   </div>
    <?php echo "Our output is here";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
     ?>
    </div>
   

   </body>
   </html>