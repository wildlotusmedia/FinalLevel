<?
	session_start();
?>
<!-- divide for Header -->
	<body>
		<div class="container">
			
			<div class="row" id="navtop">
				
					<div class="fourcol">
						<a href="home.php"> <img id="logo" src="img/logo.png" alt="Final Level Gaming to the next level"></a>
						
					</div>
					<div class="threecol">	
					<div class="dark">
						 <form action="search.php" method="post" class="search">
                        <input type="text" name="term" value="Search" onclick="this.value = '';" onkeydown="this.style.color = '#4b4b4b';">
                         <input id="search-bar" type="submit" name="search" value=""/>
						</form>
					</div>
					</div>
					<div class="fivecol last">
						<div class="row">
							<div class='sixcol last'>
								<div id="usernav">
									<div class="signnav">
										<ul>
											<li>Hello, <span id="username"><a href="login.php">User</span></a></li>
											<li> | </li>
											<li><a href="logout.php">Log out</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class='sixcol last'>
								<div id="sidenav">
									<div class="signnav">
										<ul>
											<li><a href="cart.php"> Cart (0) </a></li>
											<li> | </li>
											<li><a href="wishlist.php">Wish List</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>		
			</div>
			<div class="row">
				<div class="navbar">
					<div class="ninecol">
						<ul class="mainnav">
							<li><a href="catalog.php">Xbox</a> </li>
							<li><a href="catalog.php">PlayStation</a></li>
							<li><a href="catalog.php">Wii</a></li>
							<li><a href="catalog.php">PC</a></li>
							<li><a href="catalog.php">Wii U</a></li>
							<li><a href="catalog.php">3DS</a></li>
							<li><a href="catalog.php">PS Vita</a></li>
						</ul>
					</div>
					<div class="threecol last">
						<div class="socialnav">
							<ul>
								<li><a href="http://www.facebook.com"><img src="img/icons/facebook.png" alt="Facebook"></a> </li>
								<li><a href="http://www.twitter.com"><img src="img/icons/twitter.png" alt="Twitter"></a> </li>
								<li><a href="http://www.plus.google.com"><img src="img/icons/google.png" alt="Google Plus"></a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>