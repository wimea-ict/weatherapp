<?php require_once(APPPATH . 'views/header_main.php'); ?> 
<div class="contentpanel">

    <div class="container ">
       
            <iframe id="myframe" style="margin-top: 5px; width: 100%;" onload="resizeIframe(this)" name="myframe" frameborder="no" border="0" scrolling="no"  src="<?php echo base_url() . "index.php/welcome/start"; ?>"> </iframe>

     
    </div>
</div>
<?php require_once(APPPATH . 'views/sidebar.php'); ?>
<?php require_once(APPPATH . 'views/footer_main.php'); ?>



