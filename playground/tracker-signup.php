<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fitiness Tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
     <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Home</a>
      <a class="navbar-brand" href="nutrition.php">Nutrition</a>
      <a class="navbar-brand" href="fitness.php">Fitness</a>
      <a class="navbar-brand" href="tracker.php">Tracker</a>
      <a class="navbar-brand" href="about-us.php">About Us</a>
     </div>
    </div>
   </div>
  <div class="jumbotron">
   <div class="container">
   	<h2>Sign up:</h2>
   	
   	<div class="alert alert-success" role="alert">Thank you for signing up!!!</div>
   	
     <form  role="form">
      <div class="form-group">
       <div class="row">
     	<div class="col-md-4">
     	<div class="input-group input-group-lg">
 		 <span class="input-group-addon">Name: </span>
         <input type="text" placeholder="First name" class="form-control">
       </div>
        </div>
       </div>
      </div>
      <div class="form-group">
       <div class="row">
     	<div class="col-md-4">
     	 <div class="input-group">
 		 <span class="input-group-addon input-group-sm">Name: </span>
         <input type="text" placeholder="Last name" class="form-control">
         </div>
        </div>
       </div>
      </div>
      <div class="form-group">
       <div class="row">
     	<div class="col-md-4">
     		<div class="input-group">
     			<div class="input-group-btn">
     		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">@Email</a></li>
          <li><a href="#">@Yahoo</a></li>
          <li><a href="#">@Gmail</a></li>
          <li class="divider"></li>
          <li><a href="#">@other [this is not very practical]</a></li>
        </ul>
      </div>
         <input type="text" placeholder="Email" class="form-control">
         <span class="input-group-addon">
        <input type="checkbox"> Keep me updated
      </span>
      </div>
        </div>
       </div>
      </div>
      <div class="form-group">
       <div class="row">
     	<div class="col-md-4">
         <input type="password" placeholder="Password" class="form-control">
        </div>
       </div>
      </div>
      <div class="form-group">
       <div class="row">
     	<div class="col-md-4">
         <input type="password" placeholder="Re-enter password" class="form-control">
        </div>
       </div>
      </div>
     <p></p><button type="submit" class="btn btn-success">Create account</button>
   </form>
  </div>
  <hr>

  <footer>
   <p style="font-size: 14px">&copy; Christopher L. Inglese 2014</p>
  </footer>
  </div>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>