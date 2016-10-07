
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
		<script src="<?= base_url(); ?>js/2.0.3-jquery.min.js"></script>
              
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>

 <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>

    <script src="<?php echo base_url(); ?>js/moment-with-locales.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

    <script type="text/javascript">
        $(function () {


            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            })
            $('#datenow').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#daterain').datetimepicker({
                format: 'YYYY-MM-DD'
            });


        });
    </script>
    <script type="text/javascript">
        $('#Loading').hide();
        $('#Loading_daily').hide();
        $('#Loading_rainy').hide();

        $('#station').change(function () {
            var station = $('#station').val();
            if (station != "") {

                $.post("<?= base_url() ?>/index.php/station/get", {station: $("#station").val()}
                , function (station) {
                    var json = JSON.parse(station);
                    $('#number').empty();
                    $('#code').empty();
                    //   console.log(json[0].number);
                    $("#number").val(json[0].number);
                    $("#code").val(json[0].code);

                });


            } else {

                $('#number').empty();
                $('#code').empty();
            }
        }); //end change





        $('#rainy').click(function (e) {
            e.preventDefault();
            var date = $('#daterain').val();
            var rain = $('#rain_now').val();
            var time = $('#timepicker1').val();
            var duration = $('#duration_now').val();
            var station = $('#number').val();


            //  console.log(station);
            // $('#Loading_daily').show(); 
            if (station != "") {

                $.post("<?php echo base_url() ?>index.php/metar/rain", {station: station, date: date, rain: rain, time: time, duration: duration}
                , function (response) {
                    //#emailInfo is a span which will show you message
                    $('#Loading_rainy').hide();
                    setTimeout(finishAjaxitem('Loading_rainy', escape(response)), 200);

                }); //end change

                function finishAjaxitem(id, response) {
                    $('#' + id).html(unescape(response));
                    $('#' + id).fadeIn();
                }

            } else {
                alert("Please select a station");
                $('#Loading_rainy').hide();

            }



        }); //end change


    </script>

