<?php require_once(APPPATH . 'views/header.php'); ?>


<div class="row-fluid">
     <div class="page-content"> 
    <h1>User logs</h1>
           <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th>User</th>
                                            <th>UserID</th>
                                            <th class="hidden-480">Action</th>
                                              <th class="hidden-480">Details</th>
                                            <th class="hidden-480">IP</th>
                                             <th class="hidden-480">Date</th>
                                           

                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
  <?php
                                        if (is_array($logs) && count($logs)) {
                                            foreach ($logs as $loop) {
                                                ?>  

                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                            <td>
                                                <a href="#"><?= $loop->user ?></a>
                                            </td>
                                            <td><?= $loop->userid ?></td>
                                            <td class="hidden-480"><?= $loop->action ?></td>
                                            <td class="hidden-phone"><?= $loop->details ?></td>

                                            <td class="hidden-480">
                                                <span class="label label-success"><?= $loop->ip ?></span>
                                            </td>
                                             <td class="hidden-480">
                                                <span class="label label-info"><?= $loop->date ?></span>
                                          

                                          <td> 
                                                       
                                                        <a href="<?php echo base_url() . "index.php/logs/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="icon-trash bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                  
                                        </tr>

                                        <?php }}?>

                                    </tbody>
                                </table>    

      

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->


<?php require_once(APPPATH . 'views/footer_report.php'); ?>
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