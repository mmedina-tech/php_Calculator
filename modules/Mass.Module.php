<?php
# SYNOPSIS: Calculate Different Kinds of Mass
#
# Mass.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:30 PM PDT
# Last Update: 2022-03-05: 18:36
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

class Mass extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Tons to Kilograms',
                function($num){
                    $result = $num * 907.18474;
                    return array($result, $this->pluralize($result, 'Kilogram'));
                },
                array(
                    'number_input' => 'Tons (input): ',
                ),
                array(
                    '' => 'Tons * 907.18474'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilograms to Tons',
                function($num){
                    $result = $num * 0.0011023113;
                    return array($result, $this->pluralize($result, 'Ton'));
                },
                array(
                    'number_input' => 'Kilograms (input): ',
                ),
                array(
                    '' => 'Kilograms * 0.0011023113'
                ),
            ),
            FormulaBase::create_func_entry(
                'Tons to Metric Tons',
                function($num){
                    $result = $num * 0.90718474;
                    return array($result, $this->pluralize($result, 'Metric Ton'));
                },
                array(
                    'number_input' => 'Tons (input): ',
                ),
                array(
                    '' => 'Tons * 0.90718474'
                ),
            ),
            FormulaBase::create_func_entry(
                'Metric Tons to Tons',
                function($num){
                    $result = $num * 1.1023113;
                    return array($result, $this->pluralize($result, 'Ton'));
                },
                array(
                    'number_input' => 'Metric Tons (input): ',
                ),
                array(
                    '' => 'Metric Tons * 1.1023113'
                ),
            ),
            FormulaBase::create_func_entry(
                'Grains to Drams',
                function($num){
                    $result = $num * 0.036571429;
                    return array($result, $this->pluralize($result, 'Dram'));
                },
                array(
                    'number_input' => 'Grains (input): ',
                ),
                array(
                    '' => 'Grains * 0.036571429'
                ),
            ),
            FormulaBase::create_func_entry(
                'Grains to Ounces',
                function($num){
                    $result = $num * 0.0022857143;
                    return array($result, $this->pluralize($result, 'Ounce'));
                },
                array(
                    'number_input' => 'Grains (input): ',
                ),
                array(
                    '' => 'Grains * 0.0022857143'
                ),
            ),
            FormulaBase::create_func_entry(
                'Grains to Grams',
                function($num){
                    $result = $num * 0.06479891;
                    return array($result, $this->pluralize($result, 'Gram'));
                },
                array(
                    'number_input' => 'Grains (input): ',
                ),
                array(
                    '' => 'Grains * 0.06479891'
                ),
            ),
        );
    }
}
$cats["Mass"] = new Mass();
