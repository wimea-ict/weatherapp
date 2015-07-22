<?php require_once(APPPATH . 'views/header.php'); ?>



<div class="main-container container-fluid">





    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                <i class="icon-edit icon-2x green"></i>
                FORMS AND ELEMENTS OBSERVED
                <small>
                    <i class="icon-double-angle-right"></i>

                </small>
            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                        
                              

                             
                                    <div class="span4">	 
                                        <label for="form-field-select-1">Select element</label>

                                            <select id="form-field-select-1" >
                                                <option value="AK" />Rainfall
                                                <option value="AL" />Wind
                                            </select>

                                            <label for="form-field-select-1">Units of measurement</label>

                                            <select id="form-field-select-1">
                                                <option value="AK" />Inches
                                                <option value="AL" />mm
                                            </select>


                                            <label for="form-field-select-1">Period</label>

                                            <select id="form-field-select-1" >
                                                <option value="AK" />Daily
                                                <option value="AL" />Monthly
                                            </select>
                                    </div>
                                            <div class="span6">	
                                                  <label for="form-field-select-1">Statistical values</label>
                                                    <div class="table-header">
                                                   
                                                </div>

                                                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="center">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </th>
                                                            <th>AVERAGE</th>
                                                            <th>YEAR</th>
                                                            <th class="hidden-480">MAX.FALL</th>

                                                            <th class="hidden-phone">
                                                                <i class="icon-time bigger-110 hidden-phone"></i>
                                                                DATE(S)
                                                            </th>
                                                         

                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="center">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>

                                                            <td>
                                                                <a href="#"></a>
                                                            </td>
                                                            <td></td>
                                                            <td class="hidden-480"></td>
                                                            <td class="hidden-phone"></td>


                                                            <td class="td-actions">
                                                                <div class="hidden-phone visible-desktop action-buttons">
                                                                    <a class="blue" href="#">
                                                                        <i class="icon-zoom-in bigger-130"></i>
                                                                    </a>

                                                                    <a class="green" href="#">
                                                                        <i class="icon-pencil bigger-130"></i>
                                                                    </a>

                                                                    <a class="red" href="#">
                                                                        <i class="icon-trash bigger-130"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="hidden-desktop visible-phone">
                                                                    <div class="inline position-relative">
                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                            <li>
                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                    <span class="blue">
                                                                                        <i class="icon-zoom-in bigger-120"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                    <span class="green">
                                                                                        <i class="icon-edit bigger-120"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                    <span class="red">
                                                                                        <i class="icon-trash bigger-120"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                  

                                                    </tbody>
                                                </table>
                                           </div>                                            
                                        
                                        <div class="span12">       
                                            <h4> Enter daily totals to the specific date of  measurement</h4>
                                        <div class="space"></div>
                                        <div id="calendar"></div>                                    
                                        <label for="form-field-select-1">Observer</label>
                                        <select id="form-field-select-1" class="input-small">
                                            <option value="AK" />Dennis
                                            <option value="AL" />Walter
                                        </select><div>
                              
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


