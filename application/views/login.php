<?php
session_start();
session_destroy();
	// if(isset($_SESSION['user'])){
	// 	header('location:list.php');
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vue.js Login with PHP/MySQLi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Vue.js Login with PHP/MySQLi</h1>
	<div id="login">
		<div class="col-md-4 col-md-offset-4">
 
			<div class="panel panel-primary">
			  	<div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Sign in</div>
			  	<div class="panel-body">
			    	<label>Username:</label>
			    	<input type="text" class="form-control" v-model="logDetails.username" v-on:keyup="keymonitor">
			    	<label>Password:</label>
			    	<input type="password" class="form-control" v-model="logDetails.password" v-on:keyup="keymonitor">
			  	</div>
			  	<div class="panel-footer">
			  		<button class="btn btn-primary btn-block" @click="checkLogin();"><span class="glyphicon glyphicon-log-in"></span> Login</button>
			  	</div>
			</div>
 
			<div class="alert alert-danger text-center" v-if="errorMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
			</div>
 
			<div class="alert alert-success text-center" v-if="successMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-check"></span> {{ successMessage }}
			</div>
 
		</div>
		
	</div>

	<div class="col-md-4 col-md-offset-4 small" id="skip-login">
			<p class="text-center"> <a href="/">Login as a guest<a> </p>
	</div>

</div>
<!-- PRODUCTION USE STABLE VUE.JS RELEASE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script src="javascript/login.js"></script>
</body>