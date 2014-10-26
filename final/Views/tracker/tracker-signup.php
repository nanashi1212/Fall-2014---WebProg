<div class="jumbotron">
	<div class="container">
		<h2>Sign up:</h2>

		<div class="alert alert-success" role="alert">
			Thank you for signing up!!!
		</div>

		<form  role="form" method="post" action="tracker.php?action=account-created">
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<div class="input-group input-group-lg">
							<span class="input-group-addon">Name: </span>
							<input type="text" placeholder="First name" class="form-control" name="first_name">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<div class="input-group">
							<span class="input-group-addon input-group-sm">Name: </span>
							<input type="text" placeholder="Last name" class="form-control" name="last_name">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<div class="input-group">
							<input type="text" placeholder="Email" class="form-control" name="email">
							<span class="input-group-addon">
								<input type="checkbox">
								Keep me updated </span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<input type="password" placeholder="Password" class="form-control" name="password">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<input type="password" placeholder="Re-enter password" class="form-control" name="password_reentered">
					</div>
				</div>
			</div>
			<p></p>
			<button type="submit" name="submit" class="btn btn-success" href="?action=tracker-signup">
				Create account
			</button>
		</form>
	</div>