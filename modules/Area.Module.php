<?php
# SYNOPSIS: Module for calculating Area
#
# Area.php
#
# Author: Marcus Medina
# Date: Fri 05 Nov 2021 08:08:27 AM PDT
# Last Update: 2022-03-02: 15:07
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
            FormulaBase::create_func_entry(
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
        );


        #{{{ Function Titles
        $this->function_strings = array(
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
            $this->function_strings[21] => function($num){
                $result = $num * 0.01;
                return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
            },
            $this->function_strings[22] => function($num){
                $result = $num * 0.000206612;
                return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
            },
            $this->function_strings[23] => function($num){
                $result = $num * 0.0002471052;
                return array($result, $this->pluralize($result, 'Meter<sup>2</sup>'));
            },
            $this->function_strings[24] => function($num){
                $result = $num * 0.0015625;
                return array($result, $this->pluralize($result, 'Acre'));
            },
            $this->function_strings[25] => function($num){
                $result = $num * 0.0015625;
                return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
            },
            $this->function_strings[26] => function($num){
                $result = $num * 1;
                return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
            },
            $this->function_strings[27] => function($num){
                $result = $num * 0.027777778;
                return array($result, $this->pluralize($result, 'Section'));
            },
            $this->function_strings[28] => function($num){
                $result = $num * 0.027777778;
                return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
            },
            $this->function_strings[29] => function($num){
                $result = $num * 0.010725011;
                return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
            },
            $this->function_strings[30] => function($num){
                $result = $num * 0.00064516;
                return array($result, $this->pluralize($result, 'Centiare'));
            },
            $this->function_strings[31] => function($num){
                $result = $num * 0.0083612736;
                return array($result, $this->pluralize($result, 'Are'));
            },
            $this->function_strings[32] => function($num){
                $result = $num * 0.0040468554;
                return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
            },
            $this->function_strings[33] => function($num){
                $result = $num * 0.38610216;
                return array($result, $this->pluralize($result, 'Mile<sup>2</sup>'));
            },
            $this->function_strings[34] => function($num){
                $result = $num * 0.15500031;
                return array($result, $this->pluralize($result, 'Inch<sup>2</sup>'));
            },
            $this->function_strings[35] => function($num){
                $result = $num * 0.015942251;
                return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
            },
            $this->function_strings[36] => function($num){
                $result = $num * 1.19599;
                return array($result, $this->pluralize($result, 'Yard<sup>2</sup>'));
            },
            $this->function_strings[37] => function($num){
                $result = $num * 20.661157;
                return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
            },
            $this->function_strings[38] => function($num){
                $result = $num * 0.0016000056;
                return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
            },
            $this->function_strings[39] => function($num){
                $result = $num * 0.033057966;
                return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
            },
            $this->function_strings[40] => function($num){
                $result = $num * 0.062499783;
                return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
            },
            $this->function_strings[41] => function($num){
                $result = $num * 0.1;
                return array($result, $this->pluralize($result, 'Acre'));
            },
            $this->function_strings[42] => function($num){
                $result = $num * 0.0015625;
                return array($result, $this->pluralize($result, 'Section'));
            },
            $this->function_strings[43] => function($num){
                $result = $num * 0.027777778;
                return array($result, $this->pluralize($result, 'Township'));
            },
            $this->function_strings[44] => function($num){
                $result = $num * 43560;
                return array($result, $this->pluralize($result, 'Foot<sup>2</sup>'));
            },
            $this->function_strings[45] => function($num){
                $result = $num * 100;
                return array($result, $this->pluralize($result, 'Centiare'));
            },
            $this->function_strings[46] => function($num){
                $result = $num * 0.01;
                return array($result, $this->pluralize($result, 'Are'));
            },
            $this->function_strings[47] => function($num){
                $result = $num * 100;
                return array($result, $this->pluralize($result, 'Are'));
            },
            $this->function_strings[48] => function($num){
                $result = $num * 40.468564;
                return array($result, $this->pluralize($result, 'Are'));
            },
            $this->function_strings[49] => function($num){
                $result = $num * 0.01;
                return array($result, $this->pluralize($result, 'Hectare'));
            },
            $this->function_strings[50] => function($num){
                $result = $num * 100;
                return array($result, $this->pluralize($result, 'Hectare'));
            },
            $this->function_strings[51] => function($num){
                $result = $num * 2.5899881;
                return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
            },
            $this->function_strings[52] => function($num){
                $result = $num * 0.01;
                return array($result, $this->pluralize($result, 'Kilometer<sup>2</sup>'));
            },
            $this->function_strings[53] => function($num){
                $result = $num * 0.0024710538;
                return array($result, $this->pluralize($result, 'Link<sup>2</sup>'));
            },
            $this->function_strings[54] => function($num){
                $result = $num * 0.039536999;
                return array($result, $this->pluralize($result, 'Pole<sup>2</sup>'));
            },
            $this->function_strings[55] => function($num){
                $result = $num * 0.0024710538;
                return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
            },
            $this->function_strings[56] => function($num){
                $result = $num * 0.0020661157;
                return array($result, $this->pluralize($result, 'Chain<sup>2</sup>'));
            },
            $this->function_strings[57] => function($num){
                $result = $num * 0.00024710538;
                return array($result, $this->pluralize($result, 'Acre'));
            },
            $this->function_strings[58] => function($num){
                $result = $num * 0.00020661157;
                return array($result, $this->pluralize($result, 'Acre'));
            },
            $this->function_strings[59] => function($num){
                $result = $num * 0.38610216;
                return array($result, $this->pluralize($result, 'Section'));
            },
            $this->function_strings[60] => function($num){
                $result = $num * 1;
                return array($result, $this->pluralize($result, 'Section'));
            },
        );
        #}}}

        #{{{ Inputs
        $this->functions_inputs = array(
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
            $this->function_strings[21] => array(                #acre3
                '' => 'Acre * 0.01'
            ),
            $this->function_strings[22] => array(                 #acre4
                '' => 'Acre * 0.000206612'
            ),
            $this->function_strings[23] => array(                #acre5
                '' => 'Acre * 0.0002471052'
            ),
            $this->function_strings[24] => array(                     #section
                '' => 'Section * 0.0015625'
            ),
            $this->function_strings[25] => array(              #section2
                '' => 'Section * 0.0015625'
            ),
            $this->function_strings[26] => array(         #section3
                '' => 'Section * 1'
            ),
            $this->function_strings[27] => array(                 #town
                '' => 'Township * 0.027777778'
            ),
            $this->function_strings[28] => array(             #town2
                '' => 'Township * 0.027777778'
            ),
            $this->function_strings[29] => array(        #town3
                '' => 'Township * 0.010725011'
            ),
            $this->function_strings[30] => array(             #sqin2
                '' => 'Square Inch * 0.00064516'
            ),
            $this->function_strings[31] => array(                  #sqyrd
                '' => 'Square Yard * 0.0083612736'
            ),
            $this->function_strings[32] => array(            #acre6
                '' => 'Acre * 0.0040468554'
            ),
            $this->function_strings[33] => array(     #sqkm
                '' => 'Square Kilometer * 0.38610216'
            ),
            $this->function_strings[34] => array(    #sqcm
                '' => 'Square Centimeter * 0.15500031'
            ),
            $this->function_strings[35] => array(          #sqin3
                '' => 'Square Inch * 0.015942251'
            ),
            $this->function_strings[36] => array(         #sqm
                '' => 'Square Meter * 1.19599'
            ),
            $this->function_strings[37] => array(          #sqyrd2
                '' => 'Square Yard * 20.661157025'
            ),
            $this->function_strings[38] => array(          #link3
                '' => 'Square Link * 0.0016000056'
            ),
            $this->function_strings[39] => array(          #sqyrd3
                '' => 'Square Yard * 0.033057966'
            ),
            $this->function_strings[40] => array(         #spole4
                '' => 'Square Pole * 0.062499783'
            ),
            $this->function_strings[41] => array(                #schain4
                '' => 'Square Chain * 0.1'
            ),
            $this->function_strings[42] => array(                     #acre7
                '' => 'Acre * 0.0015625'
            ),
            $this->function_strings[43] => array(                 #section4
                '' => 'Section * 0.027777778'
            ),
            $this->function_strings[44] => array(                 #acre8
                '' => 'Acre * 43560'
            ),
            $this->function_strings[45] => array(
                '' => 'Are * 100'
            ),
            $this->function_strings[46] => array(
                '' => 'Centiare * 0.01'
            ),
            $this->function_strings[47] => array(
                '' => 'Hectare * 100'
            ),
            $this->function_strings[48] => array(
                '' => 'Acre * 40.468564'
            ),
            $this->function_strings[49] => array(
                '' => 'Are * 0.01'
            ),
            $this->function_strings[50] => array(
                '' => 'Kilometer<sup>2</sup> * 100'
            ),
            $this->function_strings[51] => array(
                '' => 'Mile<sup>2</sup> * 2.5899881'
            ),
            $this->function_strings[52] => array(
                '' => 'Hectare * 0.01'
            ),
            $this->function_strings[53] => array(
                '' => 'Centimeter<sup>2</sup> * 0.0024710538'
            ),
            $this->function_strings[54] => array(
                '' => 'Meter<sup>2</sup> * 0.039536999'
            ),
            $this->function_strings[55] => array(
                '' => 'Meter<sup>2</sup> * 0.0024710538'
            ),
            $this->function_strings[56] => array(
                '' => 'Yard<sup>2</sup> * 0.0020661157'
            ),
            $this->function_strings[57] => array(
                '' => 'Meter<sup>2</sup> * 0.00024710538'
            ),
            $this->function_strings[58] => array(
                '' => 'Yard<sup>2</sup> * 0.00020661157'
            ),
            $this->function_strings[59] => array(
                '' => 'Kilometer<sup>2</sup> * 0.38610216'
            ),
            $this->function_strings[60] => array(
                '' => 'Mile<sup>2</sup> * 1'
            ),
        );
        #}}}
    }
}


