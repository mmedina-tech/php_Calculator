<?php
# SYNOPSIS: Select Category for Massive Calcualtor
# 
# form_select.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 02:09:13 PM PDT
# Last Update: 2025-02-07: 22:16
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

require_once("./imports.inc.php");
include("./log.php");


$action = "./input.php";
$cat = $_GET['category'];
$active_cats = $cats[$cat];
$formula = formSelect($active_cats->function_list, $attribs);
$category = cateSelect($cats, $attrib, $cat);

$outputfp = str_replace('CALCPATH', '/php_Calculator', $outputfp);
$outputfp = str_replace('TITLE', '', $outputfp);
$outputfp = str_replace('CATEGORY', $category, $outputfp);
$outputfp = str_replace('ACTION', $action, $outputfp);
$outputfp = str_replace('INPUT', '', $outputfp);
$outputfp = str_replace('FORMULA', '', $outputfp);
$outputfp = str_replace('FORM_SELECT', $formula, $outputfp);
$outputfp = str_replace("LICENSE", $license, $outputfp);
$outputfp = str_replace("HEADER", $header, $outputfp);

try{
	$outputfp = str_replace('ANSWER', '', $outputfp);
	$outputfp = str_replace('ERROR', '', $outputfp);
	print $outputfp;
} catch (Exception $e) {
	$outputfp = str_replace('ANSWER', '');
	$outputfp = str_replace('ERROR', '<h1>Please try Again</h1>');
	print $outputfp;
}

