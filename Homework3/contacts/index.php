<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact book</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>

  </head>
  <body>
	<div class="row">
		<div class="large-6 columns">
			<h1>Contacts</h1>
		</div>
		<div class="large-6 columns">
		<ul class="btngroup">
		<li>
			<a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2>Add Contact</h2>
				<form id="addContact" action="#" method="post">
					<div class="row">
						<div class="large-6 columns">
							<label>First Name
								<input name="first_name" type="text" placeholder="Enter First Name" />
							</label>
						</div>
						<div class="large-6 columns">
							<label>Last Name
								<input name="last_name" type="text" placeholder="Enter Last Name" />
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label>Email
								<input name="email" type="email" placeholder="Enter Email" />
							</label>
						</div>
						<div class="large-4 columns">
							<label>Phone Number
								<input name="phone" type="text" placeholder="Enter Phone Number" />
							</label>
						</div>
						<div class="large-4 columns">
							<label>Contact Group
								<select name="contact_group">
									<option value="family">Family</option>
									<option value="friends">Friends</option>
									<option value="business">Business</option>
								</select>
							</label>
						</div>
					</div>
					<input name="submit" type="submit" class="add-btn button right small" value="Submit" />
					<a class="close-reveal-modal">&#215;</a>
				</form>
			</div>
			</li>
			<li>
			<a class="add-btn button right small alert" data-reveal-id="searchModal">Search Contact</a>
			<div id="searchModal" class="reveal-modal" data-reveal>
				<h2>Search Contact</h2>
				<form id="searchContact" action="#" method="post">
					<div class="row">
						<div class="large-12 columns">
								<input name="search" id="searchBox" type="text" placeholder="Search" />
						</div>
					</div>
					<input name="submit" type="submit" class="add-btn button right small" value="Search" />
					<a class="close-reveal-modal">&#215;</a>
				</form>
			</div>
			</li>
			</ul>
		</div>
	</div>
	<!--Loading Image-->
	<div id="loaderImage">
		<img src="img/ajax-loader.gif"/>
	</div>
	
    <!--Main Contact-->
	<div id="searchResult"></div>
	<div id="pageContent"></div>
	
	
	
    <script src="js/vendor/jquery.js"></script>
	<script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
