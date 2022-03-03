<?php
# SYNOPSIS: Formulas for GED type mathematics
#
# GED_Practice.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:45:16 PM PDT
# Last Update: 2022-03-02: 20:27
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

require_once ("FormulaBase.php");

class GED_Practice extends FormulaBase{
    function __construct(){

        #{{{ Function Titles
        $this->function_strings = array(
            1 => 'Triangle',
            2 => 'Circle',
            3 => 'Rectangle',
            4 => 'Parallelogram',
            5 => 'Trapezoid',
            6 => 'Rectangular/Right Prism Surface Area',
            7 => 'Rectangular/Right Prism Volume',
            8 => 'Cylinder Surface Area',
            9 => 'Cylinder Volume',
            10 => 'Pyramid Surface Area',
            11 => 'Pyramid Volume',
            12 => 'Cone Surface Area',
            13 => 'Cone Volume',
            14 => 'Sphere Surface Area',
            15 => 'Sphere Volume',
        );
        #}}}

        #{{{ Function List
        $this->function_list = array(
            $this->function_strings[1] => function($num, $num2){
                $result = 0.5 * $num * $num2;
                return array($result, $this->pluralize($result, 'Triangle Area'));
            },
            $this->function_strings[2] => function($num){
                $result = pi() * $num^2;
                return array($result, $this->pluralize($result, 'Circle Area'));
            },
            $this->function_strings[3] => function($num, $num2){
                $result = $num * $num2;
                return array($result, $this->pluralize($result, 'Rectangle Area'));
            },
            $this->function_strings[4] => function($num, $num2){
                $result = $num * $num2;
                return array($result, $this->pluralize($result, 'Parallelogram Area'));
            },
            $this->function_strings[5] => function($num, $num2, $num3){
                $result = 0.5 * $num * ($num2 + $num3);
                return array($result, $this->pluralize($result, 'Trapezoid Area'));
            },
            $this->function_strings[6] => function($num, $num2, $num3){
                $result = $num * $num2 + (2 * $num3);
                return array($result, $this->pluralize($result, 'Surface Area'));
            },
            $this->function_strings[7] => function($num, $num2){
                $result = $num * $num2;
                return array($result, $this->pluralize($result, 'Rectangle/Right Prism Volume'));
            },
            $this->function_strings[8] => function($num, $num2){
                $result = (2 * pi() * $num * $num2) + (2 * pi() * $num2^2);
                return array($result, $this->pluralize($result, 'Cylinder Surface Area'));
            },
            $this->function_strings[9] => function($num, $num2){
                $result = pi() * $num^2 * $num2;
                return array($result, $this->pluralize($result, 'Cylinder Volume'));
            },
            $this->function_strings[10] => function($num, $num2, $num3){
                $result = 0.5 * $num * $num2 + $num3;
                return array($result, $this->pluralize($result, 'Pyramid Surface Area'));
            },
            $this->function_strings[11] => function($num, $num2){
                $result = 0.333333333333 * $num * $num2;
                return array($result, $this->pluralize($result, 'Pyramid Volume'));
            },
            $this->function_strings[12] => function($num, $num2){
                $result = (pi() * $num * $num2) + (pi() * $num2);
                return array($result, $this->pluralize($result, 'Cone Surface Area'));
            },
            $this->function_strings[13] => function($num, $num2){
                $result = 0.333333333333 * $num^2 * $num2;
                return array($result, $this->pluralize($result, 'Cone Volume'));
            },
            $this->function_strings[14] => function($num){
                $result = 4 * pi() * $num;
                return array($result, $this->pluralize($result, 'Sphere Surface Area'));
            },
            $this->function_strings[15] => function($num){
                $result = 1.333333333333 * pi() * $num;
                return array($result, $this->pluralize($result, 'Sphere Volume'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->function_inputs = array(
            $this->function_strings[1] => array(
                'number_input' => 'Base (input): ',
                'number_input2' => 'Height (input): ',
            ),
            $this->function_strings[2] => array(
                'number_input' => 'Radius (input): ',
            ),
            $this->function_strings[3] => array(
                'number_input' => 'Length (input): ',
                'number_input2' => 'Width (input): ',
            ),
            $this->function_strings[4] => array(
                'number_input' => 'Base (input): ',
                'number_input2' => 'Height (input): ',
            ),
            $this->function_strings[5] => array(
                'number_input' => 'Height (input): ',
                'number_input2' => 'Base 1 (input): ',
                'number_input3' => 'Base 2 (input): ',
            ),
            $this->function_strings[6] => array(
                'number_input' => 'Perimeter of Base (input): ',
                'number_input2' => 'Height (input): ',
                'number_input3' => 'Area of Base (input): ',
            ),
            $this->function_strings[7] => array(
                'number_input' => 'Base (input): ',
                'number_input2' => 'Height (input): ',
            ),
            $this->function_strings[8] => array(
                'number_input' => 'Radius (input): ',
                'number_input2' => 'Height (input): ',
            ),
            $this->function_strings[9] => array(
                'number_input' => 'Radius (input): ',
                'number_input2' => 'Height (input): ',
            ),
            $this->function_strings[10] => array(
                'number_input' => 'Perimeter of Base (input): ',
                'number_input2' => 'Slant Length (input): ',
                'number_input3' => 'Area of Length (input): ',
            ),
            $this->function_strings[11] => array(
                'number_input' => 'Base (input): ',
                'number_input2' => 'Height (input): '
            ),
            $this->function_strings[12] => array(
                'number_input' => 'Radius (input): ',
                'number_input2' => 'Slant Length (input): ',
            ),
            $this->function_strings[13] => array(
                'number_input' => 'Radius (input): ',
                'number_input2' => 'Height (input): '
            ),
            $this->function_strings[14] => array(
                'number_input' => 'Radius (input): ',
            ),
            $this->function_strings[15] => array(
                'number_input' => 'Radius (input): ',
            ),
        );
        #}}}

        #{{{ Formula List
        $this->formula_list = array(
            $this->function_strings[1] => array(
                'Formula:<br>' => '(0.5 * Base) * Height'
            ),
            $this->function_strings[2] => array(
                'Formula:<br>' => '3.14159 * Radius<sup>2</sup>'
            ),
            $this->function_strings[3] => array(
                'Formula:<br>' => 'Length * Width'
            ),
            $this->function_strings[4] => array(
                'Formula:<br>' => 'Base * Height'
            ),
            $this->function_strings[5] => array(
                'Formula:<br>' => '0.5 * Height * (Base 1 + Base 2)'
            ),
            $this->function_strings[6] => array(
                'Formula:<br>' => 'Perimeter of Base * Height +(2 * Area of Base)'
            ),
            $this->function_strings[7] => array(
                'Formula:<br>' => 'Base * Height'
            ),
            $this->function_strings[8] => array(
                'Formula:<br>' => '(2 * 3.14159 * Radius * Height) + (2 * 3.14159 * Height<sup>2</sup>)'
            ),
            $this->function_strings[9] => array(
                'Formula:<br>' => '3.14159 * Radius<sup>2</sup> * Height'
            ),
            $this->function_strings[10] => array(
                'Formula:<br>' => '0.5 * Perimeter of Base * Slant Length + Area of Base'
            ),
            $this->function_strings[11] => array(
                'Formula:<br>' => '0.333333333333 * Base * Height'
            ),
            $this->function_strings[12] => array(
                'Formula:<br>' => '(3.14159 * Radius * Slant Length) + (3.14159 * Slant Length)'
            ),
            $this->function_strings[13] => array(
                'Formula:<br>' => '0.333333333333 * Radius<sup>2</sup> * Height'
            ),
            $this->function_strings[14] => array(
                'Formula:<br>' => '4 * 3.14159 * Radius'
            ),
            $this->function_strings[15] => array(
                'Formula:<br>' => '1.333333333333 * 3.14159 * Radius'
            ),
        );
        #}}}

    }
}
$cats["GED Practice"] = new GED_Practice();
