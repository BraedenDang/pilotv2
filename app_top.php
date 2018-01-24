<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
if (!isset($_SERVER['REQUEST_URI']) || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/login') {
	if(!Auth::LoggedIn()) {
		header('Location:'.SITE_URL.'/index.php/login');
	}
}
?>
<!-- Preloader -->
    <div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
<!-- /Preloader -->

<div class="wrapper  theme-2-active pimary-color-blue">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        
    </nav>
</div>