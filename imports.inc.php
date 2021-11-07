<?php
# SYNOPSIS: Import all modules
# 
# imports.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 01:33:05 PM PDT
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
require_once("modules/Acceleration.php");
require_once("modules/Accounting.php");
require_once('modules/Area.php');
require_once('modules/Astronomic_Units.php');
require_once('modules/Budget.php');


$accel = new Acceleration();
$account = new Accounting();
$area = new Area();
$astro = new Astronomic_Units();
$budget = new Budget();

$cats = array(
	'Acceleration' => $accel,
	"Accounting" => $account,
	'Area' => $area,
	'Astronomic Units' => $astro,
	'Budgeting' => $budget,
);

$number = $_POST['number_input'];
$number2 = $_POST['number_input2'];
$number3 = $_POST['number_input3'];
$number4 = $_POST['number_input4'];
$number5 = $_POST['number_input5'];
$number6 = $_POST['number_input6'];
$number7 = $_POST['number_input7'];
$number8 = $_POST['number_input8'];
$number9 = $_POST['number_input9'];
$number10 = $_POST['number_input10'];
$number11 = $_POST['number_input11'];
$number12 = $_POST['number_input12'];
$number13 = $_POST['number_input13'];
$number14 = $_POST['number_input14'];
$attribs = array(
	'id' => 'Formula',
	'name' => 'Formula',
	'class' => 'selForm'
);

$attrib = array(
	'id' => 'category',
	'name' => 'category',
	'class' => 'selCat'
);


function formSelect($sele, $myAttrs=array(), $selected=null){
	$attrString = "";
	ksort($sele);

	foreach($myAttrs as $key=>$value){
		$idStr = " $key='$value'";
		$attrString .= $idStr;
	}

	$select = "<select onchange='redire(category, Formula)'$attrString>\n";
	$select .= "<option value=''>-- Select Formula --</option>";

	foreach ( $sele as $key => $val){
		if ( $key == $selected ) {
			$select .= "\t<option value='$key' selected>$key</option>\n";
		} else {
			$select .= "\t<option value='$key'>$key</option>\n";
		}
	}
	$select .= "</select>\n";
	return $select;
}

function cateSelect($sel, $myAttrs=array(), $selected=null){
	$attrString = "";
	ksort($sel);
	foreach($myAttrs as $key=>$value){
		$idStr = " $key='$value'";
		$attrString .= $idStr;
	}

	$select = "<select onchange='redir(this)'$attrString>\n";

	foreach ( $sel as $key=>$value ){
		if ( $key == $selected ) {
			$select .= "\t<option value='$key' selected>$key</option>\n";
		} else {
			$select .= "\t<option value='$key'>$key</option>\n";
		}
	}
	$select .= "</select>\n";
	return $select;
}

$CALCPATH = basename("/var/www/html/php_Calculator");

