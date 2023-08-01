<?php include('server.php'); 
   if(empty($_SESSION['email_1'])){
	   header('location: login.php');
   }
?>
<!DOCTYPE html>
<!-- saved from url=(0059)http://getbootstrap.com/docs/4.0/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Online Examination</title>

    <!-- Bootstrap core CSS -->
    <link href="./onlineexam_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./onlineexam_files/starter-template.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body style="background:url(paris.jpg)">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
		  <?php if(isset($_SESSION['email_1'])): ?>
			 <li class="nav-item active">
            <a class="nav-link" href="index1.php">Go for the exam <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Log Out<span class="sr-only">(current)</span></a>
          </li>
	    <?php endif ?>
        </ul>
      </div>
    </nav>


      <div class="create">
	    <h2>Home Page</h2>
	  </div>
	  
	  <div class="create">
	    <?php if(isset($_SESSION['success'])): ?>
		      <div class="error success">
			     <h3>
				    <?php
					    echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				 </h3>
			  </div>
		<?php endif ?>
		
		<?php if(isset($_SESSION['email_1'])): ?>
		     <p>Welcome to Online Examination</p>
	    <?php endif ?>
	  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./onlineexam_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./onlineexam_files/popper.min.js.download"></script>
    <script src="./onlineexam_files/bootstrap.min.js.download"></script>
  

</body></html>