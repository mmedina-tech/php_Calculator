<?php
# SYNOPSIS: Acceleration Module for Massive Calculator PHP Version
#
# Acceleration.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 01:12:37 PM PDT
# Last Update: 2022-03-01: 14:49
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

require_once("FormulaBase.php");

class Acceleration extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                "Feet/Sec Squared to Meters/Sec Squared",
                function($num=NULL){
                    $result = $num * 0.03048;
                    return array($result, $this->pluralize($result, "Meter/Sec<sup>2</sup>"));
                },
                array("number_input" => "Feet/Sec<sup>2</sup> (input): "),
                array( 'Formula: ' => 'Feet/Sec<sup>2</sup> * 0.0348'),
            ),
            FormulaBase::create_func_entry(
                "Inches/Sec Squared to Meters/Sec Squared",
                function($num=NULL){
                    $result = $num * 0.0254;
                    return array($result, $this->pluralize($result, 'Meter/Sec<sup>2</sup>'));
                },
                array( 'number_input' => 'Inches/Sec<sup>2</sup> (input): '),
                array( 'Formula: ' => 'Inches/Sec<sup>2</sup> * 0.0254'),
            ),
            FormulaBase::create_func_entry(
                 "Meters/Sec Squared to Feet/Sec Squared",
                 function ($num=NULL){
                     $result = $num * 3.281;
                     return array($result, $this->pluralize($result, 'Foot/Sec<sup>2</sup>'));
                },
                array( 'number_input' => 'Meters/Sec<sup>2</sup> (input): '),
                array( 'Formula: ' => 'Meters/Sec<sup>2</sup> * 3.281'),
            ),
            FormulaBase::create_func_entry(
                "Meters/Sec Squared to Inches/Sec Squared",
                function($num=NULL){
                    $result = $num * 39.37;
                    return array($result, $this->pluralize($result, 'Inch/Sec<sup>2</sup>'));
                },
                array( 'number_input' => 'Meters/Sec<sup>2</sup> (input): '),
                array( 'Formula: ' => 'Meters/Sec<sup>2</sup> * 39.37'),
            ),
        );
    }
}
