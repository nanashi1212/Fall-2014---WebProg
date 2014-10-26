<div class="jumbotron">
	<div class="container">
		<h1>Tracker</h1>
		<p>
			Welcome to your personalized fitness tracker.
		</p>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2>Calorie counter</h2>
			<div class="form-group">
				<div class="row">
					<div class="col-md-10">
						<input type="text" placeholder="Meal name" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-10">
						<input type="text" placeholder="Estimated calories" class="form-control">
					</div>
				</div>
			</div>
			<!--not resizable/adjustable - fix later!!-->
			<div class="col-md-10" style="height:320px;width:320px;border:1px solid #ccc;overflow:scroll;">
				<ul>
					<li>
						day1
					</li>
					<ul>
						<li>
							meal1
						</li>
						<li>
							meal2
						</li>
						<li>
							meal3
						</li>
					</ul>
					<li>
						day2
					</li>
					<ul>
						<li>
							meal1
						</li>
						<li>
							meal2
						</li>
						<li>
							meal3
						</li>
					</ul>
				</ul>
			</div>
		</div>
		<div class="col-md-4">
			<h2>Exersize analyzer</h2>
			<div class="form-group">
				<div class="row">
					<div class="col-md-10">
						<input type="text" placeholder="Exersize title" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-10">
						<input type="text" placeholder="Reps/time achieved" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-10">
						<input type="text" placeholder="Reps/time goal" class="form-control">
					</div>
				</div>
			</div>
			<img src="../content/images/graph1.jpg" alt="Graph of improvements">

			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					<span class="sr-only">40% Complete (success)</span>
					Daily Reps Completed
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
					<span class="sr-only">20% Complete</span>
					Daily Calorie Intake
				</div>
			</div>

		</div>
		<div class="col-md-4">
			<h2>Fitness feedback</h2>
			<ul>
				<li>
					New recipe
				</li>
				<li>
					New Exersize
				</li>
				<li>
					'Try improving your current mile time with these exersizes: '
				</li>
			</ul>
		</div>
	</div>
</div>
