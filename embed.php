<?php  
	error_reporting(0);
	include "func.php";
	$pluslink = 'https://plus.google.com/photos/photo/114603279038643369009/6493300016477276578?icm=false&iso=true&authkey=CLq2-63gotuGZg';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Google Plus Player</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <style>
            html,body{
            	height: 100%;
            	width: 100%;
            	margin: 0;
            }
	    </style>
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
<div id="myElement"></div>
    <script src="https://content.jwplatform.com/libraries/DbXZPMBQ.js"></script>
	<script>
		var playerInstance = jwplayer("myElement");
		playerInstance.setup({
			sources: <?php googleplus($pluslink); ?>,
			image: "",
			width:"100%",
			height:"100%",
			autostart: "false",
		});
	</script>
    </body>
</html>
