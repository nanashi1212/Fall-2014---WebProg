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
        <h1>Tracker</h1>
        <p>The tracking technology provided by Fitness Tracker allows the user to input data and recieve relative feedback on how to live a healthier life.</p>
<div class="list-group">
  <a href="tracker-login.php" class="list-group-item list-group-item-success">
  	<h4 class="list-group-item-heading">Log in</h3></a>
  <a href="tracker-signup.php" class="list-group-item list-group-item-info">
  	<h4 class="list-group-item-heading">Sign up</h3></a>
  <a href="#" class="list-group-item list-group-item-warning" data-toggle="modal" data-target="#myModal">
	<h4 class="list-group-item-heading">Pop-up info</h3></a>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tracker and profile info</h4>
      </div>
      <div class="modal-body">
        (info about how account data is processed)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="panel panel-primary">
  <div class="panel-heading">Calorie counter</div>
  <div class="panel-body">
  	<div class="well">
    (description of tool aspect)
   </div>
  </div>
</div>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    
    <div class="item">
      <div class="panel panel-primary">
  <div class="panel-heading">Exersize analyzer</div>
  <div class="panel-body">
    (description of tool aspect)
  </div>
</div>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    
    <div class="item">
      <div class="panel panel-primary">
  <div class="panel-heading">Fitness feedback</div>
  <div class="panel-body">
    <div class="well">
    (description of tool aspect)
   </div>
  </div>
</div>
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


          








      <hr>

      <footer>
        <p>&copy; Christopher L. Inglese 2014</p>
      </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
