

<!DOCTYPE html>
<html lang="en" data-ng-app="dailyApp">
	<head>
				<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<link href="<?= base_url(); ?>css/app.css" rel="stylesheet" />
	</head>
<body data-ng-controller="DailyCtrl">
 <script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js" ></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>js/angular.min.js" ></script>
     <script src="<?php echo base_url(); ?>js/app.js" type="text/javascript"></script>

<div class=" container-fluid">
      <div class="page-content">
           <div class="row-fluid">


        <div class="page-header position-relative">

            <h4>Daily weather records </h4>
        </div><!--/.page-header-->

       
        <div class="span12">   
        	<div data-ng-controller="DailyCtrl">	
       
        <div style="text-align:center">
				<h4>Daily weather data</h4>
				
				<h4 data-ng-show="tasks.length == 0">no data yet!</h4>
			</div>
			
			<div class="col-md-12" data-ng-show="tasks.length > 0">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width:50px">#</th>
							<th>Max</th>
                                                        <th>Min</th>
                                                        <th>Actual rainfall</th>							
							<th style="width:80px; text-align:center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr data-ng-repeat="task in tasks track by $index">
							<td>{{ $index + 1 }}</td>
							<td><input class="todo" type="text" ng-model-options="{ updateOn: 'blur' }" ng-change="updateTask(tasks[$index])" ng-model="tasks[$index].max"></td>
							<td><input class="todo" type="text" ng-model-options="{ updateOn: 'blur' }" ng-change="updateTask(tasks[$index])" ng-model="tasks[$index].min"></td>
							<td><input class="todo" type="text" ng-model-options="{ updateOn: 'blur' }" ng-change="updateTask(tasks[$index])" ng-model="tasks[$index].actual"></td>							
                                                      <td style="text-align:center"><a class="btn btn-xs btn-default" ng-click="deleteTask(tasks[$index])"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					</tbody>
				</table>
			</div>
	
		<form style="form-inline" role="form" ng-submit="addTask()">
				<div class="form-group col-md-10">
					<input type="text" class="form-control" name="max" ng-model="max" placeholder="Max temperature" required>
				<input type="text" class="form-control" name="min" ng-model="min" placeholder="Min temperature" required>
			<input type="text" class="form-control" name="actual" ng-model="actual" placeholder="Actual rainfall" required>
			
                                
                                </div>
				<button type="submit" class="btn btn-default">Add task</button>
		</form>
       
         </div>

        </div>
 </div>
      </div>
     </div>
   
    
</body>