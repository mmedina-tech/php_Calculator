<?php
# SYNOPSIS: Create Comments Query for DB
# 
# comments_c.php
#
# Author: Marcus Medina
# Date: Tue 07 Sep 2021 07:52:44 AM PDT
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

require( '../DB/DB_conn.php' );

$page = file_get_contents('comments.html');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $db->prepare('INSERT INTO Comments (first_name,last_name,comment) VALUES (?,?,?)');
$stmt->execute(array($_POST['fname'], $_POST['lname'], $_POST['comment']));


if ( $stmt ) {
	$page = str_replace('{INSERT}', "<h2 class='successful'>Insert Complete</h2>", $page);
	print $page;
	
} else {
	$page = str_replace('{INSERT}', "<h2 class='fail'>Insert Fail</h2>", $page);
	print $page;
}


