
<!DOCTYPE html>
<html>
<head>
	<title>ToDo List </title>
   <link rel="stylesheet" type="text/css" href="style.css">
    

</head>
<body>
	<div class="heading">
        
    <?php 
if(isset($_GET['userAdded'])){
?>

<div id="h1">
  <h1>task added</h1>  
</div>

<?php
}
?>



		<h2 style="font-style: 'Hervetica';">ToDo List </h2>
	</div>
	<form method="post" action="register1.php" method="post" class="input_form">
		<input type="text" name="task" class="task_input" required>
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
</body>
</html>