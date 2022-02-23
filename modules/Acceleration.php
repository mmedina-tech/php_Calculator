<?php
# SYNOPSIS: Acceleration Module for Massive Calculator PHP Version
#
# Acceleration.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 01:12:37 PM PDT
# Last Update: 2022-02-23: 15:21
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
		$this->function_strings = array(
			1 => "Feet/Sec Squared to Meters/Sec Squared",
			2 => "Inches/Sec Squared to Meters/Sec Squared",
			3 => "Meters/Sec Squared to Feet/Sec Squared",
			4 => "Meters/Sec Squared to Inches/Sec Squared",
		);

		$this->function_list = array(
			$this->function_strings[1] => function($num=NULL){
				$result = $num * 0.03048;
				return array($result, $this->pluralize($result, 'Meter/Sec<sup>2</sup>'));
			},
			$this->function_strings[2] => function($num=NULL){
				$result = $num * 0.0254;
				return array($result, $this->pluralize($result, 'Meter/Sec<sup>2</sup>'));
			},
			$this->function_strings[3] => function ($num=NULL){
				$result = $num * 3.281;
				return array($result, $this->pluralize($result, 'Foot/Sec<sup>2</sup>'));
			},
			$this->function_strings[4] => function($num=NULL){
				$result = $num * 39.37;
				return array($result, $this->pluralize($result, 'Inch/Sec<sup>2</sup>'));
			}
		);

		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Feet/Sec<sup>2</sup> (input): '),
			$this->function_strings[3] => array(
				'number_input' => 'Meters/Sec<sup>2</sup> (input): '),
			$this->function_strings[2] => array(
				'number_input' => 'Inches/Sec<sup>2</sup> (input): '),
			$this->function_strings[4] => array(
				'number_input' => 'Meters/Sec<sup>2</sup> (input): ')
		);

		$this->formula_list = array(
			$this->function_strings[1] => array(
				'Formula:<br> ' => 'Feet/Sec<sup>2</sup> * 0.0348'),
			$this->function_strings[2] => array(
				'Formula:<br> ' => 'Inches/Sec<sup>2</sup> * 0.0254'),
			$this->function_strings[3] => array(
				'Formula:<br> ' => 'Meters/Sec<sup>2</sup> * 3.281'),
			$this->function_strings[4] => array(
				'Formula:<br> ' => 'Meters/Sec<sup>2</sup> * 39.37')
		);
	}
}
