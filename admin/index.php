<?php
# SYNOPSIS: replace tokens with empty strings
# 
# index.php
#
# Author: Marcus Medina
# Date: Fri 10 Sep 2021 09:00:45 PM PDT
# Last Update: 2022-02-14: 06:54
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
		<link rel="stylesheet" href="/php_Calculator/css/calculator.css" type="text/css" media="" title="" charset="" />
		<link rel="stylesheet" href="/php_Calculator/css/install.css" type="text/css" media="" title="" charset="" />
		<link rel="stylesheet" href="/php_Calculator/css/DataGridView.css" type="text/css" media="" title="" charset="" />
		<link rel="stylesheet" href="/php_Calculator/css/header.css" type="text/css" media="" title="" charset="" />
	</head>
	<body>
		<div>
			<br>
			<form action="/php_Calculator/DB/DB_install.php" method="post">
				<h2>The following fields are for setting the config file for the proper connections moving forward.</h2>
				<label>Connection:</label>
				<input type='text' name='conn' value='' />
				<br>
				<label>Database Name:</label>
				<input type='text' name='dbname' value='Massive_Calculator' />
				<br>
				<label>Username:</label>
				<input type="text" name="user" value="" />
				<br>
				<label>Password:</label>
				<input type="password" name="passwd" value="" />
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

