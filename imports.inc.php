<?php
# SYNOPSIS: Import all modules
# 
# imports.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 01:33:05 PM PDT
# Last Update: 2022-02-16: 13:48
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
require_once("modules/Acceleration.php");
require_once("modules/Accounting.php");
require_once('modules/Area.php');
require_once('modules/Astronomic_Units.php');
require_once('modules/Budget.php');
require_once('modules/Culinary.php');
require_once('modules/Energy_or_Work.php');
require_once('modules/Fuel_Economy.php');
require_once('modules/GED_Practice.php');
require_once('modules/Imperial_to_Imperial.php');
require_once('modules/Imperial_to_Metric.php');
require_once('modules/Light.php');
require_once('modules/Maritime_Measurements.php');
require_once('modules/Mass.php');
require_once( 'modules/Metric_to_Imperial.php' );
require_once( 'modules/OhmsLaw.php' );
require_once( 'modules/Physical_Fitness.php' );
require_once( 'modules/PlaneAngle.php' );
require_once( 'modules/Power.php' );
require_once( 'modules/Pressure.php' );
require_once( 'modules/Torque.php' );
require_once( 'modules/Velocity.php' );
require_once( 'modules/Resistive_Capacitive_Parallel.php' );
require_once( 'modules/Resistive_Capacitive_Series.php' );
require_once( 'modules/Resistive_Inductive_Parallel.php' );

$outputfp = file_get_contents("calculator_template.html");
$license = file_get_contents("license.html");
$header = file_get_contents("header.html");
$CALCPATH = basename($CALCPATH);

$accel = new Acceleration();
$account = new Accounting();
$area = new Area();
$astro = new Astronomic_Units();
$budget = new Budget();
$cook = new Culinary();
$energy = new Energy_or_Work();
$fuel = new Fuel_Economy();
$ged = new GED_Practice();
$imp = new Imperial_to_Imperial();
$impm = new Imperial_to_Metric();
$light = new Light();
$maritime = new Maritime_Measurements();
$mass = new Mass();
$mti = new Metric_to_Imperial();
$ohms = new OhmsLaw();
$phys = new Physical_Fitness();
$plane = new PlaneAngle();
$power = new Power();
$press = new Pressure();
$tor = new Torque();
$vel = new Velocity();
$rcp = new Resistive_Capacitive_Parallel();
$rcs = new Resistive_Capacitive_Series();
$rip = new Resistive_Inductive_Parallel();

$cats = array(
    'Acceleration' => $accel,
    "Accounting" => $account,
    'Area' => $area,
    'Astronomic Units' => $astro,
    'Budgeting' => $budget,
    'Culinary' => $cook,
    'Energy or Work' => $energy,
    'Fuel Economy' => $fuel,
    'GED Practice' => $ged,
    'Imperial to Imperial' => $imp,
    'Imperial to Metric' => $impm,
    'Light' => $light,
    'Maritime Measurements' => $maritime,
    'Mass' => $mass,
    'Metric to Imperial' => $mti,
    'Ohms Law' => $ohms,
    'Physical Fitness' => $phys,
    'Plane Angle' => $plane,
    'Power' => $power,
    'Torque' => $tor,
    'Velocity' => $vel,
    'Resistive Capacitance Parallel' => $rcp,
    'Resistive Inductive Parallel' => $rip,

);

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
