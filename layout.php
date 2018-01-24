<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Pilot | Red Wild Virtual</title>
    <?php echo $page_htmlhead; ?>
	<meta name="description" content="Pilot is the flight panel for all pilots in Red Wild Virtual." />
	<meta name="keywords" content="tbd..." />
	<meta name="author" content="Braeden Dang"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="<?php echo SITE_URL?>/lib/skins/pilotv2/favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<link href="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
		
	<!-- Custom CSS -->
	<link href="<?php echo SITE_URL?>/lib/skins/pilotv2/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php echo $page_htmlreq; ?>
    <?php
		// var_dump($_SERVER['REQUEST_URI']);
		# Hide the header if the page is not the registration or login page
		# Bit hacky, don't like doing it this way
		if (!isset($_SERVER['REQUEST_URI']) || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/login' || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/registration') {
			if(Auth::LoggedIn()) {
				Template::Show('app_top.php');
		}
	}
	?>
        
    <div id="content">
        <?php echo $page_content; ?>
    </div>
	<?php
	# Hide the footer if the page is not the registration or login page
	# Bit hacky, don't like doing it this way
	if (!isset($_SERVER['REQUEST_URI']) || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/login' || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/registration') {
		if(Auth::LoggedIn()) {
            Template::Show('app_bottom.php');
        }
    }
	?>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/dist/js/jquery.slimscroll.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/echarts-liquidfill.min.js"></script>
	
	<!-- Toast JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/dist/js/init.js"></script>
	<script src="<?php echo SITE_URL?>/lib/skins/pilotv2/dist/js/dashboard-data.js"></script>
</body>

</html>
