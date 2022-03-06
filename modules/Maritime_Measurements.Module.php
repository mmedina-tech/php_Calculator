<?php
# SYNOPSIS: Maritime Calculations
#
# Maritime_Measurements.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:05 PM PDT
# Last Update: 2022-03-05: 18:57
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

class Maritime_Measurements extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Fathoms to Feet',
                function($num){
                    $result = $num * 6;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Fathoms (input): ',
                ),
                array(
                    '' => 'Fathom * 6'
                ),
            ),
            FormulaBase::create_func_entry(
                'Cable to Fathom',
                function($num){
                    $result = $num * 101.26859;
                    return array($result, $this->pluralize($result, 'Fathom'));
                },
                array(
                    'number_input' => 'Cable (input): ',
                ),
                array(
                    '' => 'Cable * 101.26859'
                ),
            ),
            FormulaBase::create_func_entry(
                'Nautical Mile to Feet',
                function($num){
                    $result = $num * 6076.1155;
                    return array($result, $this->pluralize($result, 'Foot'));
                },
                array(
                    'number_input' => 'Nautical Mile (input): ',
                ),
                array(
                    '' => 'Nautical Mile * 6076.1155'
                ),
            ),
            FormulaBase::create_func_entry(
                'Fathoms to Meters',
                function($num){
                    $result = $num * 1.8288;
                    return array($result, $this->pluralize($result, 'Meter'));
                },
                array(
                    'number_input' => 'Fathom (input): ',
                ),
                array(
                    '' => 'Fathoms * 1.8288'
                ),
            ),
            FormulaBase::create_func_entry(
                'Nautical Miles to Cables',
                function($num){
                    $result = $num * 10;
                    return array($result, $this->pluralize($result, 'Cable'));
                },
                array(
                    'number_input' => 'Nautical Mile (input): ',
                ),
                array(
                    '' => 'Nautical Mile * 10'
                ),
            ),
            FormulaBase::create_func_entry(
                'Nautical Miles to Meters',
                function($num){
                    $result = $num * 1852;
                    return array($result, $this->pluralize($result, 'Meter'));
                },
                array(
                    'number_input' => 'Nautical Mile (input): ',
                ),
                array(
                    '' => 'Nautical Mile * 1852'
                ),
            ),
            FormulaBase::create_func_entry(
                'Nautical Miles to Statute Miles',
                function($num){
                    $result = $num * 1.1507794;
                    return array($result, $this->pluralize($result, 'Statute Mile'));
                },
                array(
                    'number_input' => 'Nautical Mile (input): ',
                ),
                array(
                    '' => 'Nautical Mile * 1.1507794'
                ),
            ),
            FormulaBase::create_func_entry(
                'Knots to Nautical Miles per Hour',
                function($num){
                    $result = $num * 1;
                    return array($result, $this->pluralize($result, 'Nautical Mile/Hr'));
                },
                array(
                    'number_input' => 'Knot (input): ',
                ),
                array(
                    '' => 'Knots * 1'
                ),
            ),
            FormulaBase::create_func_entry(
                'Meters to Fathoms',
                function($num){
                    $result = $num * 0.54680665;
                    return array($result, $this->pluralize($result, 'Fathom'));
                },
                array(
                    'number_input' => 'Meter (input): ',
                ),
                array(
                    '' => 'Meter * 0.54680665'
                ),
            ),
            FormulaBase::create_func_entry(
                'Nautical Miles to Kilometers',
                function($num){
                    $result = $num * 1.852;
                    return array($result, $this->pluralize($result, 'Kilometer'));
                },
                array(
                    'number_input' => 'Nautical Mile (input): ',
                ),
                array(
                    '' => 'Nautical Mile * 1.852'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilometers to Nautical Miles',
                function($num){
                    $result = $num * 0.5399568;
                    return array($result, $this->pluralize($result, 'Nautical Mile'));
                },
                array(
                    'number_input' => 'Kilometers (input): ',
                ),
                array(
                    '' => 'Kilometer * 0.5399568'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles to Nautical Miles',
                function($num){
                    $result = $num * 0.86897624;
                    return array($result, $this->pluralize($result, 'Nautical Mile'));
                },
                array(
                    'number_input' => 'Miles (input): ',
                ),
                array(
                    '' => 'Mile * 0.86897624'
                ),
            ),
            FormulaBase::create_func_entry(
                'Knots to Kilometer per Hour',
                function($num){
                    $result = $num * 1.852;
                    return array($result, $this->pluralize($result, 'Kilometer/Hr'));
                },
                array(
                    'number_input' => 'Knots (input): ',
                ),
                array(
                    '' => 'Knot * 1.852'
                ),
            ),
            FormulaBase::create_func_entry(
                'Kilometers per Hour to Knots',
                function($num){
                    $result = $num * 0.5399568;
                    return array($result, $this->pluralize($result, 'Knot'));
                },
                array(
                    'number_input' => 'Kilometers per Hour (input): ',
                ),
                array(
                    '' => 'Kilometer per Hour * 0.5399568'
                ),
            ),
            FormulaBase::create_func_entry(
                'Knots to Miles per Hour',
                function($num){
                    $result = $num * 1.1507794;
                    return array($result, $this->pluralize($result, 'Mile/Hr'));
                },
                array(
                    'number_input' => 'Knots (input): ',
                ),
                array(
                    '' => 'Knot * 1.1507794'
                ),
            ),
            FormulaBase::create_func_entry(
                'Miles per Hour to Knots',
                function($num){
                    $result = $num * 0.86897624;
                    return array($result, $this->pluralize($result, 'Knot'));
                },
                array(
                    'number_input' => 'Miles per Hour (input): ',
                ),
                array(
                    '' => 'Mile per Hour * 0.86897624'
                ),
            ),
        );
    }
}
$cats["Maritime Measurements"] = new Maritime_Measurements();
