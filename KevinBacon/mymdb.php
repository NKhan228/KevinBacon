<html class="gr__courses_cs_washington_edu"><head>
		<title>My Movie Database (MyMDb)</title>
		<meta charset="utf-8">
		
		<!-- Links to provided files.  Do not edit or remove these links -->
		<link href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png" rel="shortcut icon" type="image/png">
		<script src="https://webster.cs.washington.edu/js/kevinbacon/provided.js" type="text/javascript"></script>

		<!-- Link to your CSS file that you should edit -->
		<link href="Baconcss.css" rel="stylesheet" type="text/css">
	</head>

	<body data-gr-c-s-loaded="true">
		<div id="frame">
			<div id="banner">
                <h1><img alt="Banner" src="Bacon.PNG" style="width: -webkit-fill-available; height: 100px;"></h1>
			</div>

			<div id="main">
				<h1>The One Degree of Kevin Bacon</h1>
				<p>Type in an actor's name to see if he/she was ever in a movie with Kevin Bacon!</p>
				<p><img alt="Kevin Bacon" src="Kevin_Bacon2.jpg"></p>

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
		
			<div id="w3c">
				<p><img alt="Certification" src="Bacon2.PNG" style="width: -webkit-fill-available; height: 80px;"></p>
			</div>
		</div> <!-- end of #frame div -->
	

</body></html>