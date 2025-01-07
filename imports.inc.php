<?php
# SYNOPSIS: Import all modules
#
# imports.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 01:33:05 PM PDT
# Last Update: 2022-03-08: 07:36
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
include_once("DB/calculator.config.php");

$cats = array();
foreach(glob(__DIR__."/modules/*.Module.php") as $module){
    require_once($module);
}


$outputfp = file_get_contents("calculator_template.html");
$license = file_get_contents("license.html");
$header = file_get_contents("header.html");
$CALCPATH = basename($CALCPATH);


$number = $_POST['number_input'] ?? null;
$number2 = $_POST['number_input2'] ?? null;
$number3 = $_POST['number_input3'] ?? null;
$number4 = $_POST['number_input4'] ?? null;
$number5 = $_POST['number_input5'] ?? null;
$number6 = $_POST['number_input6'] ?? null;
$number7 = $_POST['number_input7'] ?? null;
$number8 = $_POST['number_input8'] ?? null;
$number9 = $_POST['number_input9'] ?? null;
$number10 = $_POST['number_input10'] ?? null;
$number11 = $_POST['number_input11'] ?? null;
$number12 = $_POST['number_input12'] ?? null;
$number13 = $_POST['number_input13'] ?? null;
$number14 = $_POST['number_input14'] ?? null;

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
            $select .= "\t<option value=\"$key\" selected>$key</option>\n";
        } else {
            $select .= "\t<option value=\"$key\">$key</option>\n";
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
    $select .= "<option value=''>--Select Category--</option>";

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
