<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VietNam Travel</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

		<!-- menu start -->
		<?php
		session_start();
		require_once('admincp/config/config.php');
		require_once('pages/menu.php');
		require_once('pages/slide.php');
		require_once('pages/maketing.php');
		require_once('pages/main.php');
		// require_once('pages/jumbotron.php');
		require_once('pages/footer.php');






		?>


		








	<script>
		CKEDITOR.replace('noidungbinhluan');
       
    </script>

	<script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>