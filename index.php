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
        <li><a href="opened.php">About</a></li>
        <li><a href="#">Logs</a></li>
        <li><a href="www.github.com/csherman42">My Github</a></li>
		<li id="log"><form action="demo_form.asp">
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
	<li><div class="linkBar">
		<div class="actualLink">
			<a class="dj" href="opened.php?data=<?php echo $_POST['txtarea'];?>"id="one"><?php echo $_POST["titleInput"]; ?><br>
	

		
 </a>
		
		</div> 
	</div></li>
	<li> <div class="linkBar">
		<div class="actualLink">
		  <p> </p>
		</div>
	</div> </li>
	
	<li> <div class="linkBar">
		<div class="actualLink">
		  <p> </p>
		</div>
	</div> </li>
	
	<li> <div class="linkBar">
		<div class="actualLink">
		  <p> </p>
		</div>
		
	</div> </li><li> <div class="linkBar">
		<div class="actualLink">
		  <p> </p>
		</div>
	</div> </li>
	</ol>
  </div>

  <div class="row">
    <div class="col-md-3">
		
		<form action="submit.php">
			<button type="submit" class="pure-button"> submit a link </button>
		</form>
    </div>
    <div class="col-md-3"> 
      <p>Help</p>
    </div>
    <div class="col-md-3"> 
     <p>  </p>
	 </div>
    <div class="col-md-3">
      
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>
	<script>
		function what() {
			console.log("test");
			document.getElementById("one").innerHTML =  document.getElementById("inp").value;
		}
	</script>
</body>
</html>
