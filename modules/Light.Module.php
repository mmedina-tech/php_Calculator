<?php
# SYNOPSIS: Light Conversions
#
# Light.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:46:34 PM PDT
# Last Update: 2022-03-05: 18:14
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

class Light extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Foot Candles to Lumens/Meter Squared',
                function($num){
                    $result = $num * 10.76391;
                    return array($result, $this->pluralize($result, 'Lumens/Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Foot Candles (input): ',
                ),
                array(
                    '' => 'Foot Candle * 10.76391'
                ),
            ),
            FormulaBase::create_func_entry(
                'Lumens/Meter Squared to Foot Candles'
                function($num){
                    $result = $num * 0.0929;
                    return array($result, $this->pluralize($result, 'Foot Candle'));
                },
                array(
                    'number_input' => 'Lumens/Meter<sup>2</sup> (input): ',
                ),
                array(
                    '' => 'Lumens/Meter<sup>2</sup> * 0.0929'
                ),
            ),
        );
    }
}
$cats["Light"] = new Light();
