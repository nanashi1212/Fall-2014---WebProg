<!--
<div class="jumbotron">
	<div class="container">
		<h1>Fitness</h1>
		<p>
			(description of fitness)
		</p>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<img src="../content/images/anaerobic1.jpg" alt="weights" style="float:left">
			<h2>Anaerobics</h2>
			<p>
				(detailed description of anaerobics)
			</p>
			<p>
				<a class="btn btn-default" href="?action=anaerobics" role="button">View exercises &raquo;</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			<img src="../content/images/aerobic1.jpg" alt="running" style="float:left">
			<h2>Aerobics</h2>
			<p>
				(detailed description of aerobics)
			</p>
			<p>
				<a class="btn btn-default" href="?action=aerobics" role="button">View exercises &raquo;</a>
			</p>
		</div>
	</div>
-->
<div class="jumbotron">
	<div class="container">
		<h1 id="header">Fitness</h1>
		<p>
			Here you'll find all the most popular workout routines, from aerobics to anaerobics, there's
			nothing about exercising you wont find here.
		</p>
	</div>
</div>

<div class="container"  ng-app="fitnessApp" ng-controller="fitnessCtrl" ng-init="initData()">
  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2 class="media-heading">Anaerobics</h2>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
      	<!--anaerobics tab -->
        <div class="media">
	<a class="pull-left" href="?action=anaerobics"> 
	 <div class="img-container" ng-mouseleave="img1 = false" ng-mouseover="img1 = true">
		<h3 ng-if="img1" class="text"><br/><br/>Click to view!</h3>
		<img class="media-object image" ng-src="../content/images/anaerobic1.jpg" alt="fitness workout"
			ng-class="{'img-fade': img1, 'img-unfade': !img1}" class="image">
	 </div>
	</a>
   <div class="media-body">
	
	 <h4 class = "disTxt">Anaerobics are an important part of staying healthy, you don't have to be a body builder
	 		to gain some muscle. View this section if you're looking for a new workout that will help you gain muscle mass!
	 </h4>
	<p>
	 <a class="btn btn-default" href="?action=anaerobics" role="button">View exercises <span class="badge">2</span> &raquo;</a>
	</p>
   </div>
  </div>
  
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2 class="media-heading">Aerobics</h2>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      	
      <!-- paleo diet tab -->
	<div class="media">
    <a class="pull-left" href="?action=aerobics">
     <div class="img-container" ng-mouseleave="img2 = false" ng-mouseover="img2 = true">
    	<h3 ng-if="img2" class="text"><br/><br/>Click to view!</h3>
    	<img class="media-object" src="../content/images/aerobic1.jpg" alt="paleo food"
    	ng-class="{'img-fade': img2, 'img-unfade': !img2}" class="image"> 
     </div>
    </a>
   <div class="media-body">
	 <h4 class = "disTxt">Aerobics are the most easily neglected part of exercise, aerobics give you a better grasp on your
	 	over-all physical health. They help you maintain your shape, and provide you with the ability sustain through physical tasks. 
	 </h4>
	<p>
	 <a class="btn btn-default" href="?action=aerobics" role="button">View exercises <span class="badge">3</span> &raquo;</a>
	</p>
   </div>
  </div>

      </div>
    </div>
  </div>
</div>
  
  
  <style>
  .media-heading{
  	text-shadow: 0px 0px 6px rgba(28,11,11,0.6);
         }
  .disTxt{
  	background-color: #0B1C1C;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: rgba(255,255,255,0.5) 0px 3px 3px;
  }
  #header{
  	text-shadow: 0 1px 0 #ccc, 
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
  }
  
  .text{
   			height: 200px;
   	 		width: 200px;  
   	 		position: absolute; 
   	 		text-align: center;
   	 		color: #708090;
   	 		z-index: 1;
   	 		color: rgba(0,0,0,0.6);
			text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                 0px -5px 35px rgba(255,255,255,0.3);
   	 	}
   	 	
   	.image{
   		-webkit-transition-duration: 1s;
   		 transition-duration: 1s;
   	}
   	 	
   	.img-fade{
   		opacity: .4;
   	}
   	
   	.img-unfade{
   		opacity: 1;
	}
  
	 .text.ng-enter,.text.ng-leave,
   	 .text.ng-enter.ng-enter-active,
   	 .text.ng-leave.ng-leave-active
   	  {
  			-webkit-transition-duration: 1s;
  			transition-duration: 1s;
	  }
			
   	 .text.ng-enter {
   	 	opacity: 0;
   	 }
   	 .text.ng-enter.ng-enter-active {
   	 	opacity: 1;
   	 }
   	 .text.ng-leave {
   	 	opacity: 1;
   	 }
   	 .text.ng-leave.ng-leave-active {
   	 	opacity: 0;
   	 }
  
  </style>
  <script type="text/javascript">
   var fitnessApp = angular.module("fitnessApp", ['ngAnimate']);
   fitnessApp.controller("fitnessCtrl", function($scope){
   	function initData(){
   		$scope.img1 = false; $scope.img2 = false;
   	}
   });
  </script>
  
  
  
</div>