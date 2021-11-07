<?php
# SYNOPSIS: Module for calculating Area
# 
# Area.php
#
# Author: Marcus Medina
# Date: Fri 05 Nov 2021 08:08:27 AM PDT
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

include_once("FormulaBase.php");

class Area extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Acres to Hectares',
			2 => 'Hectares to Acres',
			3 => 'Square Inches to Square Feet',
			4 => 'Square Feet to Square Yards',
			5 => 'Square Feet to Square Rods',
			6 => 'Square Rods to Acres',
			7 => 'Acres to Square Miles',
			8 => 'Square Feet to Square Miles',
			9 => 'Square Feet to Acres',
			10 => 'Centiare to Square Inches',
			11 => 'Are to Square Yard',
			12 => 'Square Kilometer to Acre',
			13 => 'Square Link to Square Inch',
			14 => 'Square Link to Square Centimeter',
			15 => 'Square Pole to Square Link',
			16 => 'Square Pole to Square Yard',
			17 => 'Square Pole to Square Meter',
			18 => 'Square Chain to Square Pole',
			19 => 'Square Chain to Square Yard',
			20 => 'Square Chain to Square Meter',
			21 => 'Acre to Square Chain',
			22 => 'Acre to Square Yard',
			23 => 'Acre to Square Meter',
			24 => 'Section to Acre',
			25 => 'Section to Square Mile',
			26 => 'Section to Square Kilometer',
			27 => 'Township to Section',
			28 => 'Township to Square Mile',
			29 => 'Township to Square Kilometer',
			30 => 'Square Inch to Centiare',
			31 => 'Square Yard to Are',
			32 => 'Acre to Square Kilometer',
			33 => 'Square Kilometer to Square Mile',
			34 => 'Square Centimeter to Square Inch',
			35 => 'Square Inch to Square Link',
			36 => 'Square Meter to Square Yard',
			37 => 'Square Yard to Square Link',
			38 => 'Square Link to Square Pole',
			39 => 'Square Yard to Square Pole',
			40 => 'Square Pole to Square Chain',
			41 => 'Square Chain to Acre',
			42 => 'Acre to Section',
			43 => 'Section to Township',
			44 => 'Acre to Square Feet',
			45 => 'Are to Centiare',
			46 => 'Centiare to Are',
			47 => 'Hectare to Are',
			48 => 'Acre to Are',
			49 => 'Are to Hectare',
			50 => 'Square Kilometer to Hectare',
			51 => 'Square Mile to Square Kilometer',
			52 => 'Hectare to Square Kilometer',
			53 => 'Square Centimeter to Square Link',
			54 => 'Square Meter to Square Pole',
			55 => 'Square Meter to Square Chain',
			56 => 'Square Yard to Square Chain',
			57 => 'Square Meter to Acre',
			58 => 'Square Yard to Acre',
			59 => 'Square Kilometer to Section',
			60 => 'Square Mile to Section',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num){
				$result = $num * 0.4047;
				return array($this->prec($result, 4), $this->pluralize($result, 'Hectare'));
			},
			$this->function_strings[2] => function($num){
				$result = $num * 2.471;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[3] => function($num){
				$result = $num * 0.006944444;
				return array($this->prec($result, 4), $this->pluralize($result, 'Square Foot'));
			},
			$this->function_strings[4] => function($num){
				$result = $num * 0.11111111;
				return array($this->prec($result, 4), $this->pluralize($result, 'Square Yard'));
			},
			$this->function_strings[5] => function($num){
				$result = $num * 0.003673095;
				return array($this->prec($result, 4), $this->pluralize($result, 'Square Rod'));
			},
			$this->function_strings[6] => function($num){
				$result = $num * 0.00625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[7] => function($num){
				$result = $num * 0.0015625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Square Mile'));
			},
			$this->function_strings[8] => function($num){
				$result = $num / 27878400;
				return array($this->prec($result, 4), $this->pluralize($result, 'Square Mile'));
			},
			$this->function_strings[9] => function($num){
				$result = $num / 43560;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[10] => function($num){
				$result = $num * 0.000645161;
				return array($this->prec($result, 4), $this->pluralize($result, 'Inch<sup>2</sup>'));
			},
			$this->function_strings[11] => function($num){
				$result = $num * 0.008361204;
				return array($this->prec($result, 4), $this->pluralize($result, 'Yard<sup>2</sup>'));
			},
			$this->function_strings[12] => function($num){
				$result = $num * 0.004046863;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[13] => function($num){
				$result = $num * 0.015941336;
				return array($this->prec($result, 4), $this->pluralize($result, 'Inch<sup>2</sup>'));
			},
			$this->function_strings[14] => function($num){
				$result = $num * 0.002417052;
				return array($this->prec($result, 4), $this->pluralize($result, 'Centimeter<sup>2</sup>'));
			},
			$this->function_strings[15] => function($num){
				$result = $num * 0.0016;
				return array($this->prec($result, 4), $this->pluralize($result, 'Link<sup>2</sup>'));
			},
			$this->function_strings[16] => function($num){
				$result = $num * 0.033057851;
				return array($this->prec($result, 4), $this->pluralize($result, 'Yard<sup>2</sup>'));
			},
			$this->function_strings[17] => function($num){
				$result = $num * 0.029536631;
				return array($this->prec($result, 4), $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[18] => function($num){
				$result = $num * 0.0625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pole<sup>2</sup>'));
			},
			$this->function_strings[19] => function($num){
				$result = $num * 0.002066116;
				return array($this->prec($result, 4), $this->pluralize($result, 'Yard<sup>2</sup>'));
			},
			$this->function_strings[20] => function($num){
				$result = $num * 0.002471052;
				return array($this->prec($result, 4), $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[21] => function($num){
				$result = $num * 0.01;
				return array($this->prec($result, 4), $this->pluralize($result, 'Chain<sup>2</sup>'));
			},
			$this->function_strings[22] => function($num){
				$result = $num * 0.000206612;
				return array($this->prec($result, 4), $this->pluralize($result, 'Yard<sup>2</sup>'));
			},
			$this->function_strings[23] => function($num){
				$result = $num * 0.0002471052;
				return array($this->prec($result, 4), $this->pluralize($result, 'Meter<sup>2</sup>'));
			},
			$this->function_strings[24] => function($num){
				$result = $num * 0.0015625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[25] => function($num){
				$result = $num * 0.0015625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Mile<sup>2</sup>'));
			},
			$this->function_strings[26] => function($num){
				$result = $num * 1;
				return array($this->prec($result, 4), $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[27] => function($num){
				$result = $num * 0.027777778;
				return array($this->prec($result, 4), $this->pluralize($result, 'Section'));
			},
			$this->function_strings[28] => function($num){
				$result = $num * 0.027777778;
				return array($this->prec($result, 4), $this->pluralize($result, 'Mile<sup>2</sup>'));
			},
			$this->function_strings[29] => function($num){
				$result = $num * 0.010725011;
				return array($this->prec($result, 4), $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[30] => function($num){
				$result = $num * 0.00064516;
				return array($this->prec($result, 4), $this->pluralize($result, 'Centiare'));
			},
			$this->function_strings[31] => function($num){
				$result = $num * 0.0083612736;
				return array($this->prec($result, 4), $this->pluralize($result, 'Are'));
			},
			$this->function_strings[32] => function($num){
				$result = $num * 0.0040468554;
				return array($this->prec($result, 4), $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[33] => function($num){
				$result = $num * 0.38610216;
				return array($this->prec($result, 4), $this->pluralize($result, 'Mile<sup>2</sup>'));
			},
			$this->function_strings[34] => function($num){
				$result = $num * 0.15500031;
				return array($this->prec($result, 4), $this->pluralize($result, 'Inch<sup>2</sup>'));
			},
			$this->function_strings[35] => function($num){
				$result = $num * 0.015942251;
				return array($this->prec($result, 4), $this->pluralize($result, 'Link<sup>2</sup>'));
			},
			$this->function_strings[36] => function($num){
				$result = $num * 1.19599;
				return array($this->prec($result, 4), $this->pluralize($result, 'Yard<sup>2</sup>'));
			},
			$this->function_strings[37] => function($num){
				$result = $num * 20.661157;
				return array($this->prec($result, 4), $this->pluralize($result, 'Link<sup>2</sup>'));
			},
			$this->function_strings[38] => function($num){
				$result = $num * 0.0016000056;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pole<sup>2</sup>'));
			},
			$this->function_strings[39] => function($num){
				$result = $num * 0.033057966;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pole<sup>2</sup>'));
			},
			$this->function_strings[40] => function($num){
				$result = $num * 0.062499783;
				return array($this->prec($result, 4), $this->pluralize($result, 'Chain<sup>2</sup>'));
			},
			$this->function_strings[41] => function($num){
				$result = $num * 0.1;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[42] => function($num){
				$result = $num * 0.0015625;
				return array($this->prec($result, 4), $this->pluralize($result, 'Section'));
			},
			$this->function_strings[43] => function($num){
				$result = $num * 0.027777778;
				return array($this->prec($result, 4), $this->pluralize($result, 'Township'));
			},
			$this->function_strings[44] => function($num){
				$result = $num * 43560;
				return array($this->prec($result, 4), $this->pluralize($result, 'Foot<sup>2</sup>'));
			},
			$this->function_strings[45] => function($num){
				$result = $num * 100;
				return array($this->prec($result, 4), $this->pluralize($result, 'Centiare'));
			},
			$this->function_strings[46] => function($num){
				$result = $num * 0.01;
				return array($this->prec($result, 4), $this->pluralize($result, 'Are'));
			},
			$this->function_strings[47] => function($num){
				$result = $num * 100;
				return array($this->prec($result, 4), $this->pluralize($result, 'Are'));
			},
			$this->function_strings[48] => function($num){
				$result = $num * 40.468564;
				return array($this->prec($result, 4), $this->pluralize($result, 'Are'));
			},
			$this->function_strings[49] => function($num){
				$result = $num * 0.01;
				return array($this->prec($result, 4), $this->pluralize($result, 'Hectare'));
			},
			$this->function_strings[50] => function($num){
				$result = $num * 100;
				return array($this->prec($result, 4), $this->pluralize($result, 'Hectare'));
			},
			$this->function_strings[51] => function($num){
				$result = $num * 2.5899881;
				return array($this->prec($result, 4), $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[52] => function($num){
				$result = $num * 0.01;
				return array($this->prec($result, 4), $this->pluralize($result, 'Kilometer<sup>2</sup>'));
			},
			$this->function_strings[53] => function($num){
				$result = $num * 0.0024710538;
				return array($this->prec($result, 4), $this->pluralize($result, 'Link<sup>2</sup>'));
			},
			$this->function_strings[54] => function($num){
				$result = $num * 0.039536999;
				return array($this->prec($result, 4), $this->pluralize($result, 'Pole<sup>2</sup>'));
			},
			$this->function_strings[55] => function($num){
				$result = $num * 0.0024710538;
				return array($this->prec($result, 4), $this->pluralize($result, 'Chain<sup>2</sup>'));
			},
			$this->function_strings[56] => function($num){
				$result = $num * 0.0020661157;
				return array($this->prec($result, 4), $this->pluralize($result, 'Chain<sup>2</sup>'));
			},
			$this->function_strings[57] => function($num){
				$result = $num * 0.00024710538;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[58] => function($num){
				$result = $num * 0.00020661157;
				return array($this->prec($result, 4), $this->pluralize($result, 'Acre'));
			},
			$this->function_strings[59] => function($num){
				$result = $num * 0.38610216;
				return array($this->prec($result, 4), $this->pluralize($result, 'Section'));
			},
			$this->function_strings[60] => function($num){
				$result = $num * 1;
				return array($this->prec($result, 4), $this->pluralize($result, 'Section'));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Acres (input): '
                ),
            $this->function_strings[2] => array(
                'number_input' => 'Hectares (input): '
                ),
            $this->function_strings[3] => array(
                'number_input' => 'Square Inches (input): '
                ),
            $this->function_strings[4] => array(
                'number_input' => 'Square Feet (input): '
                ),
            $this->function_strings[5] => array(
                'number_input' => 'Square Feet (input): '
                ),
            $this->function_strings[6] => array(
                'number_input' => 'Square Rods (input): '
                ),
            $this->function_strings[7] => array(
                'number_input' => 'Acres (input): '
                ),
            $this->function_strings[8] => array(
                'number_input' => 'Square Feet (input): '
                ),
            $this->function_strings[9] => array(
                'number_input' => 'Square Feet (input): '
                ),
            $this->function_strings[10] => array(
                'number_input' => 'Centiare (input): '
                ),
            $this->function_strings[11] => array(
                'number_input' => 'Are (input): '
                ),
            $this->function_strings[12] => array(
                'number_input' => 'Square Kilometer (input): '
                ),
            $this->function_strings[13] => array(
                'number_input' => 'Square Link (input): '
                ),
            $this->function_strings[14] => array(
                'number_input' => 'Square Link (input): '
                ),
            $this->function_strings[15] => array(
                'number_input' => 'Square Pole (input): '
                ),
            $this->function_strings[16] => array(
                'number_input' => 'Square Pole (input): '
                ),
            $this->function_strings[17] => array(
                'number_input' => 'Square Pole (input): '
                ),
            $this->function_strings[18] => array(
                'number_input' => 'Square Chain (input): '
                ),
            $this->function_strings[19] => array(
                    'number_input' => 'Square Chain (input): '
                ),
            $this->function_strings[20] => array(
                    'number_input' => 'Square Chain (input): '
                ),
            $this->function_strings[21] => array(
                    'number_input' => 'Acre (input): '
                ),
            $this->function_strings[22] => array(
                    'number_input' => 'Acre (input): '
                ),
            $this->function_strings[23] => array(
                    'number_input' => 'Acre (input): '
                ),
            $this->function_strings[24] => array(
                    'number_input' => 'Section (input): '
                ),
            $this->function_strings[25] => array(
                    'number_input' => 'Section (input): '
                ),
            $this->function_strings[26] => array(
                    'number_input' => 'Section (input): '
                ),
            $this->function_strings[27] => array(
                    'number_input' => 'Township (input): '
                ),
            $this->function_strings[28] => array(
                    'number_input' => 'Township (input): '
                ),
            $this->function_strings[29] => array(
                    'number_input' => 'Township (input): '
                ),
            $this->function_strings[30] => array(
                'number_input' => 'Square Inch (input): '
                ),
            $this->function_strings[31] => array(
                'number_input' => 'Square Yard (input): '
                ),
            $this->function_strings[32] => array(
                    'number_input' => 'Acre (input): '
                    ),
            $this->function_strings[33] => array(
                'number_input' => 'Square Kilometers (input): '
                ),
            $this->function_strings[34] => array(
                    'number_input' => 'Square Centimeter (input): '
                ),
            $this->function_strings[35] => array(
                    'number_input' => 'Square Inch (input): '
                ),
            $this->function_strings[36] => array(
                    'number_input' => "Square Meter (input): "
                ),
            $this->function_strings[37] => array(
                    'number_input' => 'Square Yard (input): '
                ),
            $this->function_strings[38] => array(
                    'number_input' => 'Square Link (input): '
                ),
            $this->function_strings[39] => array(
                    'number_input' => 'Square Yard (input): '
                ),
            $this->function_strings[40] => array(
                    'number_input' => 'Square Pole (input): '
                ),
            $this->function_strings[41] => array(
                    'number_input' => 'Square Chain (input): '
                ),
            $this->function_strings[42] => array(
                    'number_input' => 'Acre (input): '
                ),
            $this->function_strings[43] => array(
                'number_input' => "Section (input): "
                ),
            $this->function_strings[44] => array(
                    'number_input' => 'Acre (input): '
                ),
            $this->function_strings[45] => array(
                'number_input' => 'Are (input): '
                ),
            $this->function_strings[46] => array(
                'number_input' => 'Centiare (input): '
                ),
            $this->function_strings[47] => array(
                'number_input' => 'Hectare (input): '
                ),
            $this->function_strings[48] => array(
                'number_input' => 'Acre (input): '
                ),
            $this->function_strings[49] => array(
                'number_input' => 'Are (input): '
                ),
            $this->function_strings[50] => array(
                'number_input' => 'Square Kilometer (input): '
                ),
            $this->function_strings[51] => array(
                    'number_input' => 'Square Mile (input): '
                    ),
            $this->function_strings[52] => array(
                    'number_input' => 'Hectare (input): '
                    ),
            $this->function_strings[53] => array(
                    'number_input' => 'Square Centimeter (input): '
                ),
            $this->function_strings[54] => array(
                    'number_input' => 'Square Meter (input): '
                ),
            $this->function_strings[55] => array(
                    'number_input' => 'Square Meter (input): '
                ),
            $this->function_strings[56] => array(
                    'number_input' => 'Square Yard (input): '
                ),
            $this->function_strings[57] => array(
                    'number_input' => 'Square Meter (input): '
                ),
            $this->function_strings[58] => array(
                    'number_input' => 'Square Yard (input): '
                ),
            $this->function_strings[59] => array(
                    'number_input' => 'Square Kilometer (input): '
                ),
            $this->function_strings[60] => array(
                    'number_input' => 'Square Mile (input): '
                ),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
            $this->function_strings[1] => array(                   #acre
                'Formula:<br>' => 'Acres * 0.4047'
			),
            $this->function_strings[2] => array(                   #hect
                'Formula:<br>' => 'Hectare * 2.471'
			),
            $this->function_strings[3] => array(        #sqin
                'Formula:<br>' => 'Square Inch * 0.006944444'
			),
            $this->function_strings[4] => array(         #sqft
                'Formula:<br>' => 'Square Foot * 0.11111111'
			),
            $this->function_strings[5] => array(          #sqft2
                'Formula:<br>' => 'Square Foot * 0.003673095'
			),
            $this->function_strings[6] => array(                #sqrd
                'Formula:<br>' => 'Square Rod * 0.00625'
			),
            $this->function_strings[7] => array(               #acre2
                'Formula:<br>' => 'Acre * 0.0015625'
			),
            $this->function_strings[8] => array(         #sqft3
                'Formula:<br>' => 'Square Feet / 27828400'
			),
            $this->function_strings[9] => array(                #sqft4
                'Formula:<br>' => 'Square Feet / 43560'
			),
            $this->function_strings[10] => array(           #cent
                'Formula:<br>' => 'Centiare * 0.000645161'
			),
            $this->function_strings[11] => array(                  #are
                'Formula:<br>' => 'Are * 0.008361204'
			),
            $this->function_strings[12] => array(            #ska
                'Formula:<br>' => 'Square Kilometer * 0.004046863'
			),
            $this->function_strings[13] => array(          #link
                'Formula:<br>' => 'Square Link * 0.015941336'
			),
            $this->function_strings[14] => array(    #link2
                'Formula:<br>' => 'Square Link * 0.002417052'
			),
            $this->function_strings[15] => array(          #spole
                'Formula:<br>' => 'Square Pole * 0.0016'
			),
            $this->function_strings[16] => array(          #spole2
                'Formula:<br>' => 'Square Pole * 0.033057851'
			),
            $this->function_strings[17] => array(         #spole3
                'Formula:<br>' => 'Square Pole * 0.039536631'
			),
            $this->function_strings[18] => array(         #schain
                'Formula:<br>' => 'Square Chain * 0.0625'
			),
            $this->function_strings[19] => array(         #schain2
                'Formula:<br>' => 'Square Chain * 0.002066116'
			),
            $this->function_strings[20] => array(        #schain3
                'Formula:<br>' => 'Square Chain * 0.002471052'
			),
            $this->function_strings[21] => array(                #acre3
                'Formula:<br>' => 'Acre * 0.01'
			),
            $this->function_strings[22] => array(                 #acre4
                'Formula:<br>' => 'Acre * 0.000206612'
			),
            $this->function_strings[23] => array(                #acre5
                'Formula:<br>' => 'Acre * 0.0002471052'
			),
            $this->function_strings[24] => array(                     #section
                'Formula:<br>' => 'Section * 0.0015625'
			),
            $this->function_strings[25] => array(              #section2
                'Formula:<br>' => 'Section * 0.0015625'
			),
            $this->function_strings[26] => array(         #section3
                'Formula:<br>' => 'Section * 1'
			),
            $this->function_strings[27] => array(                 #town
                'Formula:<br>' => 'Township * 0.027777778'
			),
            $this->function_strings[28] => array(             #town2
                'Formula:<br>' => 'Township * 0.027777778'
			),
            $this->function_strings[29] => array(        #town3
                'Formula:<br>' => 'Township * 0.010725011'
			),
            $this->function_strings[30] => array(             #sqin2
                'Formula:<br>' => 'Square Inch * 0.00064516'
			),
            $this->function_strings[31] => array(                  #sqyrd
                'Formula:<br>' => 'Square Yard * 0.0083612736'
			),
            $this->function_strings[32] => array(            #acre6
                'Formula:<br>' => 'Acre * 0.0040468554'
			),
            $this->function_strings[33] => array(     #sqkm
                'Formula:<br>' => 'Square Kilometer * 0.38610216'
			),
            $this->function_strings[34] => array(    #sqcm
                'Formula:<br>' => 'Square Centimeter * 0.15500031'
			),
            $this->function_strings[35] => array(          #sqin3
                'Formula:<br>' => 'Square Inch * 0.015942251'
			),
            $this->function_strings[36] => array(         #sqm
                'Formula:<br>' => 'Square Meter * 1.19599'
			),
            $this->function_strings[37] => array(          #sqyrd2
                'Formula:<br>' => 'Square Yard * 20.661157025'
			),
            $this->function_strings[38] => array(          #link3
                'Formula:<br>' => 'Square Link * 0.0016000056'
			),
            $this->function_strings[39] => array(          #sqyrd3
                'Formula:<br>' => 'Square Yard * 0.033057966'
			),
            $this->function_strings[40] => array(         #spole4
                'Formula:<br>' => 'Square Pole * 0.062499783'
			),
            $this->function_strings[41] => array(                #schain4
                'Formula:<br>' => 'Square Chain * 0.1'
			),
            $this->function_strings[42] => array(                     #acre7
                'Formula:<br>' => 'Acre * 0.0015625'
			),
            $this->function_strings[43] => array(                 #section4
                'Formula:<br>' => 'Section * 0.027777778'
			),
            $this->function_strings[44] => array(                 #acre8
                'Formula:<br>' => 'Acre * 43560'
			),
			$this->function_strings[45] => array(
				'Formula:<br>' => 'Are * 100'
			),
			$this->function_strings[46] => array(
				'Formula:<br>' => 'Centiare * 0.01'
			),
			$this->function_strings[47] => array(
				'Formula:<br>' => 'Hectare * 100'
			),
			$this->function_strings[48] => array(
				'Formula:<br>' => 'Acre * 40.468564'
			),
			$this->function_strings[49] => array(
				'Formula:<br>' => 'Are * 0.01'
			),
			$this->function_strings[50] => array(
				'Formula:<br>' => 'Kilometer<sup>2</sup> * 100'
			),
			$this->function_strings[51] => array(
				'Formula:<br>' => 'Mile<sup>2</sup> * 2.5899881'
			),
			$this->function_strings[52] => array(
				'Formula:<br>' => 'Hectare * 0.01'
			),
			$this->function_strings[53] => array(
				'Formula:<br>' => 'Centimeter<sup>2</sup> * 0.0024710538'
			),
			$this->function_strings[54] => array(
				'Formula:<br>' => 'Meter<sup>2</sup> * 0.039536999'
			),
			$this->function_strings[55] => array(
				'Formula:<br>' => 'Meter<sup>2</sup> * 0.0024710538'
			),
			$this->function_strings[56] => array(
				'Formula:<br>' => 'Yard<sup>2</sup> * 0.0020661157'
			),
			$this->function_strings[57] => array(
				'Formula:<br>' => 'Meter<sup>2</sup> * 0.00024710538'
			),
			$this->function_strings[58] => array(
				'Formula:<br>' => 'Yard<sup>2</sup> * 0.00020661157'
			),
			$this->function_strings[59] => array(
				'Formula:<br>' => 'Kilometer<sup>2</sup> * 0.38610216'
			),
			$this->function_strings[60] => array(
				'Formula:<br>' => 'Mile<sup>2</sup> * 1'
			),
		);
        #}}}
	}
}


