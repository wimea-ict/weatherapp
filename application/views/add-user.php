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
    <div class="widget-body" style="padding: 3%;">
        <h4> Enter user details to below: </h4>
        <form id="user-form" name="user-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/user/save'  method="post">            

            <fieldset>
                <label>

                    <span class="block input-icon input-icon-right">
                        <input type="email" name="email" id="email" class="span12" placeholder="Email" />
                        <span id="Loading_email" name ="Loading_email"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Loading" /></span>
                    </span>
                </label>

                <label>
                    <span class="block input-icon input-icon-right">
                        <input type="text" name="name" id="name" class="span12" placeholder="name" />
                        <span id="Loading_name" name ="Loading_name"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Loading" /></span>

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
                        <label>Select a user role</label>
                        <select id="role" name="role">
                            <option value="" />
                            <option value="Administrator" />Station Administrator(O/C)
                             <option value="Observer" />Observer
                              <option value="Data" />Data Clerk
                        </select></span>

                    <span class="block input-icon input-icon-right">
                        <label> Select the station if it applies  </label> 
                        <select id="station" name="station">
                            <option value="" />
                            <?php
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?>                        
                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>

                                    <?php
                                }
                            }
                            ?>
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

    </div>	



    <!--PAGE CONTENT ENDS-->
</div><!--/.span-->


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
            $.post("<?php echo base_url() ?>index.php/user/check_email", {
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