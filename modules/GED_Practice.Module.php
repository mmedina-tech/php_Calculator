<?php
# SYNOPSIS: Formulas for GED type mathematics
#
# GED_Practice.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:45:16 PM PDT
# Last Update: 2022-03-04: 13:43
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
        $this->entrires = array(
            1 => FormulaBase::create_func_entry(
                'Triangle',
                function($num, $num2){
                    $result = 0.5 * $num * $num2;
                    return array($result, $this->pluralize($result, 'Triangle Area'));
                },
                array(
                    'number_input' => 'Base (input): ',
                    'number_input2' => 'Height (input): ',
                ),
                array(
                    '' => '(0.5 * Base) * Height'
                ),
            ),
            FormulaBase::create_func_entry(
                'Circle',
                function($num){
                    $result = pi() * $num^2;
                    return array($result, $this->pluralize($result, 'Circle Area'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                ),
                array(
                    '' => '3.14159 * Radius<sup>2</sup>'
                ),
            ),
            FormulaBase::create_func_entry(
                'Rectangle',
                function($num, $num2){
                    $result = $num * $num2;
                    return array($result, $this->pluralize($result, 'Rectangle Area'));
                },
                array(
                    'number_input' => 'Length (input): ',
                    'number_input2' => 'Width (input): ',
                ),
                array(
                    '' => 'Length * Width'
                ),
            ),
            FormulaBase::create_func_entry(
                'Parallelogram',
                function($num, $num2){
                    $result = $num * $num2;
                    return array($result, $this->pluralize($result, 'Parallelogram Area'));
                },
                array(
                    'number_input' => 'Base (input): ',
                    'number_input2' => 'Height (input): ',
                ),
                array(
                    '' => 'Base * Height'
                ),
            ),
            FormulaBase::create_func_entry(
                'Trapezoid',
                function($num, $num2, $num3){
                    $result = 0.5 * $num * ($num2 + $num3);
                    return array($result, $this->pluralize($result, 'Trapezoid Area'));
                },
                array(
                    'number_input' => 'Height (input): ',
                    'number_input2' => 'Base 1 (input): ',
                    'number_input3' => 'Base 2 (input): ',
                ),
                array(
                    '' => '0.5 * Height * (Base 1 + Base 2)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Rectangular/Right Prism Surface Area',
                function($num, $num2, $num3){
                    $result = $num * $num2 + (2 * $num3);
                    return array($result, $this->pluralize($result, 'Surface Area'));
                },
                array(
                    'number_input' => 'Perimeter of Base (input): ',
                    'number_input2' => 'Height (input): ',
                    'number_input3' => 'Area of Base (input): ',
                ),
                array(
                    '' => 'Perimeter of Base * Height +(2 * Area of Base)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Rectangular/Right Prism Volume',
                function($num, $num2){
                    $result = $num * $num2;
                    return array($result, $this->pluralize($result, 'Rectangle/Right Prism Volume'));
                },
                array(
                    'number_input' => 'Base (input): ',
                    'number_input2' => 'Height (input): ',
                ),
                array(
                    '' => 'Base * Height'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cylinder Surface Area',
                function($num, $num2){
                    $result = (2 * pi() * $num * $num2) + (2 * pi() * $num2^2);
                    return array($result, $this->pluralize($result, 'Cylinder Surface Area'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                    'number_input2' => 'Height (input): ',
                ),
                array(
                    '' => '(2 * 3.14159 * Radius * Height) + (2 * 3.14159 * Height<sup>2</sup>)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cylinder Volume',
                function($num, $num2){
                    $result = pi() * $num^2 * $num2;
                    return array($result, $this->pluralize($result, 'Cylinder Volume'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                    'number_input2' => 'Height (input): ',
                ),
                array(
                    '' => '3.14159 * Radius<sup>2</sup> * Height'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pyramid Surface Area',
                function($num, $num2, $num3){
                    $result = 0.5 * $num * $num2 + $num3;
                    return array($result, $this->pluralize($result, 'Pyramid Surface Area'));
                },
                array(
                    'number_input' => 'Perimeter of Base (input): ',
                    'number_input2' => 'Slant Length (input): ',
                    'number_input3' => 'Area of Length (input): ',
                ),
                array(
                    '' => '0.5 * Perimeter of Base * Slant Length + Area of Base'
                ),
            ),
            FormulaBase::create_func_entry(
                'Pyramid Volume',
                function($num, $num2){
                    $result = 0.333333333333 * $num * $num2;
                    return array($result, $this->pluralize($result, 'Pyramid Volume'));
                },
                array(
                    'number_input' => 'Base (input): ',
                    'number_input2' => 'Height (input): '
                ),
                array(
                    '' => '0.333333333333 * Base * Height'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cone Surface Area',
                function($num, $num2){
                    $result = (pi() * $num * $num2) + (pi() * $num2);
                    return array($result, $this->pluralize($result, 'Cone Surface Area'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                    'number_input2' => 'Slant Length (input): ',
                ),
                array(
                    '' => '(3.14159 * Radius * Slant Length) + (3.14159 * Slant Length)'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cone Volume',
                function($num, $num2){
                    $result = 0.333333333333 * $num^2 * $num2;
                    return array($result, $this->pluralize($result, 'Cone Volume'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                    'number_input2' => 'Height (input): '
                ),
                array(
                    '' => '0.333333333333 * Radius<sup>2</sup> * Height'
                ),
            ),
            FormulaBase::create_func_entry(
                'Sphere Surface Area',
                function($num){
                    $result = 4 * pi() * $num;
                    return array($result, $this->pluralize($result, 'Sphere Surface Area'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                ),
                array(
                    '' => '4 * 3.14159 * Radius'
                ),
            ),
            FormulaBase::create_func_entry(
                'Sphere Volume',
                function($num){
                    $result = 1.333333333333 * pi() * $num;
                    return array($result, $this->pluralize($result, 'Sphere Volume'));
                },
                array(
                    'number_input' => 'Radius (input): ',
                ),
                array(
                    '' => '1.333333333333 * 3.14159 * Radius'
                ),
            ),
        );
    }
}
$cats["GED Practice"] = new GED_Practice();
