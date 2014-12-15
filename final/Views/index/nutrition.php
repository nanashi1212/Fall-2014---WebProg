<div class="jumbotron">
	<div class="container">
		<h1 id="header">Nutrition</h1>
		<p>
			All the most popular diets summarized, and full of all the recipes you could ever hope for! 
			Here you'll choose one of our three recipe-packed, delicious, and very nutritious diets.
		</p>
	</div>
</div>

<div class="container"  ng-app="dietApp" ng-controller="dietCtrl" ng-init="initData()">
  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2 class="media-heading">The Atkins Diet</h2>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      	
      	<!--atkins diet tab -->
        <div class="media">
	<a class="pull-left" href="?action=atkins"> 
	 <div class="img-container" ng-mouseleave="img1 = false" ng-mouseover="img1 = true">
		<h3 ng-if="img1" class="text"><br/><br/>Click to view!</h3>
		<img class="media-object image" ng-src="../content/images/atkins1.jpg" alt="atkins food"
			ng-class="{'img-fade': img1, 'img-unfade': !img1}" class="image">
	 </div>
	</a>
   <div class="media-body">
	
	 <h4 class = "disTxt">The Atkins diet involves limited consumption of carbohydrates to switch the body's metabolism from metabolizing glucose 
		 as energy over to converting stored body fat to energy. Overall, this diet may not be the best for 'buffing up', but
	 	 it will definitly knock out those extra pounds.
	 </h4>
	<p>
	 <a class="btn btn-default" href="?action=atkins" role="button">View recipes <span class="badge">8</span> &raquo;</a>
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
          <h2 class="media-heading">The Paleo Diet</h2>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      	
      <!-- paleo diet tab -->
	<div class="media">
    <a class="pull-left" href="?action=paleo">
     <div class="img-container" ng-mouseleave="img2 = false" ng-mouseover="img2 = true">
    	<h3 ng-if="img2" class="text"><br/><br/>Click to view!</h3>
    	<img class="media-object" src="../content/images/paleo1.jpg" alt="paleo food"
    	ng-class="{'img-fade': img2, 'img-unfade': !img2}" class="image"> 
     </div>
    </a>
   <div class="media-body">
	 <h4 class = "disTxt">More protein and meat: Meat, seafood, and other animal products represent the staple foods of modern-day Paleo
	 	 diets, since advocates claim protein comprises 19-35% of the calories in hunter-gatherer diets--In short, this diet will be sure to get
	 	 you the muscle protien you need.
	 </h4>
	<p>
	 <a class="btn btn-default" href="?action=paleo" role="button">View recipes <span class="badge">3</span> &raquo;</a>
	</p>
   </div>
  </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h2 class="media-heading">The Mediterranean Diet</h2>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      	
      	<!-- mediterranean diet tab -->
        <div class="media">
    <a class="pull-left" href="?action=mediterranean"> 
     <div class="img-container" ng-mouseleave="img3 = false" ng-mouseover="img3 = true">
     	<h3 ng-if="img3" class="text"><br/><br/>Click to view!</h3>
    	<img class="media-object" src="../content/images/mediterranean1.jpg" alt="mediterranean food"
    	ng-class="{'img-fade': img3, 'img-unfade': !img3}" class="image"> 
     </div>
   	</a>
   <div class="media-body">
	 <h4 class="disTxt">The principal aspects of this diet include high consumption of olive oil, legumes, fruits,
	 vegetables, fish, and a moderate consumption of dairy products. This diet is great for balancing a healthy lifestyle with
	 the taste you'll crave.
	 </h5>
	<p>
	 <a class="btn btn-default" href="?action=mediterranean" role="button">View recipes <span class="badge">4</span> &raquo;</a>
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
   var dietApp = angular.module("dietApp", ['ngAnimate']);
   dietApp.controller("dietCtrl", function($scope){
   	function initData(){
   		$scope.img1 = false; $scope.img2 = false;
   		$scope.img3 = false;
   	}
   });
  </script>
  
  
  
</div>