<?php 
require "header.php";
?>

<main>
	<h1 align="center">Signup</h1>
	<form action="signup.inc.php" method="post" align="center">
		<p/>
		<input type="text" name="uid" placeholder="Username" align="center" style="margin-left: 735px; width: 450px;" >
		<p/>
		<input type="text" name="mail" placeholder="E-mail" align="center" style="margin-left: 735px;  width: 450px;" >
		<p/>
		<input type="password" name="pwd" placeholder="Password" align="center" style="margin-left: 735px; width: 450px;" >
		<p/>
		<input type="password" name="pwd-repeat" align="center" placeholder="Repeat password"style="margin-left: 735px; width: 450px;" >
		<p/>
		<button type="submit" name="signup-submit">Sign me the fuck up!</button>
</main>
