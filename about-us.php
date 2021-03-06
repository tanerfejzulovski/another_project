<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style.scss">

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>

		<meta charset="utf-8"></meta>
		<title>SASS EXAMPLE</title>
	</head>
	<body>
	<div class="container">
		<div id="header">
			<h1>Site Logo here</h1>
		</div>
		<div id="main-menu">
			<ul>
				<li><a href="#">Main item 1</a></li>
				<li><a href="#">Main item 2</a></li>
				<li><a href="#">Main item 3</a></li>
				<li><a href="#">Main item 4</a></li>
				<li><a href="#">Main item 5</a></li>
			</ul>
		</div>
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
				<h3>Sidebar Right</h3>
				<p>Sidebar content</p>
				<input id="search">
				<div class="div_content">
					<h3>Sidebar Right</h3>
					<p>Sidebar content</p>
				</div>
			</div>
			<div class="nesto">Slider here</div>
		</div>
		<footer id="footer">
			<span>Copyright &copy; by Webski</span>
		</footer>
	</div>
	<script>
	  $(function() {
	    var availableTags = [
	      "ActionScript",
	      "AppleScript",
	      "Asp",
	      "BASIC",
	      "C",
	      "C++",
	      "Clojure",
	      "COBOL",
	      "ColdFusion",
	      "Erlang",
	      "Fortran",
	      "Groovy",
	      "Haskell",
	      "Java",
	      "JavaScript",
	      "Lisp",
	      "Perl",
	      "PHP",
	      "Python",
	      "Ruby",
	      "Scala",
	      "Scheme"
	    ];
	    $( "#search" ).autocomplete({
	      source: availableTags
	    });
	  });
  </script>
	</script>
	</body>
</html>