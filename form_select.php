<?php
# SYNOPSIS: Select Category for Massive Calcualtor
# 
# form_select.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 02:09:13 PM PDT
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

require("./imports.inc.php");


$action = "./answer.php";
$outputfp = file_get_contents("calculator_template.html");
$cat = $_POST['category'];
$active_cats = $cats[$cat];
$sfunc_list = sort($active_cats->function_list);

$title = $sfunc_list[0];

#$inputs = $active_cats->for_loop($title);
$show_formulas = $active_cats->show_Formulas($title);
$formula = formSelect($active_cats->function_list, $attribs, $title);
$category = cateSelect($cats, $attrib, $cat);

$outputtxt = str_replace('CALCPATH', '/'.$CALCPATH);
$outputtxt .= str_replace('TITLE', $title);
$outputtxt .= str_replace('CATEGORY', $category);
$outputtxt .= str_replace('ACTION', $action);
$outputtxt .= str_replace('INPUT', $inputs);
$outputtxt .= str_replace('FORMULA', $show_formulas);
$outputtxt .= str_replace('FORM_SELECT', $formula);

try{
	$outputtxt .= str_replace('ANSWER', '');
	$outputtxt .= str_replace('ERROR', '');
	echo $outputtxt;
} catch (Exception $e) {
	$outputtxt .= str_replace('ANSWER', '');
	$outputtxt .= str_replace('ERROR', '<h1>Please try Again</h1>');
	print $outputtxt;
}

