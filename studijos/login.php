<html>
    
<head>
    
<meta charset="utf-8">
<title>EPK Prisijungimas</title>

<link rel="stylesheet" href="css/style.css" id="bootstrap-css"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
    
<?php

require('database.php');
session_start();

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($connection,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($connection,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE name='$username'
and password='".md5($password)."'";
	$result = mysqli_query($connection,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	$error = 'Incorrect details!'; }
    }
?>


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>EPK Prisijungimas</h1><br>
                                        
                                       
                                        
                                       
                                        <?php if (isset($error))  { ?>
                                        <small style="color:#aa0000;"><?php echo $error ?></small>
                                        <br>
                                         <br>
                                         <?php } ?>
                                         <form action="login.php"  method="POST">
					<input type="text" name="username" placeholder="Username" required>
					<input type="password" name="password" placeholder="Password" required>
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  
				</div>
			</div>
		  </div>
          
    </body>
</html>