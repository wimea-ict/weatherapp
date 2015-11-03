<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />


<div class="row-fluid">
      Currently only 3 roles are defined Manager,Observer,Data and O/C.please assign roles accordingly
                 
    <?php
                                    if (is_array($userID) && count($userID))
                                        {
                                        foreach ($userID as $user) {
                                            ?>   
    
                         <div class="widget-body" style="padding: 3%;">
                                            <h4> Enter user details to below: </h4>
                                    <form id="user-form" name="user-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/User/update'  method="post">            

                                            <fieldset>
                                    <label>

                                                    <span class="block input-icon input-icon-right">
                                                         <input type="hidden" name="userID" id="userID" class="span12" value="<?= $user->id ?>" />
                                                        <input type="email" name="email" id="email" class="span12" value="<?= $user->email ?>" />
                                                      <span id="Loading_email" name ="Loading_email"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>
                                                  
                                                    </span>
                                                </label>

                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="name" id="name" class="span12"value="<?= $user->name ?>" />
                                                        <span id="Loading_name" name ="Loading_name"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>
                                                               
                                                    </span>
                                                </label>
                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="contact" id="contact" class="span12" value="<?= $user->contact ?>" />
                                                       
                                                    </span>
                                                     <span class="block input-icon input-icon-right">
                                                         <input type="text" id="contact2" name="contact2" class="span12" value="<?= $user->contact2 ?>" />
                                                       
                                                    </span>
                                                </label>

                                                <label>
                                                    Please input a password only if you want to change the previous password**
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password" id="password" class="span12" placeholder="Password" />
                                                       
                                                    </span>
                                                </label>

                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password2" id="password2" class="span12" placeholder="Repeat password" />
                                                    
                                                    </span>
                                                </label>
                                                 <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <select id="role" name="role">
                                                             <option value="<?=$user->role?>" /><?=$user->role?>
                                                            <?php
                                        if (is_array($roles) && count($roles)) {
                                            foreach ($roles as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select></span>
                                                     
                                                      <span class="block input-icon input-icon-right">
                                                        <select id="station" name="station">
                                                              <option value="<?=$user->station?>" /><?=$user->station?>
                                                            <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select></span>
                                                     
                                                </label>
                                                <div class="clearfix">
                                                   

                                                    <button class="width-10 btn btn-small btn-success"  >
                                                 Update

                                                    </button>
                                                </div>
                                            </fieldset>
                                            </form>
                               
                    </div>
    
    
    
    <?php }
} 
else { ?>
           <div id="accordion2" class="accordion">
                        <div class="accordion-group">
                                <div class="accordion-heading">
                                       
                                </div>

                        <div class="accordion-body collapse" id="collapseOne">
                                <div class="accordion-inner">
                                           <div class="widget-body" style="padding: 3%;">
                                            <h4> Enter user details to below: </h4>
                                    <form id="user-form" name="user-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/User/save'  method="post">            

                                            <fieldset>
                                    <label>

                                                    <span class="block input-icon input-icon-right">
                                                        <input type="email" name="email" id="email" class="span12" placeholder="Email" />
                                                      <span id="Loading_email" name ="Loading_email"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>
                                                  
                                                    </span>
                                                </label>

                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="name" id="name" class="span12" placeholder="name" />
                                                        <span id="Loading_name" name ="Loading_name"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>
                                                               
                                                    </span>
                                                </label>
                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="contact" id="contact" class="span12" placeholder="Contact" />
                                                       
                                                    </span>
                                                     <span class="block input-icon input-icon-right">
                                                         <input type="text" id="contact2" name="contact2" class="span12" placeholder="Contact 2" />
                                                       
                                                    </span>
                                                </label>

                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password" id="password" class="span12" placeholder="Password" />
                                                       
                                                    </span>
                                                </label>

                                                <label>
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password2" id="password2" class="span12" placeholder="Repeat password" />
                                                    
                                                    </span>
                                                </label>
                                                 <label>
                                                    <span class="block input-icon input-icon-right">
                                                        Select the user role
                                                        <select id="role" name="role">
                                                            <?php
                                        if (is_array($roles) && count($roles)) {
                                            foreach ($roles as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select></span>
                                                     
                                                        <span class="block input-icon input-icon-right">
                                                            Select the station if it applies   <select id="station" name="station">
                                                            <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select></span>
                                                </label>
                                                <div class="clearfix">
                                                    <button type="reset" class="width-10 pull-right btn btn-small btn-success" >
                                                        <i class="icon-refresh"></i>
                                                        Reset
                                                    </button>

                                                    <button class="width-10 btn btn-small"  >
                                                     Submit

                                                    </button>
                                                </div>
                                            </fieldset>
                                            </form>
                               
                    </div>	</div>
											</div>
										</div>

									</div>
    <?php } ?>
    
    
         <div class="span12">
               <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                       <span class="arrowed-in-right"></span> <button  class="width-10 pull-left btn  btn-yellow">   ADD USER   </button>
                                        </a><a href="" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed float-right">
                       <span class="arrowed-in-right "></span> <button  class="width-10 pull-left btn float-right  btn-success">          DELETE SELECTED      </button>     </a>
                
            <div class="span12">
                
                         
                   
                <div class="widget-box">
                    <div class="widget-body">
                        <div class="widget-main padding-8">
                            <div class="row-fluid">
                                <table id="datatable" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th class="hidden-480">Contact</th>
                                              <th class="hidden-480"></th>
                                            <th class="hidden-480">Role</th>
                                             <th class="hidden-480">Station</th>
                                            <th class="hidden-phone">                                              
                                               Last Updated
                                            </th>
                                            <th class="hidden-480">Active</th>

                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
  <?php
                                        if (is_array($users) && count($users)) {
                                            foreach ($users as $loop) {
                                                ?>  

                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                            <td>
                                                <a href="#"><?= $loop->name ?></a>
                                            </td>
                                            <td><?= $loop->email ?></td>
                                            <td class="hidden-480"><?= $loop->contact ?></td>
                                            <td class="hidden-phone"><?= $loop->contact2 ?></td>

                                            <td class="hidden-480">
                                                <span class="label label-success"><?= $loop->role ?></span>
                                            </td>
                                             <td class="hidden-480">
                                                <span class="label label-info"><?= $loop->station ?></span>
                                            </td>
                                               <td class="hidden-480">
                                                <span class="label label-yellow"><?= $loop->create ?></span>
                                            </td>

                                          <td> 
                                                        <a href="<?php echo base_url() . "index.php/User/edit/" . $loop->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="icon-edit bigger-120"></i>
                                                            </span>
                                                        </a>
                                                        <a href="<?php echo base_url() . "index.php/User/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="icon-trash bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </td>

                                                    <td>  <label class="pull-right inline">
                                                            <small class="muted"></small>
                                                            <input id="id-button-borders" checked="" type="checkbox" class="ace-switch ace-switch-5" />
                                                            <span class="lbl"></span>
                                                        </label></td>
                                        </tr>

                                        <?php }}?>

                                    </tbody>
                                </table>    
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--/span-->
         </div>

      

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_report.php'); ?>
<script src='<?= base_url(); ?>js/jquery.dataTables.min.js'></script>

<script src="<?= base_url(); ?>js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
   $("#datatable").dataTable();

});
</script>

<script type="text/javascript">
    $('#Loading_name').hide();
    $("#name").blur (function (e) {

        var name = $("#name").val();

        if (name != null) {           // show loader 
         
            $('#Loading_name').show();
            $.post("<?php echo base_url() ?>index.php/User/check", {
                name: name
            }, function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_name').hide();
                setTimeout(finishAjax('Loading_name', escape(response)), 400);
            });
        }
        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    }

    );
 $('#Loading_email').hide();
    $("#email").blur (function (e) {

        var email = $("#email").val();

        if (email != null) {           // show loader 
         
            $('#Loading_email').show();
            $.post("<?php echo base_url() ?>index.php/User/check_email", {
                email: email
            }, function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_email').hide();
                setTimeout(finishAjax('Loading_email', escape(response)), 400);
            });
        }
        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    }

    );
</script>