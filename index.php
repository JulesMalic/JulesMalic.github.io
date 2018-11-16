<?php
session_start();
?>

<!DOCTYPE HTML>

<?php
require "header.php";
?>

<html>
	
<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="Logo1.png" alt="" width=400 height=400 /></span>
						<h1>Null Hacks</h1>
						<p>The living breathing meme, that's also a cheat.</p>
	
						<a href="https://discord.gg/eDbuYNh" class="button special" target="_blank">Join my discord server!</a>
						
						<?php
							if(isset($_SESSION['userID']))
						{
							echo '<form action="logout.inc.php" method="post"><p/>
							<button type="submit" name="logout-submit">Logout</button>
						</form>';
						}
						else
						{
							echo '<form action="login.inc.php" method="post">
							<input  style="margin-left: 385px; margin-bottom: 20px; margin-top: 20px; width: 450px;" type="text" name="mailuid" placeholder="Username or E-mail">
							<input  style="margin-left: 385px; margin-bottom: 20px; width: 450px;" type="password" name="pwd" placeholder="Password">
							<button type="submit" name="login-submit">Login</button>
						</form>
						<a href="signup.php">Dont have an account?</a>';
						}
						?>

						<?php
						if(isset($_SESSION['userID']))
						{
							echo "<p style='display:inline-block;margin-right:10px;''>Hello, </p>".$_SESSION['userUID'];
						}
						else
						{
							//If logged out
						}
						?>

					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Info</a></li>
							<li><a href="#first">Sales Pitch</a></li>
							<li><a href="#second">Buy</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>About us</h2>
										</header>
										<p>Null hacks is mainly a cheat service for CSGO but I plan to branch out to other games and potentially grow a team of developers. But, this is currently run by a single developer, me, as a hobby and mostly to share with friends and anyone else who cares. You can see more about me and what I do on my youtube channel - https://www.youtube.com/channel/UCZF93Qrt6yMAabRnlND4YsQ</p>
										
									</div>
									
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Why choose this cheat?</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon major style1 fa-code"></span>
										<h3>Coded From Scratch</h3>
										<p>This cheat has original code from the ground up, unlike every other toxic cheat in this scene. This cheat uses advanced rootkit-style techniques to ensure it is permanently hidden from state of the art anti-cheats.</p>
									</li>
									<li>
										<span class="icon major style3 fa-copy"></span>
										<h3>Lightweight</h3>
										<p>The client is designed in a way to remain lightweight and not drain your resources to maintain gaming performance. When using this cheat you will not even notice a difference in processing speeds due to its efficient functionality.</p>
									</li>
									<li>
										<span class="icon major style5 fa-diamond"></span>
										<h3>Premium</h3>
										<p>I offer a premium price for my cheats; why? I would like to keep this service as exclusive as possible to bring consistent standards of saftey, so that I can be there for you when you need me most, skirting through ban waves as they come and go. Also this is my job and I kinda need to survive :-).</p>
									</li>
								</ul>
								<footer class="major">
									
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Buy it here</h2>
									<p>Note: You can cancel your subscription whenever you want!</p>
									<p>Please download <a href="Serial Generator.exe">this file </a> to generate a serial number for your purchase.</p>
								</header>
								
								
								<footer class="major">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="52ZVES2D3EJN4">
<table>
<tr><td><input type="hidden" name="on0" value="Subscription Options">Subscription Options</td></tr><tr><td><select name="os0">
	<option value="Weekly">Weekly : $5.00 USD - weekly</option>
	<option value="Monthly">Monthly : $12.00 USD - monthly</option>
	<option value="Yearly">Yearly : $80.00 USD - yearly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Please enter the serial number">Please enter the serial number</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
<tr><td><input type="hidden" name="on2" value="Please enter your email">Please enter your email</td></tr><tr><td><input type="text" name="os2" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>

<script type="text/javascript" charset="utf-8">
var embeddedPPFlow = new PAYPAL.apps.DGFlow({trigger: 'submitBtn'});
</script>






								</footer>
							</section>

					
						

					</div>

				
					<footer id="footer">
				
						<p class="copyright">&copy; Null Hacks. By using this website you agree to the <a class="copyright" href="https://julesmalic.github.io/termsOfService">terms of service</a>
					 
						
						<br /> Need help? Join my discord and ask for help and me or one of my admins will help you!</p>
												<!-- PayPal Logo --><table border="1" cellpadding="1" cellspacing="1" align="center"><tr><a href="https://www.paypal.com/webapps/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_payments_by_pp_2line.png" alt="How PayPal Works" /></a></tr><!-- PayPal Logo -->
												<!-- PayPal Logo --><tr><a href="https://www.paypal.com/webapps/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/PP_AcceptanceMarkTray-NoDiscover_243x40.png" alt="Buy now with PayPal" /></a></tr></table><!-- PayPal Logo -->
						
					</footer>

			</div>

	
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
	
			<script src="assets/js/main.js"></script>

	</body>
</html>