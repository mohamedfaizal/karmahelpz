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
		
		$blood = trim($_POST['blood']);
		$blood = strip_tags($blood);
		$blood = htmlspecialchars($blood);
		
		
		
		$phone = trim($_POST['phone']);
		$phone = strip_tags($phone);
		$phone = htmlspecialchars($phone);
		
		$area = trim($_POST['area']);
		$area = strip_tags($area);
		$area = htmlspecialchars($area);
		
		
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
		
		if (empty($blood)) {
			$error = true;
			$bloodError = "Please enter your full name.";
		} else if (strlen($blood) < 3) {
			$error = true;
			$bloodError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$blood)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
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
			// basic name validation
		if (empty($area)) {
			$error = true;
			$areaError = "Please enter your full name.";
		} else if (strlen($area) < 3) {
			$error = true;
			$areaError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$area)) {
			$error = true;
			$areaError = "Name must contain alphabets and space.";
		}
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO bloodbank(userName,userBlood,userPhone,userArea) VALUES('$name','$blood','$phone','$area')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($blood);
				unset($phone);
				unset($area);
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
<title>Blood Bank</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body background ="backb.jpg">

<div class="container">

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
			<h1><center><b><font color="white">Seek Blood from our Blood Bank </h1>
            	<h4><font color="white">Enter your details accurately to get faster response</h4>
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
                <span class="input-group-addon"><span class="glyphicon glyphicon-tint"></span></span>
            	<input type="text" name="blood" class="form-control" placeholder="Enter Your Blood Group" maxlength="40" value="<?php echo $blood ?>" />
                </div>
                <span class="text-danger"><?php echo $bloodError; ?></span>
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
                <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
            	<input type="text" name="area" class="form-control" placeholder="Enter Area" maxlength="50" value="<?php echo $area ?>" />
                </div>
                <span class="text-danger"><?php echo $areaError; ?></span>
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