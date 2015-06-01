<?php require_once(APPPATH . 'views/header.php'); ?>



	<div class="main-container container-fluid">
			
		

			

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
                                                     <i class="icon-calendar icon-2x green"></i>
							Monthly Weather and instrument Schedules
							<small>
								<i class="icon-double-angle-right"></i>
								
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<div class="row-fluid">
								<div class="span9">
									<div class="space"></div>

									<div id="calendar"></div>
								</div>

								<div class="span3">
									<div class="widget-box transparent">
										<div class="widget-header">
											<h4>Draggable events</h4>
										</div>

										<div class="widget-main">
											<div id="external-events">
												<div class="external-event label-grey" data-class="label-grey">
													<i class="icon-move"></i>
													My Event 1
												</div>

												<div class="external-event label-success" data-class="label-success">
													<i class="icon-move"></i>
													My Event 2
												</div>

												<div class="external-event label-important" data-class="label-important">
													<i class="icon-move"></i>
													My Event 3
												</div>

												<div class="external-event label-purple" data-class="label-purple">
													<i class="icon-move"></i>
													My Event 4
												</div>

												<div class="external-event label-yellow" data-class="label-yellow">
													<i class="icon-move"></i>
													My Event 5
												</div>

												<div class="external-event label-pink" data-class="label-pink">
													<i class="icon-move"></i>
													My Event 6
												</div>

												<div class="external-event label-info" data-class="label-info">
													<i class="icon-move"></i>
													My Event 7
												</div>

												<label>
													<input type="checkbox" class="ace-checkbox" id="drop-remove" />
													<span class="lbl"> Remove after drop</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

	
			
		</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_calendar.php'); ?>


	