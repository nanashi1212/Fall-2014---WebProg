<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fitiness Tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
  
<div class="btn-group container-fluid">
  <a type="button" class="btn btn-default" href="index.php">home</a>
  <a type="button" class="btn btn-default" href="nutrition.php">nutrition</a>
  <a type="button" class="btn btn-default" href="fitness.php">fitness</a>
  <a type="button" class="btn btn-default" href="tracker.php">tracker</a>
  <a type="button" class="btn btn-default" href="about-us.php">about-us</a>
</div>




    <div class="jumbotron">
      <div class="container">
        <h1> <span class="glyphicon glyphicon-tree-conifer"></span> Fitness Tracker <span class="glyphicon glyphicon-tree-conifer"></span> <small> Welcome to: </small><span class="label label-info">My site!</span></h1>
        <p>Welcome to the world of calorie countin' and fitness trackin'. Around this site you'll find diets and recipies for staying in shape, as well as plenty of workout routines for toning that body. </p>
 
   
	  <div class="dropdown">
  <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Teeny-tiny Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="1" href="index.php">ind</a></li>
    <li role="presentation"><a role="menuitem" tabindex="2" href="nutrition.php">nut</a></li>
    <li role="presentation"><a role="menuitem" tabindex="3" href="fitness.php">fit</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="4" href="#">Separated link</a></li>
  </ul>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-danger" data-toggle="popover" title="Engaging title" data-content="This site has a lot of misused components"> pop-up data </button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">test1</a></li>
    <li><a href="#">test2</a></li>
    <li><a href="#">test3</a></li>
    <li class="divider"></li>
    <li><a href="#">test-seperate</a></li>
  </ul>
</div>


      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Nutrition</h2>
          <p>Every good body needs good nutrition, with the right diet anyone can achieve their dream physique. This section provides detailed recipies, and dietary guidelines for which the recipies correspond to. </p>
          <p><a class="btn btn-default" href="nutrition.php" id="cocl" role="button" data-toggle="tooltip" data-placement="right" title="nutrition is really important!">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Fitness</h2>
          <p> A well kempt body needs more than just good nutrition--it needs exercise. A truly toned body will shine when it's given a propper workout. This section offers a variety of different exercise routines for different kinds of people. </p>
          <p><a class="btn btn-default" href="fitness.php" role="button" data-toggle="tooltip" data-placement="right" title="fitness is important too!">View details &raquo;</a></p>
       </div>
       <div class="col-md-4">
          <h2>Tracker</h2>
          <p>Every good trainer needs a good training tool: Fitness Tracker is equipted with it's own unique tracking tool for monitering and adjusting your personal workout regimen.</p>
          <p><a class="btn btn-default" href="tracker.php" role="button" data-toggle="tooltip" data-placement="right" title="this tracker is cool!">View details &raquo;</a></p>
       </div>
      </div>
      <div class="row">
       <div class="col-md-4">
          <h2>About Us</h2>
          <p>Fitness Tracker is a website hosted by SUNY New Paltz, and created by Christopher L. Inglese. This site was designed and created with the intent of providing struggling individuals a place to properly learn how to get in shape.</p>
          <p><a class="btn btn-default" href="about-us.php" role="button">View details &raquo;</a></p>
       </div>
      </div>
      
      <hr>

      <footer>
        <p>&copy; Christopher L. Inglese 2014</p>
      </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">$("[data-toggle=tooltip]").tooltip();</script>
    <script type="text/javascript">$("[data-toggle=popover]").popover();</script>
  </body>
</html>
