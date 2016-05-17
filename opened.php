<!DOCTYPE html>
<html lang="en">
<head>
  <title>OakWood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/pure.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OakWood</a>
    </div>
    <div> 
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Logs</a></li>
        <li><a href="http://www.github.com/csherman42">My Github</a></li>
		<li id="log"><form action="gets.php">
			<input type="text" name="fname" placeholder="username">
			<input type="password" name="lname"placeholder="password"><br>
			<input id="sub"type="submit" value="Submit">
			<label for="sub"> remember </label>
		</form> </li>
		
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
  <ol>
	<div class="linkBar">
		<u><p style="text-align : center;">Opened Link</p></u>
		<div class="actualLink">
			<?php echo $_GET['data']; ?>
			
			
		</div> 
	</div>
	
</body>
</html>
