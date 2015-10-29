var dailyApp = angular.module('dailyApp', []);
 
dailyApp.controller('DailyCtrl', function ($scope, $http) {
 
    $http.get('../api/tasks').success(function(data){
        $scope.tasks = data;    
    }).error(function(data){
        $scope.tasks = data;
    });
 
    $scope.refresh = function(){
        $http.get('../api/tasks').success(function(data){
            $scope.tasks = data;
        }).error(function(data){
            $scope.tasks = data;
        });
    }
 
    $scope.addTask = function(){
        var newTask = {max: $scope.max,min:$scope.min,actual:$scope.actual};
        $http.post('api/tasks', newTask).success(function(data){
            $scope.refresh();
            $scope.max = '';
             $scope.min = '';
              $scope.actual = '';
        }).error(function(data){
            alert(data.error);
        });
    }
 
    $scope.deleteTask = function(daily){
        $http.delete('tasks/' + daily.id);
        $scope.tasks.splice($scope.tasks.indexOf(daily),1);
    }
 
    $scope.updateTask = function(daily){
        $http.put('tasks', daily).error(function(data){
            alert(data.error);
        });
        $scope.refresh();
    }
 
});

