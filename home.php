<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome- <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assetsknow/ico/favicon.ico">

    <title>Know Your Area</title>

    <!-- Bootstrap core CSS -->
    <link href="assetsknow/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assetsknow/css/style.css" rel="stylesheet">
    <link href="assetsknow/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Home</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Edit your page">Karma Helps</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="governmenthelp.php">Seek Government Help</a></li>
            <li><a href="http://localhost/karmahelpz/phpbb/adm/index.php">Forum</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out:before"></span><h2>Sign Out</h2></a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

 <div id="wrapper">
  <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<center><h1><font color="red">Welcome Volunteers</h1></font><div></center>
			</div><! --/row -->
	    </div> <!-- /container -->
	<! --/headerwrap -->
	

 <div class="container">
     
				
     <div class="page-header">
     <h3><font color=red></h3></font>
     </color></div>
	 
        
        <div class="row">
        <div class="col-lg-12">
       <h3><font color ="blue"> Hey volunteers here comes your benefits by registering yourselves as a Volunteer.<font color =red></h4></font><br>
        
   
    </div>
    
    </div>
	<div id ="useit" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="volunteer1.jpeg" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h2 class="section-heading"><font color="blue">THE FOUR BENEFITS....</h2></font>
					<div class="sub-title lead3">
                    <p class="lead">
					
					<h3><font color="green">Benefit 1: Volunteering connects you to others</h3><br></font>
        <h3><font color="green">Benefit 2: Volunteering is good for your mind and body</h3><br>
		 <h3><font color="green">Benefit 3 :Volunteering can advance your career</h3><br>
		 <h3><font color="green">Benefit 4: Volunteering brings fun and fulfillment to your life</h3><br></div>	
					</p>

					 
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>
	
    
    </div>
	
	<br>
	<br>
	<div id ="useit" class="content-section-a">

        <div class="container">
			
            <div class="row">
			<br>
			
				<div class="col-sm-6 pull-left wow fadeInRightBig">
                    <img class="img-responsive " src="volunteer2.jpg" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading"><font color="blue">Getting the best out of Volunteering</h3></font>
					<div class="sub-title lead3">.
                    <p class="lead">
					<ul style="list-style-type:disc">
					<li><h4><font color="red">Ask questions. </font><font color="green">You want to make sure that the experience is right for your skills, your goals, and the time you want to spend.</h3>

<li><h4><font color="red">Make sure you know what’s expected.</font><font color="green"> You should be comfortable with the organization and understand the time commitment.</h3>

<li><h4><font color="red">Don’t be afraid to make a change. </font><font color="green">Don’t force yourself into a bad fit or feel compelled to stick with a volunteer role you dislike.</h3> 
<li><h4><font color="red">If volunteering overseas, choose carefully. </font><font color="green">Some volunteer programs abroad can cause more harm than good if they take much-needed paying jobs away from local workers. </h3>

<li><h4><font color="red">Enjoy yourself. </font><font color="green">The best volunteer experiences benefit both the volunteer and the organization. If you’re not enjoying yourself, ask yourself why.</h3>
						
					</ul></p>

					  
					
				</div>   
            </div>
        </div>
		
        <!-- /.container -->
    </div>
	<br>
	<br>
	<br>
	<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/DuD8Rd61q18?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>
    </div>
	</div>
	<br>
	<br>
	<br>
	<div>
	           <center><h1> View the forum</h1></center>
	<center><a class="btn btn-embossed btn-info" href="http://localhost/karmahelpz/phpbb/adm/index.php" role="button"><h1>FORUM</h1></a></p></forum>
	<center><h3><font color="red">KARMA will help you.</center></font></h3>
	<br>
	<br>
	<div id="social">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-googleplaystore"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social -->
	<script src="assets/jquery-1.11.3-jquery.min.js"></script>
	
    <script src="assets/js/bootstrap.min.js"></script>

    
</body>
</html>
<?php ob_end_flush(); ?>