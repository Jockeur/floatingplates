<?php
	include 'functions/main-functions.php';
	$pages = scandir('pages/');
	if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)){
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Floating Plates</title>
	</head>
	<body>
		<?php include 'body/topbar.php'; ?>
		<div class="container">
			<?php include 'pages/'.$page.'.php'; ?>
		</div>
	</body>
</html>