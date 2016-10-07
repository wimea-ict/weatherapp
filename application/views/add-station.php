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
            <h4> Enter station details to below: </h4>
            <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/station/save'  method="post">            

                <div class="widget-main">

                    <div class="span12">  


                        <input type="text" class="span6" id="latitude" name="latitude" placeholder="Latitude"  />

                        <input type="text" class="span6" name="longitude" id="longitude" placeholder="Longitude" />

                        <input type="text" class="span6" name="altitude" id="altitude" placeholder="Altitude"  />


                        <input type="text" class="span6" id="number" name="number" required="true" placeholder="Station number" />  


                        <input type="text" id="name" name="name" class="span6" required="true" placeholder="Station name"  />   


                        <input type="text" id="location" name="location" class="span6" placeholder="Location" />


                        <input type="text" name="type" id="type" class="span6" placeholder="Type" />


                        <input type="text" class="span6" name="country" id="country" placeholder="Country" />                                                             


                        <input type="text" class="span6" id="region" name="region" placeholder="Region/state" />

                        <input type="text" class="span6" id="code" required="true" name="code" placeholder="Block code"  />

                        <input type="text" class="span6" id="city" name="city" placeholder="city"  />

                        <input type="text" class="span6" name="opened" id="opened" placeholder="year opened" />

                        <input type="text" class=" span6" name="closed" id="closed" placeholder="Year closed" />
                        <input type="text" class="span6" id="status" name="status" placeholder="Status" />


                        <input type="text" name="type" id="type" class="span6" placeholder="Type" />



                        <div class="clearfix span6">
                            <button type="reset" class=" pull-left btn btn-small">
                                <i class="icon-refresh"></i>
                                Clear
                            </button>

                            <button  class=" pull-right btn btn-small btn-success">
                                Submit

                            </button>
                        </div>



                    </div></div>
            </form>

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

