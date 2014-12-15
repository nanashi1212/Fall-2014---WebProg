<div class="jumbotron">
	<div class="container">
		<h1>Mediterranean Recipes</h1>
		<p>
			All the recipes you could ever ask for, right at the click of a mouse.
		</p>
	</div>
</div>

<div class="container" ng-app="mediGallery" ng-controller="mediCtrl">
 <div class="row" ng-init="initData">
 		
     <div class="col-xs-6 col-md-4">
       <div class="img-container" ng-mouseleave="img1 = false" ng-mouseover="img1 = true">
      	<h3  ng-if="img1" class="text">Mixed cheeses &amp; Fruit
      		 <br/> <br/><div class="detText">Cheese, fruit, what else could you ask for</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3>
       	<img src="../content/images/medi_food_fixed/1.jpg" alt="..." 
       		ng-class="{'img-fade': img1, 'img-unfade': !img1}" class="image">	
       </div>
     </div> 
	
    <div class="col-xs-6 col-md-4">
     <div class="img-container" ng-mouseleave="img2 = false" ng-mouseover="img2 = true">
      	<h3 ng-if="img2" class="text">Scallops
      		 <br/> <br/><div class="detText">Moist and delicious, scallops--only for desert!</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/2.jpg" alt="..."
      		ng-class="{'img-fade': img2, 'img-unfade': !img2}" class="image">
     </div>
    </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img3 = false" ng-mouseover="img3 = true">
     	<h3 ng-if="img3" class="text">Nuts &amp; Jam
      		 <br/> <br/><div class="detText">An odd idea, but a good one</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/3.jpg" alt="..."
      		ng-class="{'img-fade': img3, 'img-unfade': !img3}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img4 = false" ng-mouseover="img4 = true">
     	<h3 ng-if="img4" class="text">Low-fat Ice Cream
      		 <br/> <br/><div class="detText">A sweet treat</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/4.jpg" alt="..."
      		ng-class="{'img-fade': img4, 'img-unfade': !img4}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img5 = false" ng-mouseover="img5 = true">
     	<h3 ng-if="img5" class="text">Potato Wedges
      		 <br/> <br/><div class="detText">Sweet, sweet potato wedges</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/5.jpg" alt="..."
      		ng-class="{'img-fade': img5, 'img-unfade': !img5}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img6 = false" ng-mouseover="img6 = true">
     	<h3 ng-if="img6" class="text">Light egg &amp; cheese sandwitch
      		 <br/> <br/><div class="detText">Sandwitches, as always, are a fantastic meal</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/6.jpg" alt="..."
      		ng-class="{'img-fade': img6, 'img-unfade': !img6}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img7 = false" ng-mouseover="img7 = true">
     	<h3 ng-if="img7" class="text">Roasted Turkey
      		 <br/> <br/><div class="detText">Giving you the protien you need</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/7.jpg" alt="..."
      		ng-class="{'img-fade': img7, 'img-unfade': !img7}" class="image">
    </div>
   </div>
  
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img8 = false" ng-mouseover="img8 = true">
     	<h3 ng-if="img8" class="text">Sushi Roll
      		 <br/> <br/><div class="detText">Add vegitables and sauce for extra flavor</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/8.jpg" alt="..."
      		ng-class="{'img-fade': img8, 'img-unfade': !img8}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img9 = false" ng-mouseover="img9 = true">
     	<h3 ng-if="img9" class="text">Steak
      		 <br/> <br/><div class="detText">Nothing beats a delicious hunk of steak</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/9.jpg" alt="..."
      		ng-class="{'img-fade': img9, 'img-unfade': !img9}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img10 = false" ng-mouseover="img10 = true">
     	<h3 ng-if="img10" class="text">Fruits Bowl
      		 <br/> <br/><div class="detText">A delicious bowl of fruit</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/10.jpg" alt="..."
      		ng-class="{'img-fade': img10, 'img-unfade': !img10}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img11 = false" ng-mouseover="img11 = true">
     	<h3 ng-if="img11" class="text">Fresh Trout
      		 <br/> <br/><div class="detText">Moist, and always fresh, it's trout</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/11.jpg" alt="..."
      		ng-class="{'img-fade': img11, 'img-unfade': !img11}" class="image">
    </div>
   </div>
   
   <div class="col-xs-6 col-md-4">
    <div class="img-container" ng-mouseleave="img12 = false" ng-mouseover="img12 = true">
     	<h3 ng-if="img12" class="text">Fishsticks
      		 <br/> <br/><div class="detText">Tangy, tasty, homemade fishsticks</div>
      		 <br/> <br/> <br/> <br/> <div class="subText">Click to add!</div>
      	</h3> 
      	<img src="../content/images/medi_food_fixed/12.jpg" alt="..."
      		ng-class="{'img-fade': img12, 'img-unfade': !img12}" class="image">
    </div>
   </div>
   
   
   
   <style type="text/css">
	.img-container{
		height: 250px;
		width: 350px;
	}
	.subText{
		font-size: 14px;
	}
	.detText{
		font-size: 18px;
	}
	.text{
   			height: 250px;
   	 		width: 350px;  
   	 		position: absolute; 
   	 		text-align: center;
   	 		color: #708090;
   	 		z-index: 1;
   	 	}
   	 	
   	.image{
   		-webkit-transition-duration: 1s;
   		 transition-duration: 1s;
   	}
   	 	
   	.img-fade{
   		opacity: .3;
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
   var atkinsApp = angular.module("mediGallery", ['ngAnimate']);
   atkinsApp.controller("mediCtrl", function($scope){
   		function initData(){
   			$scope.img1 = false; $scope.img2 = false;
   			$scope.img3 = false; $scope.img4 = false;
   			$scope.img5 = false; $scope.img6 = false;
   			$scope.img7 = false; $scope.img8 = false;
			$scope.img9 = false; $scope.img10 = false;
   			$scope.img11 = false; $scope.img12 = false;
   			//$scope.alert("Test in angular");
   		}
	});		
   
   /*
    $(document).load(function(){
    	$("a > p").hide();
    	$scope.alert("Test in angular");
    });
   	$(document).ready(function(){
   		$(".picDiv").mouseenter(function(){
   			alert("You entered an image!");
   			$("img").fadeTo("fast",0.4);
   			$(".imgTxt").fadeIn("fast");
   		});
    });
   	*/
   </script>
   
 </div>
</div>