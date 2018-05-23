<!DOCTYPE html>
<html>
<head>
	<title>Sportzer</title>
	<link rel="stylesheet" type="text/css" href="css/material-design-icons.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
	<div class="mytwowrapper">
		<div class="row">
			<div class="col s6">
				<div style="width:100%; background: rgba(0,0,0,0.2); height: 90vh; padding: 45px;">
					<img style="width: 80%;" src="images/sportzer_cropped_white.png"><br>
					<p style="color: white; font-weight: 500; text-align: justify;">
						Sportzer aims to solve the problem which Organizer usually encountered during creating an event. Sportzer is a system which is used in the economy specifically in the Sports Area industry that connects organizers to participants online and gives them a satisfying service upon entering a certain sports event. 
					</p>
				</div>
			</div>
			<div class="col s6">
					<!--regcontainer-->

		<div class="regtwocontainer">
			<h3>Join us!</h3>
			<form method="POST">
			<div class="row">
				<div class="input-field col s6">
				<input placeholder="John" id="first_name" type="text" class="validate">
				<label for="first">First Name</label>
				</div>
				<div class="input-field col s6">
				<input placeholder="Doe" id="last_name" type="text" class="validate">
				<label for="last_name">Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input placeholder="January 01, 2018" id="bdate" type="text" class="datepicker">
					<label for="bdate">Birthdate</label>
				</div>
				<div class="input-field col s6">
					<input placeholder="+639123465789" id="pnumber" type="number" class="validate">
					<label for="pnumber">Phone Number</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="Jordan Creek Parkwa, Des Moines, Iowa" id="address" type="text" class="validate">
					<label for="address">Address</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="sample@example.com" id="email" type="email" class="validate">
					<label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="*******" id="password" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="*******" id="password" type="password" class="validate">
					<label for="password">Verify Password</label>
				</div>
			</div>
				<div class="gendercont">
					<label>Gender</label><br>

					<p>
					    <label>
					      <input class="with-gap" name="gender" id="male" type="radio" value="male" checked />
					      <span>Male</span>
					    </label>&nbsp;&nbsp;&nbsp;&nbsp;
					    <label>
					      <input class="with-gap" name="gender" id="female" type="radio" value="female" checked />
					      <span>Female</span>
					    </label>
					  </p>
				</div>
			
					<!-- //<label>Gender</label> -->
				<input name="register" type="submit" value="Register" class="waves-effect btn btn-primary"/>
			</form>
		</div>

					<!--end regcontainer-->
			</div>
		</div>
	</div>
</div>
	<script>
  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
	</script>
</body>
</html>