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
		
		
		
		
		$phone = trim($_POST['phone']);
		$phone = strip_tags($phone);
		$phone = htmlspecialchars($phone);
		
		$problem = trim($_POST['problem']);
		$problem = strip_tags($problem);
		$problem = htmlspecialchars($problem);
		
		$money = trim($_POST['money']);
		$money = strip_tags($money);
		$money = htmlspecialchars($money);
		
		
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
		
		
		//phone validation
        if (empty($phone)) {
			$error = true;
			$phoneError = "Please enter your phone number.";
		} else if (strlen($phone) < 7) {
			$error = true;
			$phoneError = "Name must have atleat 8 numbers.";
			} else if (!preg_match("/^[1-9][0-9]*$/",$phone)) {
			$error = true;
			$phoneError = "Phone must contain numbers.";
		}
		if (empty($problem)) {
			$error = true;
			$bloodError = "Please enter your full problem.";
		} else if (strlen($problem) < 3) {
			$error = true;
			$problemError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$problem)) {
			$error = true;
			$problemError = "Name must contain alphabets and space.";
		}
		
			// basic name validation
			 if (empty($money)) {
			$error = true;
			$money = "Please enter the amount.";
		} else if (!preg_match("/^[1-9][0-9]*$/",$money)) {
			$error = true;
			$moneyError = "Amount must contain numbers.";
		}
	
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO getmoney(userName,userPhone,userProblem,userMoney) VALUES('$name','$phone','$problem','$money')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($phone);
				unset($problem);
				unset($money);
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
<title>Medical Help</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body background="black1.jpg">

<div class="container">

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
			<h1><b><center><font color="white">Seek Money for Medical Emergency </center></font></h1></b>
            	<h4><font color="white">Enter your details accurately to get faster response.</font></h3>
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
            	<input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            
            
           
            <div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
			<input type="text" name="phone" class="form-control" placeholder="Enter Your mobile number" maxlength="10" value="<?php echo $phone ?>" />
			</div>
                <span class="text-danger"><?php echo $phoneError; ?></span>
            </div>
			<div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-plus"></span></span>
            	<input type="text" name="problem" class="form-control" placeholder="Enter Your Medical problem" maxlength="50" value="<?php echo $problem ?>" />
                </div>
                <span class="text-danger"><?php echo $problemError; ?></span>
            </div>
			<div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
            	<input type="text" name="money" class="form-control" placeholder="Enter the amount" maxlength="7" value="<?php echo $money ?>" />
                </div>
                <span class="text-danger"><?php echo $moneyError; ?></span>
            </div>
            <div class="form-group">
            	<hr />
            </div>
			
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Submit</button>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<a href="index.php">Go back</a>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>

</body>
</html>
<?php ob_end_flush(); ?>