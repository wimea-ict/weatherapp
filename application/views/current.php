<!DOCTYPE html>
<html>
<head>
<title>Weathro - displays weather status for users on your website - jQuery plugin</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	
	var wundergroundAPIKey="1a10e212187d55cd";
	var maxWeathroDays = 2;
			
	</script>
<style>
body {
font-family: Calibri;
font-size: 15px;
text-align: center;
}
</style>
</head>
<body>
<div id="jquery-script-menu">
<div class="jquery-script-center">
<div class="jquery-script-clear"></div>
</div>
</div>
<br/>
<br/>
<div id="weathro"> </div>
<script src="<?= base_url(); ?>js/weathro.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
