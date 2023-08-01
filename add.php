<?php include 'database.php'; ?>
<?php
  if(isset($_POST['submit'])){
	  $question_number=$_POST['question_number'];
	  $question_text=$_POST['question_text'];
	  $correct_choice=$_POST['correct_choice'];
	  //Choices
	  $choices=array();
	  $choices[1]=$_POST['choice1'];
	  $choices[2]=$_POST['choice2'];
	  $choices[3]=$_POST['choice3'];
	  $choices[4]=$_POST['choice4'];
	  
	  $query="INSERT INTO `questions`(question_number,text) VALUES('$question_number','$question_text')";
	  $insert_row=mysqli_query($db1,$query);
	  if($insert_row){
		  foreach($choices as $choice=>$value){
			  if($value!=''){
				  if($correct_choice==$choice){
					  $is_correct=1;
				  }
				  else{
					  $is_correct=0;
				  }
				  $query="INSERT INTO `choices`(question_number,is_correct,text)
				         VALUES('$question_number','$is_correct','$value')";
				  $insert_row=mysqli_query($db1,$query);
				  if($insert_row){
                      continue;
                  }				
                  else{
					  die('Error : ('.$mysqli_error.')');
                  }					  
			  }
		  }
		  $msg='Question has been added';
	  }
  }
  $query="SELECT * from `questions`";
  $result=mysqli_query($db1,$query);
  $total=mysqli_num_rows($result);
  $next=$total+1;
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8" />
	 <title>Online Examination</title>
	 <link rel="stylesheet" type="text/css" href="style2.css">
	  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
   
   <body style="background:url(paris.jpg)">
      <header>
	     <div class="container">
		    <h1>Online Examination</h1>
		 </div>
      </header>
	  <main>
	      <div class="container">
		  <nav class="navbar navbar-default">
		    <ul class="nav navbar-nav">`
		      <li><a href="adminpage.php">Users</a></li>
		      <li><a href="add.php">Make Questions</a></li>
		      <li><a href=".php">Delete Users</a></li>
			  <li><a href="admin.php">Log Out</a></li>
		    </ul>
		</nav>
		      <h2>Add A Question</h1>
			  <?php
			    if(isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
			  ?>
			  <form method="post" action="add.php">
			    <p>
				    <label>Question Number</label>
					<input type="number" value="<?php echo $next; ?>" name="question_number" />
				</p>
				<p>
				    <label>Question Text</label>
					<input type="text" name="question_text" />
				</p>
				<p>
				    <label>Option #1: </label>
					<input type="text" name="choice1" />
				</p>
				<p>
				    <label>Option #2: </label>
					<input type="text" name="choice2" />
				</p>
				<p>
				    <label>Option #3: </label>
					<input type="text" name="choice3" />
				</p>
				<p>
				    <label>Option #4: </label>
					<input type="text" name="choice4" />
				</p>
				<p>
				    <label>Correct Choice Number: </label>
					<input type="number" name="correct_choice" />
				</p>
				<p>
					<input type="submit" name="submit" value="Submit"/>
				</p>
		  </div>
	  </main>
	  <footer>
	    
	  </footer>
   </body>
</html>