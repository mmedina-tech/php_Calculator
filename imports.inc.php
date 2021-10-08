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
require("Acceleration.php");

$accel = new Acceleration();

$cats = array(
	'Acceleration' => $accel
);

$two_input = array();
$three_input = array();
$four_input = array();
$five_input = array();
$fourteen_input = array();

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

	foreach($myAttrs as $key=>$value){
		$idStr = " $key='$value'";
		$attrString .= $idStr;
	}

	$select = "<select onchange='redire(category, Formula)'$attrString\n";

	foreach ( $sele as $key=>$value){
		if ( $key == $selected ) {
			$select .= "\t<option value='$key' selected>$key</option>";
		} else {
			$select .= "\t<option value='$key'>$key</option>";
		}
	}
	$select .= "</select>\n";
	return $select;
}

function cateSelect($sel, $myAttrs=array(), $selected=null){
	$attrString = "";
	foreach($myAttrs as $key=>$value){
		$idStr = " $key='$value'";
		$attrString .= $idStr;
	}

	$select = "<select onchange='redir(this)'$attrString>\n";

	foreach ( $sel as $key=>$value ){
		if ( $key == $selected ) {
			$select .= "\t<option value='$key' selected>$key</option>\n";
		} else {
			$select .= "\t<option value='$key'>$key</option>";
		}
	}
	$select .= "</select>\n";
	return $select;
}

$CALCPATH = basename("/var/www/html/php_Calculator");
#echo cateSelect($cats, $attrib);
#echo formSelect($accel->function_list, $attribs);

