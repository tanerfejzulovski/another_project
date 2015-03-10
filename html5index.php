<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style.scss">
		<meta charset="utf-8"></meta>
		<title>SASS EXAMPLE</title>
	</head>
	<body>
	<div class="container">
		
	<?php include 'includes/header.php' ?>

		<div id="wrapper">			
			<div class="sidebar-left">
				<div class="div_content">
					<h3>Sidebar Left</h3>
					<p>Sidebar content</p>
				</div>
			</div>
			<div id="article">
				<div class="div_content">				
					<h1>Article title</h1>
					<p>Article metadata</p>
					<p>Article content..</p>
					<footer>Article footer</footer>
				</div>
			</div>
			<div class="sidebar-right">
				<div class="div_content">
					<h3>Sidebar Right</h3>
					<p>Sidebar content</p>
				</div>
			</div>
			<div class="nesto">Slider here</div>
		</div>

		<?php include 'includes/footer.php'; ?>				

	</div>

	</body>
</html>