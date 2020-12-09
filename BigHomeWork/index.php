<?php
	include "controller/controllerMilk.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intinial-scale=1">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="webroot/css/bootstrap-grid.css">
	<link rel="stylesheet" href="webroot/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="webroot/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="webroot/css/bootstrap-reboot.min.css">
	<style>
		.link-control {
			margin-top: 100px;
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	<div class="container" style="width: 1200px;">
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 link-control">
			<a class="col-xl-6 col-lg-6 col-md-6 col-sm-6" href="index.php?action=list_user">Thong tin khach hang</a>
			<a class="col-xl-4 col-lg-4 col-md-4 col-sm-4" href="index.php?action=list_milk_company">Thong tin hang sua</a>
			<a class="col-xl-4 col-lg-4 col-md-4 col-sm-4" href="index.php?action=list_milk">San pham sua</a>
		</div>
	</div>
</body>
</html>

<?php
	$controller = new Controller();
	$controller->handleRequest();
?>