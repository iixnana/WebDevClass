<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Main Layout</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<script src="js/vendor/modernizr.js"></script>
</head>
<body>
<div class= "container">
<div class = "content">
	<div id="header">
		<header>
			<div>
			<img src="img/logo.png" width = "250px"/>
			</div>
			<div class="menubar">
				<ul class="menu">
					<li><a href="#">MENU</a>
						<ul>
							<li><a href="#">PIZZA</a></li>
							<li><a href="#">SIDE_MENU</a></li>
						</ul>
					</li>
					<li><a href="#">ABOUT_US</a></li>
					<li><a href="#">CONTACT_US</a></li>
					<li><a href="#">CART</a></li>
					<li><a href="#">MY_ORDERS</a></li>

				</ul>
			</div>

		</header>
	</div>

		<a data-reveal-id="dummy"></a>
		<div id="dummy" class="reveal-modal" data-reveal></div>
		<div class="section">
			<h2 class"sectionTitle">Pizza</h2>
			<div id="sectionContent"></div>
		</div>
		<div class="section">
			<h2 class"sectionTitle">Side menu</h2>
			<div id="sectionContentSide"></div>
		</div>


	</div>
	
	<footer>
	<div class="footer_copyright">
				<hr>
				<address>
					84 Heukseok-ro, Dongjak-gu, Seoul, Korea<br>
					Tel : 02-123-1234 Fax : 02-123-1234<br>
					E-mail : caupizza@naver.com <br>
					Made by : Team 27
				</address>
				<p>Copyrigt &#169; BY CAU PIZZA KOREA LTD. ALL RIGHT RESERVED</p>
		
	</div>
	</footer>
</div>
			
			
	 <script src="js/vendor/jquery.js"></script>

	<script src="js/script.js"></script>
	<script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>