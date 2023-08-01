<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  $number=(int) $_GET['n'];
  
  $query="SELECT * FROM questions WHERE question_number='$number'";
  
  $res1=mysqli_query($db1,$query);
  
  $question=mysqli_fetch_assoc($res1);
  
  $query="SELECT * FROM choices WHERE question_number='$number'";
  
  $choices=mysqli_query($db1,$query);
  
  $query="SELECT * from `questions`";
  $result=mysqli_query($db1,$query);
  $total=mysqli_num_rows($result);
  
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8" />
	 <title>Online Examination</title>
	 <link rel="stylesheet" type="text/css" href="style1.css">
   </head>
   
   <body style="background:url(paris.jpg)">
      <header>
	     <div class="container">
		    <h1>Online Examination</h1>
		 </div>
      </header>
	  <main>
	      <div class="container">
		     <div class="current">Question <?php echo "$number"; ?> of <?php echo "$total"; ?></div>
			 <p class="question">
			    <?php echo $question['text']; ?>
				<p>
				<form method="post" action="process.php">
				   <ul class="choices">
				     <?php while($row=mysqli_fetch_assoc($choices)): ?>
					       <li><input name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text']; ?></li>
					 <?php endwhile; ?>
					</ul>
					<input type="submit" value="submit"/>
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
			 </p>
		  </div>
	  </main>
	  <footer>
	    
	  </footer>
   </body>
</html>