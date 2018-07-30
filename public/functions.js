var apiUrl = 'functions/server.php'
var config = {headers : {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'}}
var app = angular.module('myApp', []);
app.controller('myController', function($scope, $http) {

    $scope.getUser = function (){
    	var data = $.param({action: 'show'})
        $http.post(apiUrl, data, config).then(
            function(response){ 
            	$scope.listUser = response.data.results
            	$scope.firstName = ""
            	$scope.middleName = ""
            	$scope.lastName = ""
            },
            function(response){
                console.log(angular.toJson(response))
            }
        );
    }

    $scope.addUser = function (){
    	var data = $.param({
    		action: 'save',
    		firstName: $scope.firstName,
    		middleName: $scope.middleName,
    		lastName: $scope.lastName
    	})
        $http.post(apiUrl, data, config).then(
            function(response){ 
            	var status = response.data.status
            	if(status == ""){
            		alert('Successfully insert')
            	}else{
            		alert("failed")
            	}
            	$scope.getUser()
            },
            function(response){
                console.log(angular.toJson(response))
            }
        );
    }

    $scope.deleteUser = function (id){
    	var data = $.param({
    		action: 'delete',
    		id: id
    	})
        $http.post(apiUrl, data, config).then(
            function(response){ 
            	var status = response.data.status
            	if(status == ""){
            		alert('Successfully delete')
            	}else{
            		alert("failed")
            	}
            	$scope.getUser()
            },
            function(response){
                console.log(angular.toJson(response))
            }
        );
    }

    $scope.editUser = function (id){
    	var data = $.param({
    		action: 'edit',
    		id: id
    	})
        $http.post(apiUrl, data, config).then(
            function(response){ 
            	var row = response.data.results
            	console.log(row)
            	$scope.efirstName  = row[0].firstName 
            	$scope.emiddleName = row[0].middleName
            	$scope.elastName   = row[0].lastName
            	$scope.eid   	   = row[0].tid
            	
            },
            function(response){
                console.log(angular.toJson(response))
            }
        );
    }

    $scope.updateUser = function (){
    	var data = $.param({
    		action: 'update',
    		firstName: $scope.efirstName,
    		middleName: $scope.emiddleName,
    		lastName: $scope.elastName,
    		id: $scope.eid
    	})
        $http.post(apiUrl, data, config).then(
            function(response){ 
            	var status = response.data.status
            	if(status == ""){
            		alert('Successfully updated')
            	}else{
            		alert("failed")
            	}
            	$scope.getUser()
            },
            function(response){
                console.log(angular.toJson(response))
            }
        );
    }

    $scope.getUser()
});
