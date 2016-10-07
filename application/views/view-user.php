<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />    

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />


<div class="row-fluid">
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
                                        <th>RESET PASSWORD</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (is_array($users) && count($users)) {
                                        foreach ($users as $loop) {

                                            $id = $loop->id;
                                            $name = $loop->name;
                                            $address = $loop->address;
                                            $email = $loop->email;
                                            $contact = $loop->contact;
                                            $role = $loop->role;
                                            $station = $loop->station;
                                            $contact2 = $loop->contact2;
                                            $created = $loop->created;
                                            ?>  


                                           <tr id="<?php echo $id; ?>" class="edit_tr">
                                                <td class="center">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
                                                <td class="edit_td">
                                                    <span id="email_<?php echo $id; ?>" class="text"><?php echo $email; ?></span>
                                                    <input type="text" value="<?php echo $email; ?>" class="editbox" id="email_input_<?php echo $id; ?>"
                                                </td>
                                                <td class="edit_td">
                                                    <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                                    <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                                </td>

                                                <td class="edit_td">
                                                    <span id="contact_<?php echo $id; ?>" class="text"><?php echo $contact; ?></span>
                                                    <input type="text" value="<?php echo $contact; ?>" class="editbox" id="contact_input_<?php echo $id; ?>"

                                                </td>
                                                <td class="edit_td">
                                                    <span id="contact2_<?php echo $id; ?>" class="text"><?php echo $contact2; ?></span>
                                                    <input type="text" value="<?php echo $contact2; ?>" class="editbox" id="contact2_input_<?php echo $id; ?>"

                                                </td>
                                                <td class="edit_td">
                                                    <span id="role_<?php echo $id; ?>" class="text"><?php echo $role; ?></span>
                                                    <input type="text" value="<?php echo $role; ?>" class="editbox" id="role_input_<?php echo $id; ?>"
                                                </td>
                                                <td class="edit_td">
                                                    <span id="station_<?php echo $id; ?>" class="text"><?php echo $station; ?></span>
                                                    <input type="text" value="<?php echo $station; ?>" class="editbox" id="station_input_<?php echo $id; ?>"
                                                </td>
                                                <td class="hidden-480">
                                                    <span class="label label-yellow"><?= $loop->create ?></span>
                                                </td>

                                                <td> 
                                                    
                                                    <a href="<?php echo base_url() . "index.php/user/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="icon-trash bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#"  value="<?php echo $loop->id; ?>"  id="myLink" onclick="NavigateToSite(this)" class="tooltip-error text-danger" data-rel="tooltip" title="reset">
                                                        <span class="red">
                                                            <i class="icon-lock bigger-120 text-danger"></i>
                                                            Reset
                                                        </span>
                                                    </a>
                                                </td>
                                                <td> 
                                                    <label class="pull-right inline">
                                                        <small class="muted"></small>
                                                        <input id="id-button-borders" checked="" type="checkbox" class="ace-switch ace-switch-5" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>    
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
    $("#name").blur(function (e) {

        var name = $("#name").val();

        if (name != null) {           // show loader 

            $('#Loading_name').show();
            $.post("<?php echo base_url() ?>index.php/user/check", {
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
    $("#email").blur(function (e) {

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
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#name" + ID).hide();
            $("#name_input_" + ID).show();

            $("#contact" + ID).hide();
            $("#contact_input_" + ID).show();

            $("#contact2" + ID).hide();
            $("#contact2_input_" + ID).show();

            $("#station" + ID).hide();
            $("#station_input_" + ID).show();

            $("#role" + ID).hide();
            $("#role_input_" + ID).show();

            $("#email" + ID).hide();
            $("#email_input_" + ID).show();

            $("#address" + ID).hide();
            $("#address_input_" + ID).show();


        }).change(function ()
        {
            var ID = $(this).attr('id');
            var name = $("#name_input_" + ID).val();
            var details = $("#details_input_" + ID).val();
            var contact = $("#contact_input_" + ID).val();
            var contact2 = $("#contact2_input_" + ID).val();
            var station = $("#station_input_" + ID).val();
            var role = $("#role_input_" + ID).val();
            var email = $("#email_input_" + ID).val();
            var address = $("#address_input_" + ID).val();



            var dataString = 'id=' + ID + '&name=' + name + '&address=' + address + '&details=' + details + '&contact=' + contact + '&email=' + email + '&contact2=' + contact2 + '&role=' + role + '&station=' + station;
            $("#name_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#contact2_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#station_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#role_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#details_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#email_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#address_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            if (name.length > 0)
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/user/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#name_" + ID).html(name);
                        $("#details_" + ID).html(details);
                        $("#contact_" + ID).html(contact);
                        $("#contact2_" + ID).html(contact2);
                        $("#station_" + ID).html(station);
                        $("#role_" + ID).html(role);
                        $("#email_" + ID).html(email);
                        $("#address_" + ID).html(address);
                    }
                });
            } else
            {
                alert('Enter something.');
            }

        });

        // Edit input box click action
        $(".editbox").mouseup(function ()
        {
            return false
        });

        // Outside click action
        $(document).mouseup(function ()
        {
            $(".editbox").hide();
            $(".text").show();
        });

        $('#loading').hide();
        $("#email2").blur(function () {

            var user = $(this).val();
            if (user != null) {

                $('#loading').show();
                $.post("<?php echo base_url() ?>index.php/organisation/exists", {
                    user: $(this).val()
                }, function (response) {
                    // alert(response);
                    $('#loading').hide();
                    setTimeout(finishAjax('loading', escape(response)), 400);
                });
            }
            function finishAjax(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }


        });

    });
</script>
<script>

    function NavigateToSite(ele) {
        var selectedVal = $(ele).attr("value");
        //var selectedVal = document.getElementById("myLink").getAttribute('value');
        //href= "index.php/patient/add_user/'
        $.post("<?php echo base_url() ?>index.php/user/reset", {
            id: selectedVal
        }, function (response) {
            alert(response);
        });

    }

</script>