<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="refresh" content="60">

		<title>Wall</title>

		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
				list-style-type: none;
				outline: none;
			}
			body { 
				background: #020204 url(img/moon.jpg) no-repeat 90% 0;
				background: #020204 url(img/moon.jpg) no-repeat calc(50% + 320px) -40px;
				background-attachment: fixed;
			}
			html, body {
				color:#CCC;
			}
			h1 {
				margin-bottom: 1em;
				opacity:.6;
			}
			#wrapper {
				position: relative;
			}
			ul, li {
				list-style: none;
			}
			#gallery {
				margin-top:130px; 
			}
			#gallery li {
				display:block;
			}
			#gallery li img {
				display:block;
				margin:0 auto 30px;
				border:2px solid #333;
			}
		</style>
	</head>
	<body>
		
		<div id="wrapper">
			<?php
				$dirname = "photos/";
				$images = glob($dirname."*.png");
				//sort
				rsort($images);

				//loop on 20
				echo '<ul id="gallery">';
				foreach (array_slice($images, 0, 20) as $image) {
					echo '<li><img src="'.$image.'" alt=""></li>';
				}
				echo '</ul>';

			?>
		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script>
			var PB = PB || [];
			$(function(){


			});
		</script>
	</body>
</html>