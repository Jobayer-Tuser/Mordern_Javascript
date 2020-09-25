<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie-edge" />
	
	<title>Js Sandbox Project</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="main" class="col s12 m6">
			  	<div class="card">
					<div class="card-content white-text">
				 	 	<span class="card-title">Task 1</span>
					  		<div class="row">
					  			<form id="task-form">
									<div class="input-field col s12">
										<input value="Alvin" id="first_name2" type="text" class="validate">
										<label class="active" for="first_name2">First Name</label>
									</div>
									<input type="submit" class="btn" value="Add Task" />
									<!--<button class="btn waves-effect waves-light" type="submit" name="action">Add Task</button>-->
								</form>
					  		</div>
					</div>
					
					<div class="card-action">
						
						<h4 id="task-title" class="task-name">Task</h4>
						<ul class="collection with-header">
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
							<li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="fas fa-times"></i></a></div></li>
						</ul>
						<a class="btn black clear-task"> Clear Task</a>
						<!--<button class="btn waves-effect waves-light" type="submit" name="action">Delete Task</button>-->
					</div>
			  	</div>
			</div>
			
			<!--<input type="date" id="theDate" />-->
			<input type="text" id="datepicker" />
			<script>$(function() {
			   $( "#datepicker" ).datepicker();
			});
			</script>
			
	    </div>
		
		
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="app.js"></script>
	
</body>


</html>
