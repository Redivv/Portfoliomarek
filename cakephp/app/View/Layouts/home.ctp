<!DOCTYPE html>
<html>
<head>
	<title>Główna</title>
	<?php echo $this->element('meta'); ?>
	<style media="screen">
		.menu_box{
			color:#ffffff !important;
		}
		.menu_box .strip{
			background-color: #ffffff !important;
		}
		.page_logo_link{
			color:#ffffff !important;
		}
		.page_header{
			z-index: 2000 !important;
		  position: absolute !important;
		}
	</style>
</head>

<body>
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->element('header'); ?>
			<?php echo $this->fetch('content'); ?>
</body>
</html>
