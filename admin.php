<?php include('server1.php') ?>
<!DOCTYPE html>
 <html>
    <head>
	  <title>Online Exam</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
    
	<body style="background:url(paris.jpg)">
	  <div class="header">
	    <h1>Admin Login</h1>
	  </div>
	  
	  <form method="post" action="admin.php">
	     <?php include('errors1.php'); ?>
		 <div class="input-group">
			<input type="text" name="username" placeholder="Username">
		 </div>
		 <div class="input-group">
			<input type="text" name="password" placeholder="Password">
		 </div>
		 <div class="input-group">
		    <button type="submit" name="login" class="btn">Login</button>
		 </div>
	</body>
 <html>