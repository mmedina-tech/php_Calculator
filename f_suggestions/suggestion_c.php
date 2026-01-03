<?php
# SYNOPSIS: Create Insert Query for Suggestions
# 
# suggestion_c.php
#
# Author: Marcus Medina
# Date: Tue 07 Sep 2021 09:25:53 AM PDT
# Last Update: 2021-12-23: 20:39
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
$calc_base = calc_base_url();

$page = file_get_contents('suggestions.html');
$page = str_replace('{{CALC_BASE}}', $calc_base, $page);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $db->prepare('INSERT INTO Formulas (user_fname, user_lname, form_cat, 
	form_name, Formula, description, Book_Title, 
Book_Author, Book_Publisher, Page_Number) VALUES (?,?,?,?,?,?,?,?,?,?)');
$stmt->execute(array(htmlentities($_POST['fname']), htmlentities($_POST['lname']), htmlentities($_POST['formCat']), 
	htmlentities($_POST['formName']), htmlentities($_POST['formula']), htmlentities($_POST['description']), 
	htmlentities($_POST['bookt']), htmlentities($_POST['booka']), htmlentities($_POST['pookp']), htmlentities($_POST['pgnumber'])));

if ( $stmt ) {
	$page = str_replace('{INSERT}', "<h2 class='successful'>Insert Complete</h2>", $page);
	
} else {
	$page = str_replace('{INSERT}', "<h2 class='fail'>Insert Fail</h2>", $page);
}
print $page;
