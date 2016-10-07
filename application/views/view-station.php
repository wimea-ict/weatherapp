<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />




<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <div class="row-fluid">
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label>
                                    <input type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Number</th>
                            <th>Name</th>
                            <th class="hidden-480">Location</th>
                            <th class="hidden-phone">
                                <i class="icon-time bigger-110 hidden-phone"></i>
                                Code(CCCC)
                            </th>
                            <th class="hidden-480">Latitude</th>
                            <th>Longitude</th>
                            <th>Altitude</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Submitted on</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (is_array($stations) && count($stations)) {
                            foreach ($stations as $loop) {

                                $id = $loop->id;
                                $name = $loop->name;
                                $code = $loop->code;                               
                                $location = $loop->location;
                                $lat = $loop->latitude;
                                $lng = $loop->longitude;
                                $alt = $loop->altitude;
                                $type = $loop->type;
                                ?> 
                                <tr id="<?php echo $id; ?>" class="edit_tr">
                                    <td class="center">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="#"><?= $loop->number ?></a>
                                    </td>
                                    <td class="edit_td">
                                        <span id="name_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
                                        <input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>"
                                    </td>
                                    <td class="edit_td">
                                        <span id="location_<?php echo $id; ?>" class="text"><?php echo $location; ?></span>
                                        <input type="text" value="<?php echo $location; ?>" class="editbox" id="location_input_<?php echo $id; ?>"
                                    </td>
                                    <td class="edit_td">
                                        <span id="code_<?php echo $id; ?>" class="text"><?php echo $code; ?></span>
                                        <input type="text" value="<?php echo $code; ?>" class="editbox" id="code_input_<?php echo $id; ?>"
                                    </td>
                                    <td class="edit_td">
                                        <span id="lat_<?php echo $id; ?>" class="text"><?php echo $lat; ?></span>
                                        <input type="text" value="<?php echo $lat; ?>" class="editbox" id="lat_input_<?php echo $id; ?>"
                                    </td>
                                    <td class="edit_td">
                                        <span id="lng_<?php echo $id; ?>" class="text"><?php echo $lng; ?></span>
                                        <input type="text" value="<?php echo $lng; ?>" class="editbox" id="lng_input_<?php echo $id; ?>"
                                    </td>
                                     <td class="edit_td">
                                        <span id="alt_<?php echo $id; ?>" class="text"><?php echo $alt; ?></span>
                                        <input type="text" value="<?php echo $alt; ?>" class="editbox" id="alt_input_<?php echo $id; ?>"
                                    </td>
                                    <td class="edit_td">
                                        <span id="type_<?php echo $id; ?>" class="text"><?php echo $type; ?></span>
                                        <input type="text" value="<?php echo $type; ?>" class="editbox" id="type_input_<?php echo $id; ?>"
                                    </td>
                                    <td><?= $loop->status ?></td>
                                    <td><?= $loop->created ?></td>

                                    <td class="td-actions">
        <!--                                        <a href="<?php echo base_url() . "index.php/lat/edit/" . $loop->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                            <span class="blue">
                                                <i class="icon-edit bigger-120"></i>
                                            </span>
                                        </a>-->
                                        <a href="<?php echo base_url() . "index.php/lat/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                            <span class="red">
                                                <i class="icon-trash bigger-120"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>      
            </div>

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
// This example displays an type form, using the autocomplete feature
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
        // When the user selects an type from the dropdown,
        // populate the type fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            fillIntype();
        });
    }

// [START region_fillform]
    function fillIntype() {
        // Get the place code from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the type from the place code
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.type_components.length; i++) {
            var typeType = place.type_components[i].types[0];
            if (componentForm[typeType]) {
                var val = place.type_components[i][componentForm[typeType]];
                document.getElementById(typeType).value = val;
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
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#name" + ID).hide();
            $("#name_input_" + ID).show();

            $("#code" + ID).hide();
            $("#code_input_" + ID).show();

            $("#location" + ID).hide();
            $("#location_input_" + ID).show();

            $("#lat" + ID).hide();
            $("#lat_input_" + ID).show();

            $("#lng" + ID).hide();
            $("#lng_input_" + ID).show();

            $("#alt" + ID).hide();
            $("#alt_input_" + ID).show();

            $("#type" + ID).hide();
            $("#type_input_" + ID).show();


        }).change(function ()
        {
            var ID = $(this).attr('id');
            var name = $("#name_input_" + ID).val();
            var code = $("#code_input_" + ID).val();
            var contact = $("#contact_input_" + ID).val();
            var location = $("#location_input_" + ID).val();
            var lat = $("#lat_input_" + ID).val();
            var lng = $("#lng_input_" + ID).val();
            var alt = $("#alt_input_" + ID).val();
            var type = $("#type_input_" + ID).val();



            var dataString = 'id=' + ID + '&name=' + name + '&type=' + type + '&code=' + code + '&contact=' + contact + '&alt=' + alt + '&location=' + location + '&lng=' + lng + '&lat=' + lat;
            $("#name_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#location_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#lat_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#lng_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#code_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />'); // Loading image
            $("#alt_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#contact_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            $("#type_" + ID).html('<img src="<?= base_url(); ?>images/loading.gif"  />');
            if (name.length > 0)
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/station/update/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#name_" + ID).html(name);
                        $("#code_" + ID).html(code);
                        $("#contact_" + ID).html(contact);
                        $("#location_" + ID).html(location);
                        $("#lat_" + ID).html(lat);
                        $("#lng_" + ID).html(lng);
                        $("#alt_" + ID).html(alt);
                        $("#type_" + ID).html(type);
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
        $("#alt2").blur(function () {

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


