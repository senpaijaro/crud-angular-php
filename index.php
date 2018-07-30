<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	</head>
</head>
<body >
	<div class="container" style="margin-top: 50px;"  ng-app="myApp" ng-controller="myController">
		<p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		  Add User
		</button>
		</p>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Firstname</th>
		      <th scope="col">Middlename</th>
		      <th scope="col">Lastname</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr ng-repeat="row in listUser">
		  		<td> {{ row.firstName}} </td>
		  		<td> {{ row.middleName}} </td>
		  		<td> {{ row.lastName }} </td>
		  		<td>
		  			<button type="button" class="btn btn-primary btn-xs" ng-click="editUser(row.tid)" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-pencil"></i></button>
		  			<button type="button" class="btn btn-danger btn-xs" ng-click="deleteUser(row.tid)"><i class="glyphicon glyphicon-trash"></i></button>
		  		</td>
		  	</tr>
		  </tbody>
		</table>
	<?php include 'form-modal.php'; ?>
	</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script type="text/javascript" src="public/functions.js"></script>

</html>