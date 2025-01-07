<?php
# SYNOPSIS: Module for calculating Area
#
# Area.php
#
# Author: Marcus Medina
# Date: Fri 05 Nov 2021 08:08:27 AM PDT
# Last Update: 2022-03-02: 19:46
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Acres to Hectares',
                function($num){
                    $result = $num * 0.4047;
                    return array($result, $this->pluralize($result, 'Hectare'));
                },
                array(
                    'number_input' => 'Acres (input): '
                ),
                array(                   #acre
                    '' => 'Acres * 0.4047'
                ),
            ),
            FormulaBase::create_func_entry(
                'Hectares to Acres',
                function($num){
                    $result = $num * 2.471;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Hectares (input): '
                ),
                array(                   #hect
                    '' => 'Hectare * 2.471'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inches to Square Feet',
                function($num){
                    $result = $num * 0.006944444;
                    return array($result, $this->pluralize($result, 'Square Foot'));
                },
                array(
                    'number_input' => 'Square Inches (input): '
                ),
                array(        #sqin
                    '' => 'Square Inch * 0.006944444'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Yards',
                function($num){
                    $result = $num * 0.11111111;
                    return array($result, $this->pluralize($result, 'Square Yard'));
                },
                array(
                    'number_input' => 'Square Feet (input): '
                ),
                array(         #sqft
                    '' => 'Square Foot * 0.11111111'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Rods',
                function($num){
                    $result = $num * 0.003673095;
                    return array($result, $this->pluralize($result, 'Square Rod'));
                },
                array(
                    'number_input' => 'Square Feet (input): '
                ),
                array(          #sqft2
                    '' => 'Square Foot * 0.003673095'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Rods to Acres',
                function($num){
                    $result = $num * 0.00625;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Square Rods (input): '
                ),
                array(                #sqrd
                    '' => 'Square Rod * 0.00625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acres to Square Miles',
                function($num){
                    $result = $num * 0.0015625;
                    return array($result, $this->pluralize($result, "Square Mile"));
                },
                array(
                    'number_input' => 'Acres (input): '
                ),
                array(               #acre2
                    '' => 'Acre * 0.0015625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Square Miles',
                function($num){
                    $result = $num * 3.5870064e-08;
                    return array($result, $this->pluralize($result, "Square Mile"));
                },
                array(
                    'number_input' => 'Square Feet (input): '
                ),
                array(         #sqft3
                    '' => 'Square Feet / 27828400'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Feet to Acres',
                function($num){
                    $result = $num * 2.2956841e-05;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Square Feet (input): '
                ),
                array(                #sqft4
                    '' => 'Square Feet / 43560'
                ),
            ),
            FormulaBase::create_func_entry(
                'Centiare to Square Inches',
                function($num){
                    $result = $num * 0.000645161;
                    return array($result, $this->pluralize($result, 'Inch<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Centiare (input): '
                ),
                array(           #cent
                    '' => 'Centiare * 0.000645161'
                ),
            ),
            FormulaBase::create_func_entry(
                'Are to Square Yard',
                function($num){
                    $result = $num * 0.008361204;
                    return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Are (input): '
                ),
                array(                  #are
                    '' => 'Are * 0.008361204'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Kilometer to Acre',
                function($num){
                    $result = $num * 0.004046863;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Square Kilometer (input): '
                ),
                array(            #ska
                    '' => 'Square Kilometer * 0.004046863'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Link to Square Inch',
                function($num){
                    $result = $num * 0.015941336;
                    return array($result, $this->pluralize($result, 'Inch<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Link (input): '
                ),
                array(          #link
                    '' => 'Square Link * 0.015941336'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Link to Square Centimeter',
                function($num){
                    $result = $num * 0.002417052;
                    return array($result, $this->pluralize($result, 'Centimeter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Link (input): '
                ),
                array(    #link2
                    '' => 'Square Link * 0.002417052'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Pole to Square Link',
                function($num){
                    $result = $num * 0.0016;
                    return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Pole (input): '
                ),
                array(          #spole
                    '' => 'Square Pole * 0.0016'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Pole to Square Yard',
                function($num){
                    $result = $num * 0.033057851;
                    return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Pole (input): '
                ),
                array(          #spole2
                    '' => 'Square Pole * 0.033057851'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Pole to Square Meter',
                function($num){
                    $result = $num * 0.029536631;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Pole (input): '
                ),
                array(         #spole3
                    '' => 'Square Pole * 0.039536631'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Chain to Square Pole',
                function($num){
                    $result = $num * 0.0625;
                    return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Chain (input): '
                ),
                array(         #schain
                    '' => 'Square Chain * 0.0625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Chain to Square Yard',
                function($num){
                    $result = $num * 0.002066116;
                    return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
                },
                array(
                        'number_input' => 'Square Chain (input): '
                ),
                array(         #schain2
                    '' => 'Square Chain * 0.002066116'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Chain to Square Meter',
                function($num){
                    $result = $num * 0.002471052;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Chain (input): '
                ),
                array(        #schain3
                    '' => 'Square Chain * 0.002471052'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Square Chain',
                function($num){
                    $result = $num * 0.01;
                    return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(                #acre3
                    '' => 'Acre * 0.01'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Square Yard',
                function($num){
                    $result = $num * 0.000206612;
                    return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(                 #acre4
                    '' => 'Acre * 0.000206612'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Square Meter',
                function($num){
                    $result = $num * 0.0002471052;
                    return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(                #acre5
                    '' => 'Acre * 0.0002471052'
                ),
            ),
            FormulaBase::create_func_entry(
                'Section to Acre',
                function($num){
                    $result = $num * 0.0015625;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Section (input): '
                ),
                array(                     #section
                    '' => 'Section * 0.0015625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Section to Square Mile',
                function($num){
                    $result = $num * 0.0015625;
                    return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Section (input): '
                ),
                array(              #section2
                    '' => 'Section * 0.0015625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Section to Square Kilometer',
                function($num){
                    $result = $num * 1;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Section (input): '
                ),
                array(         #section3
                    '' => 'Section * 1'
                ),
            ),
            FormulaBase::create_func_entry(
                'Township to Section',
                function($num){
                    $result = $num * 0.027777778;
                    return array($result, $this->pluralize($result, 'Section'));
                },
                array(
                    'number_input' => 'Township (input): '
                ),
                array(                 #town
                    '' => 'Township * 0.027777778'
                ),
            ),
            FormulaBase::create_func_entry(
                'Township to Square Mile',
                function($num){
                    $result = $num * 0.027777778;
                    return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Township (input): '
                ),
                array(             #town2
                    '' => 'Township * 0.027777778'
                ),
            ),
            FormulaBase::create_func_entry(
                'Township to Square Kilometer',
                function($num){
                    $result = $num * 0.010725011;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Township (input): '
                ),
                array(        #town3
                    '' => 'Township * 0.010725011'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inch to Centiare',
                function($num){
                    $result = $num * 0.00064516;
                    return array($result, $this->pluralize($result, 'Centiare'));
                },
                array(
                    'number_input' => 'Square Inch (input): '
                ),
                array(             #sqin2
                    '' => 'Square Inch * 0.00064516'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yard to Are',
                function($num){
                    $result = $num * 0.0083612736;
                    return array($result, $this->pluralize($result, 'Are'));
                },
                array(
                    'number_input' => 'Square Yard (input): '
                ),
                array(                  #sqyrd
                    '' => 'Square Yard * 0.0083612736'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Square Kilometer',
                function($num){
                    $result = $num * 0.0040468554;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(            #acre6
                    '' => 'Acre * 0.0040468554'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Kilometer to Square Mile',
                function($num){
                    $result = $num * 0.38610216;
                    return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Kilometers (input): '
                ),
                array(     #sqkm
                    '' => 'Square Kilometer * 0.38610216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Centimeter to Square Inch',
                function($num){
                    $result = $num * 0.15500031;
                    return array($result, $this->pluralize($result, 'Inch<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Centimeter (input): '
                ),
                array(    #sqcm
                    '' => 'Square Centimeter * 0.15500031'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Inch to Square Link',
                function($num){
                    $result = $num * 0.015942251;
                    return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Inch (input): '
                ),
                array(          #sqin3
                    '' => 'Square Inch * 0.015942251'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Meter to Square Yard',
                function($num){
                    $result = $num * 1.19599;
                    return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
                },
                array(
                    'number_input' => "Square Meter (input): "
                ),
                array(         #sqm
                    '' => 'Square Meter * 1.19599'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yard to Square Link',
                function($num){
                    $result = $num * 20.661157;
                    return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yard (input): '
                ),
                array(          #sqyrd2
                    '' => 'Square Yard * 20.661157025'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Link to Square Pole',
                function($num){
                    $result = $num * 0.0016000056;
                    return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Link (input): '
                ),
                array(          #link3
                    '' => 'Square Link * 0.0016000056'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yard to Square Pole',
                function($num){
                    $result = $num * 0.033057966;
                    return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yard (input): '
                ),
                array(          #sqyrd3
                    '' => 'Square Yard * 0.033057966'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Pole to Square Chain',
                function($num){
                    $result = $num * 0.062499783;
                    return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Pole (input): '
                ),
                array(         #spole4
                    '' => 'Square Pole * 0.062499783'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Chain to Acre',
                function($num){
                    $result = $num * 0.1;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Square Chain (input): '
                ),
                array(                #schain4
                    '' => 'Square Chain * 0.1'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Section',
                function($num){
                    $result = $num * 0.0015625;
                    return array($result, $this->pluralize($result, 'Section'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(                     #acre7
                    '' => 'Acre * 0.0015625'
                ),
            ),
            FormulaBase::create_func_entry(
                'Section to Township',
                function($num){
                    $result = $num * 0.027777778;
                    return array($result, $this->pluralize($result, 'Township'));
                },
                array(
                    'number_input' => "Section (input): "
                ),
                array(                 #section4
                    '' => 'Section * 0.027777778'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Square Feet',
                function($num){
                    $result = $num * 43560;
                    return array($result, $this->pluralize($result, 'Foot<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(                 #acre8
                    '' => 'Acre * 43560'
                ),
            ),
            FormulaBase::create_func_entry(
                'Are to Centiare',
                function($num){
                    $result = $num * 100;
                    return array($result, $this->pluralize($result, 'Centiare'));
                },
                array(
                    'number_input' => 'Are (input): '
                ),
                array(
                    '' => 'Are * 100'
                ),
            ),
            FormulaBase::create_func_entry(
                'Centiare to Are',
                function($num){
                    $result = $num * 0.01;
                    return array($result, $this->pluralize($result, 'Are'));
                },
                array(
                    'number_input' => 'Centiare (input): '
                ),
                array(
                    '' => 'Centiare * 0.01'
                ),
            ),
            FormulaBase::create_func_entry(
                'Hectare to Are',
                function($num){
                    $result = $num * 100;
                    return array($result, $this->pluralize($result, 'Are'));
                },
                array(
                    'number_input' => 'Hectare (input): '
                ),
                array(
                    '' => 'Hectare * 100'
                ),
            ),
            FormulaBase::create_func_entry(
                'Acre to Are',
                function($num){
                    $result = $num * 40.468564;
                    return array($result, $this->pluralize($result, 'Are'));
                },
                array(
                    'number_input' => 'Acre (input): '
                ),
                array(
                    '' => 'Acre * 40.468564'
                ),
            ),
            FormulaBase::create_func_entry(
                'Are to Hectare',
                function($num){
                    $result = $num * 0.01;
                    return array($result, $this->pluralize($result, 'Hectare'));
                },
                array(
                    'number_input' => 'Are (input): '
                ),
                array(
                    '' => 'Are * 0.01'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Kilometer to Hectare',
                function($num){
                    $result = $num * 100;
                    return array($result, $this->pluralize($result, 'Hectare'));
                },
                array(
                    'number_input' => 'Square Kilometer (input): '
                ),
                array(
                    '' => 'Kilometer<sup>2</sup> * 100'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Mile to Square Kilometer',
                function($num){
                    $result = $num * 2.5899881;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Mile (input): '
                ),
                array(
                    '' => 'Mile<sup>2</sup> * 2.5899881'
                ),
            ),
            FormulaBase::create_func_entry(
                'Hectare to Square Kilometer',
                function($num){
                    $result = $num * 0.01;
                    return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Hectare (input): '
                ),
                array(
                    '' => 'Hectare * 0.01'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Centimeter to Square Link',
                function($num){
                    $result = $num * 0.0024710538;
                    return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Centimeter (input): '
                ),
                array(
                    '' => 'Centimeter<sup>2</sup> * 0.0024710538'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Meter to Square Pole',
                function($num){
                    $result = $num * 0.039536999;
                    return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Meter (input): '
                ),
                array(
                    '' => 'Meter<sup>2</sup> * 0.039536999'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Meter to Square Chain',
                function($num){
                    $result = $num * 0.0024710538;
                    return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Meter (input): '
                ),
                array(
                    '' => 'Meter<sup>2</sup> * 0.0024710538'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yard to Square Chain',
                function($num){
                    $result = $num * 0.0020661157;
                    return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
                },
                array(
                    'number_input' => 'Square Yard (input): '
                ),
                array(
                    '' => 'Yard<sup>2</sup> * 0.0020661157'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Meter to Acre',
                function($num){
                    $result = $num * 0.00024710538;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Square Meter (input): '
                ),
                array(
                    '' => 'Meter<sup>2</sup> * 0.00024710538'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Yard to Acre',
                function($num){
                    $result = $num * 0.00020661157;
                    return array($result, $this->pluralize($result, 'Acre'));
                },
                array(
                    'number_input' => 'Square Yard (input): '
                ),
                array(
                    '' => 'Yard<sup>2</sup> * 0.00020661157'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Kilometer to Section',
                function($num){
                    $result = $num * 0.38610216;
                    return array($result, $this->pluralize($result, 'Section'));
                },
                array(
                    'number_input' => 'Square Kilometer (input): '
                ),
                array(
                    '' => 'Kilometer<sup>2</sup> * 0.38610216'
                ),
            ),
            FormulaBase::create_func_entry(
                'Square Mile to Section',
                function($num){
                    $result = $num * 1;
                    return array($result, $this->pluralize($result, 'Section'));
                },
                array(
                    'number_input' => 'Square Mile (input): '
                ),
                array(
                    '' => 'Mile<sup>2</sup> * 1'
                ),
            ),
        );
    }
}

$cats["Area"] = new Area();
