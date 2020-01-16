<html class="gr__courses_cs_washington_edu"><head>
		<title>My Movie Database (MyMDb)</title>
		<meta charset="utf-8">
		
		<link href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png" rel="shortcut icon" type="image/png">
		<script src="https://webster.cs.washington.edu/js/kevinbacon/provided.js" type="text/javascript"></script>

		<!-- Link to your CSS file that you should edit -->
		<link href="Baconcss.css" rel="stylesheet" type="text/css">
	</head>

	<body data-gr-c-s-loaded="true">
		<div id="frame">
            <div>
				<!-- form to search for every movie by a given actor -->
				<form action="search-all.php" method="get">
					<fieldset>
						<legend>All movies</legend>
						<div class="search-box">
							<input name="firstname" autofocus="autofocus" type="text" size="12" placeholder="first name"> 
							<input name="lastname" type="text" size="12" placeholder="last name"> 
							<input class="sub" type="submit" value="go">
						</div>
					</fieldset>
				</form>

				<!-- form to search for movies where a given actor was with Kevin Bacon -->
				<form action="search-kevin.php" method="get">
					<fieldset>
						<legend>Movies with Kevin Bacon</legend>
						<div class="search-box">
							<input name="firstname" type="text" size="12" placeholder="first name"> 
							<input name="lastname" type="text" size="12" placeholder="last name"> 
							<input class="sub" type="submit" value="go">
						</div>
					</fieldset>
				</form>
			</div> <!-- end of #main div -->
		</div> <!-- end of #frame div -->
	

</body></html>