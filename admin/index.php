<?php
# SYNOPSIS: replace tokens with empty strings
# 
# index.php
#
# Author: Marcus Medina
# Date: Fri 10 Sep 2021 09:00:45 PM PDT
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or 
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABLILITY of FITNESS FOR A PARTICULAR PURPOSE. See the 
# GNU General Public License for more details.
#
# You Should have recieved a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#
?>

<html lang='en-US'>
	<head>
		<meta charset='UTF-8'>
		<meta name="author" content="Marcus Medina">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Installation form for DB">
		<link rel="stylesheet" href="/Massive_Calculator.web/css/calculator.css" type="text/css" media="" title="" charset="" />
		<link rel="stylesheet" href="/Massive_Calculator.web/css/install.css" type="text/css" media="" title="" charset="" />
		<link rel="stylesheet" href="/Massive_Calculator.web/css/DataGridView.css" type="text/css" media="" title="" charset="" />
		<link rel="stylesheet" href="/Massive_Calculator.web/css/header.css" type="text/css" media="" title="" charset="" />
	</head>
	<body>
		<div id="maindisplay">
			<div class='Head-Column'>
				<h1 class='mainHeader'><img id='mainlogo' align='center' src='/Massive_Calculator.web/images/massive01.svg' alt='Massive Calculator'> The Massive Calculator!</h1>
			</div>
			<div class='Head-Column'>
				<nav class="menuItem">
					<a id='tabitem' href='/Massive_Calculator.web/about.php'>About</a>
					<a id='tabitem' href='/Massive_Calculator.web/index.php'>Instructions</a>
					<a id='tabitem' href='/Massive_Calculator.web/comments/comments_r.php'>Leave Comment</a>
					<a id='tabitem' href='/Massive_Calculator.web/f_suggestions/suggestions.html'>Suggest Formula</a>
				</nav>
			</div>
		</div>
		<div>
			<br>
			<form action="/cgi-bin/Massive_Calculator.cgi/DataBase/createMassive_Calculator.py" method="post">
				<label>Username:</label>
				<input type="text" name="user" value="" />
				<br>
				<label>Password:</label>
				<input type="password" name="passwd" value="" />
				<br>
				<label>Web Root:</label>
				<input type="text" name="webroot" value="" />
				<br>
				<label>Cgi Root:</label>
				<input type='text' name='cgiroot' value='' />
				<br>
				<label>Full Calculator Web Path:</label>
				<input type="text" name="calcpath" value="" />
				<br>
				<input type="submit" value="Start Install &rarr;" />
			</form>
			<div class='error' hidden>
				{ERROR}
			</div>
			<div class='success' hidden>
				{DATABASE}
				{TABLE}
				{TABLE1}
				{TABLE2}
				{LOGS}
				{LOGS2}
			</div>
			<div hidden>
				<br>
				{START}
			</div>
		</div>
	</body>
</html>

