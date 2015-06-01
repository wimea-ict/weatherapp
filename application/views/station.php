<?php require_once(APPPATH . 'views/header.php'); ?>




<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box transparent" id="recent-box">
                    <div class="widget-header">
                        <h4 class="lighter smaller">
                            <i class="icon-home icon-2x green"></i>
                            Stations
                        </h4>

                        <div class="widget-toolbar no-border">
                            <ul class="nav nav-tabs" id="recent-tab">
                                <li class="active">
                                    <a data-toggle="tab" href="#task-tab">New station</a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#member-tab">All stations</a>
                                </li>

                               
                            </ul>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-4">
                            <div class="tab-content padding-8 overflow-visible">
                                <div id="task-tab" class="tab-pane active">


                                    <div id="signup-box" class="signup-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <div class="span6"><div class="well well-large">                                  <label for="form-field-select-1">Registration number</label>
 <input type="text" class="span12" placeholder="REG.Number" />
                                                        
                                                    <label for="form-field-select-1">Station name</label>
 <input type="text" class="span12" placeholder="Station name" />
                                                        
                                                     <div class="form-group">
                            <label> Location </label>
                            <div id="locationField">
                                <input id="autocomplete" name="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                            </div>
                            <br>  

                        </div>
                        <div class="form-group">

                            <label> Country </label>
                            <input class="form-control"  id="country" name="country" disabled="true"></input>
                        </div>

                        <div class="form-group">

                            <label> Region/State </label>
                            <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" disabled="true"></input>   <br>

                        </div>

                        <div class="form-group">

                            <label> City </label>        
                            <input class="form-control" id="locality" name="locality"  disabled="true"></input>
                        </div><br>
                         </label>
                          <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Latitude" />
                                                          
                                                        </span>
                                                    </label>
                          <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Longitude" />
                                                            
                                                        </span>
                                                    </label>
                          <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Altitude" />
                                                           
                                                        </span>
                                                    </label>
</div></div>
                                                 <div class="span6"><div class="well well-large">
                       

                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="year opened" />
                                                            
                                                        </span>
                                                    </label>
                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Year closed" />
                                                            
                                                        </span>
                                                    </label>
                                                   <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Year re-opened" />
                                                            
                                                        </span>
                                                    </label>
                                                       <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Status" />
                                                           
                                                        </span>
                                                    </label>
                          <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" placeholder="Type" />
                                                            
                                                        </span>
                                                     
                                                     
                                                      <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-small">
                                                            <i class="icon-refresh"></i>
                                                            Clear
                                                        </button>

                                                        <button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
                                                           Submit

                                                        </button>
                                                    </div>
                                                     
                                                     </div></div>
                                                
                                             
                                             
                                                <fieldset>
                    

                                                   
                                                   




                                                   
                                                </fieldset>
                                                </form>
                                            </div>


                                        </div><!--/widget-body-->
                                    </div><!--/signup-box-->
                                </div>

                                <div id="member-tab" class="tab-pane">
                                    <div class="clearfix">
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Domain</th>
                                                    <th>Price</th>
                                                    <th class="hidden-480">Clicks</th>

                                                    <th class="hidden-phone">
                                                        <i class="icon-time bigger-110 hidden-phone"></i>
                                                        Update
                                                    </th>
                                                    <th class="hidden-480">Status</th>

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
                                                        <a href="#">view.com</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td class="hidden-480">4,100</td>
                                                    <td class="hidden-phone">Mar 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success">Registered</span>
                                                    </td>

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

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">nice.com</a>
                                                    </td>
                                                    <td>$38</td>
                                                    <td class="hidden-480">3,940</td>
                                                    <td class="hidden-phone">Feb 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

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

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">fine.com</a>
                                                    </td>
                                                    <td>$25</td>
                                                    <td class="hidden-480">2,983</td>
                                                    <td class="hidden-phone">Apr 01</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-warning">Expiring</span>
                                                    </td>

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

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">good.com</a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td class="hidden-480">6,500</td>
                                                    <td class="hidden-phone">Feb 02</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-inverse arrowed-in">Flagged</span>
                                                    </td>

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

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">great.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td class="hidden-480">6,400</td>
                                                    <td class="hidden-phone">Feb 24</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success">Registered</span>
                                                    </td>

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

                                    <div class="center">
                                        <i class="icon-group icon-2x green"></i>

                                        &nbsp;
                                        <a href="#">
                                            See all members &nbsp;
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>

                                    <div class="hr hr-double hr8"></div>
                                </div><!--member-tab-->

                                <div id="comment-tab" class="tab-pane">
                                    <div class="comments">
                                        <div class="well well-large">
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <h4 class="header green lighter bigger">

                                                        New user Role
                                                    </h4>

                                                    <fieldset>


                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" class="span12" placeholder="Role" />
                                                                <i class="icon-user"></i>
                                                            </span>
                                                        </label>
                                                        <h4 class="header green lighter bigger">

                                                            Please select the user privileges
                                                        </h4>
                                                        <div class="span5">
                                                            <label>
                                                                <input name="form-field-checkbox" class="ace-checkbox-2" type="checkbox" />
                                                                <span class="lbl"> Create</span>
                                                            </label>

                                                            <label>
                                                                <input name="form-field-checkbox" class="ace-checkbox-2" type="checkbox" />
                                                                <span class="lbl"> Edit</span>
                                                            </label>
                                                        </div>
                                                        <div class="span5">

                                                            <label>
                                                                <input name="form-field-checkbox" class="ace-checkbox-2" type="checkbox" />
                                                                <span class="lbl"> Read</span>
                                                            </label>
                                                            <label>
                                                                <input name="form-field-checkbox" class="ace-checkbox-2" type="checkbox" />
                                                                <span class="lbl">Update</span>
                                                            </label>


                                                        </div>


                                                        <div class="space-24"></div>

                                                        <div class="span5">

                                                            <button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
                                                                Submit

                                                            </button>
                                                        </div>
                                                    </fieldset>
                                                    </form>
                                                </div>


                                            </div><!--/widget-body-->
                                        </div><!--/signup-box-->
                                    </div>

                                    <div class="hr hr8"></div>

                                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </th>
                                                <th>Role name</th>
                                                <th>Create</th>
                                                <th>Read</th>
                                                <th class="hidden-480">Update</th>

                                                <th class="hidden-phone">
                                                    <i class="icon-action"></i>
                                                    Delete
                                                </th>
                                                <th class="hidden-480">Action</th>
                                                <th class="hidden-480">Status</th>

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
                                                    <a href="#">Administrator</a>
                                                </td>
                                                <td>True</td>
                                                <td class="hidden-480">True</td>
                                                <td class="hidden-phone">True</td>
                                                <td class="hidden-480">
                                                    False
                                                </td>


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
                                                <td >

                                                    <label class="pull-right inline">
                                                        <small class="muted"></small>
                                                        <input id="id-button-borders" checked="" type="checkbox" class="ace-switch ace-switch-5" />
                                                        <span class="lbl"></span>
                                                    </label>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="center">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td>
                                                    <a href="#">Administrator</a>
                                                </td>
                                                <td>True</td>
                                                <td class="hidden-480">True</td>
                                                <td class="hidden-phone">True</td>
                                                <td class="hidden-480">
                                                    False
                                                </td>


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
                                                <td >

                                                    <label class="pull-right inline">
                                                        <small class="muted"></small>
                                                        <input id="id-button-borders" checked="" type="checkbox" class="ace-switch ace-switch-5" />
                                                        <span class="lbl"></span>
                                                    </label>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td>
                                                    <a href="#">Administrator</a>
                                                </td>
                                                <td>True</td>
                                                <td class="hidden-480">True</td>
                                                <td class="hidden-phone">True</td>
                                                <td class="hidden-480">
                                                    False
                                                </td>


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
                                                <td >

                                                    <label class="pull-right inline">
                                                        <small class="muted"></small>
                                                        <input id="id-button-borders" checked="" type="checkbox" class="ace-switch ace-switch-5" />
                                                        <span class="lbl"></span>
                                                    </label>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="center">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td>
                                                    <a href="#">Administrator</a>
                                                </td>
                                                <td>True</td>
                                                <td class="hidden-480">True</td>
                                                <td class="hidden-phone">True</td>
                                                <td class="hidden-480">
                                                    False
                                                </td>


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
                                                <td >

                                                    <label class="pull-right inline">
                                                        <small class="muted"></small>
                                                        <input id="id-button-borders" checked="" type="checkbox" class="ace-switch ace-switch-5" />
                                                        <span class="lbl"></span>
                                                    </label>

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>   

                                    <div class="hr hr-double hr8"></div>
                                </div>
                            </div>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->
                </div><!--/widget-box-->
            </div><!--/span-->

        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
        
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name'
       
    };

    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            fillInAddress();
        });
    }

// [START region_fillform]
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
// [END region_geolocation]

</script>

