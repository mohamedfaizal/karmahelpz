<?php
	ob_start();
	session_start();
	if( isset($_SESSION['user'])!="" ){
		header("Location: home.php");
	}
	include_once 'dbconnect.php';

	$error = false;

	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		$phone = trim($_POST['phone']);
		$phone = strip_tags($phone);
		$phone = htmlspecialchars($phone);
		
        $blood = trim($_POST['blood']);
		$blood = strip_tags($blood);
		$blood = htmlspecialchars($blood);
		
        $age = trim($_POST['age']);
		$age = strip_tags($age);
		$age = htmlspecialchars($age);
				
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
			}
			
		//phone validation
        if (empty($phone)) {
			$error = true;
			$phoneError = "Please enter your full name.";
		} else if (strlen($phone) < 7) {
			$error = true;
			$phoneError = "Name must have atleat 8 numbers.";
			} else if (!preg_match("/^[1-9][0-9]*$/",$phone)) {
			$error = true;
			$phoneError = "Phone must contain numbers.";
		}
		if (empty($blood)) {
			$error = true;
			$bloodError = "Please enter your blood group.";
		} else if (strlen($blood) < 3) {
			$error = true;
			$bloodError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$blood)) {
			$error = true;
			$bloodError = "Blood group must contain alphabets and positive or negative.";
		}
		
		if (empty($age)) {
			$error = true;
			$ageError = "Please enter your age.";
		} else if (!preg_match("/^[1-9][0-9]*$/",$age)) {
			$error = true;
			$ageError = "Phone must contain numbers.";
		}
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO users(userName,userEmail,userPass,userPhone,userBlood,userAge) VALUES('$name','$email','$password','$phone','$blood','$age')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($pass);
				unset($phone);
				unset($blood);
				unset($age);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karma Helpz- Login & Registration System</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body background="back1.png">

<div class="container">

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
			<h1><center><b><font color="red">Only for Volunteers. </h1></font></center></b>
            	<h1><center><b><font color="red"><h2 class="">Sign Up Here As a Volunteer</h2></font></center></b>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<font color="red"><input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            <div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
			<input type="text" name="phone" class="form-control" placeholder="Enter 10 digit mobile number" maxlength="10" value="<?php echo $phone ?>" />
			</div>
			 <span class="text-danger"><?php echo $phoneError; ?></span>
            </div>
			
			<div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
            	<input type="text" name="blood" class="form-control" placeholder="Enter Bloodgroup(eg:A positive)" maxlength="50" value="<?php echo $blood ?>" />
                </div>
                <span class="text-danger"><?php echo $bloodError; ?></span>
            </div>
            <div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			<input type="text" name="age" class="form-control" placeholder="Enter Your age" maxlength="2" value="<?php echo $age ?>" />
			</div>
			 <span class="text-danger"><?php echo $ageError; ?></span>
            </div>
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<a href="login1.php"><h3><b><center><font color="midnihtblue">Sign in Here...</a></b></font></center></h3>
            </div>
			
			<div class="form-group">
            	<a href="index.php"><h3><b><center><font color="midnihtblue">Go Home</b></a></font></center></h3>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>

</body>
</html>
<?php ob_end_flush(); ?>