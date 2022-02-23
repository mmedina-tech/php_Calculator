<?php
# SYNOPSIS: Test for Imperial_to_Metric Module
#
# Imperial_Met_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:43:44 PM PST
# Last Update: 2022-02-23: 15:27
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

require_once("pass_fail.php");
require_once("imports.inc.php");
$test = new TestSuite();

function test_Imp_to_Met($test, $class){
    $pass = 0;
    $fail = 0;
    #{{{
    if ( $class->function_list[$class->function_strings[1]](234) !== array(((234 - 32) * 5/9), "Celsius")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234) !== array(234*0.76455486, "Meters<sup>3</sup>")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234) !== array(234*0.3048, "Meters")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234) !== array(234*3.7854118, "Liters")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234) !== array(234*25.4, "Millimeters")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234) !== array(234*2.54, "Centimeters")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234) !== array(234*1.609344, "Kilometers")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234) !== array(234*28.349523, "Grams")){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234) !== array(234*0.47317647, "Liters")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234) !== array(234*0.94635295, "Liters")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[11]](234) !== array(234*0.45359237, "Kilograms")){
        $test->set_fail($class->function_strings[11]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[11]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[12]](234) !== array(234*0.09290304, "Meters<sup>2</sup>")){
        $test->set_fail($class->function_strings[12]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[12]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[13]](234) !== array(234*2.5899881, "Kilometers<sup>2</sup>")){
        $test->set_fail($class->function_strings[13]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[13]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[14]](234) !== array(234*0.83612736, "Meters<sup>2</sup>")){
        $test->set_fail($class->function_strings[14]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[14]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[15]](234) !== array(234*0.9144, "Meters")){
        $test->set_fail($class->function_strings[15]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[15]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[16]](234) !== array(234*764554.86, "Centimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[16]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[16]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[17]](234) !== array(234*764554860, "Millimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[17]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[17]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[18]](234) !== array(234*0.0254, "Meters")){
        $test->set_fail($class->function_strings[18]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[18]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[19]](234) !== array(234*2.54e-5, "Kilometer")){
        $test->set_fail($class->function_strings[19]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[19]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[20]](234) !== array(234*304.8, "Millimeters")){
        $test->set_fail($class->function_strings[20]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[20]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[21]](234) !== array(234*30.48, "Centimeters")){
        $test->set_fail($class->function_strings[21]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[22]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[22]](234) !== array(234*0.0003048, "Kilometer")){
        $test->set_fail($class->function_strings[22]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[22]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[23]](234) !== array(234*378.54118, "Centiliters")){
        $test->set_fail($class->function_strings[23]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[23]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[24]](234) !== array(234*37.854118, "Deciliters")){
        $test->set_fail($class->function_strings[24]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[24]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[25]](234) !== array(234*3785.4118, "Milliliters")){
        $test->set_fail($class->function_strings[25]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[25]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[26]](234) !== array(234*1609344, "Millimeters")){
        $test->set_fail($class->function_strings[26]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[26]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[27]](234) !== array(234*160934.4, "Centimeters")){
        $test->set_fail($class->function_strings[27]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[27]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[28]](234) !== array(234*1603.344, "Meters")){
        $test->set_fail($class->function_strings[28]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[28]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[29]](234) !== array(234*0.028349523, "Kilograms")){
        $test->set_fail($class->function_strings[29]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[29]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[30]](234) !== array(234*47.317647, "Centiliters")){
        $test->set_fail($class->function_strings[30]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[30]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[31]](234) !== array(234*4.7317647, "Deciliters")){
        $test->set_fail($class->function_strings[31]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[31]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[32]](234) !== array(234*473.17647, "Milliliters")){
        $test->set_fail($class->function_strings[32]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[32]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[33]](234) !== array(234*94.635295, "Centiliters")){
        $test->set_fail($class->function_strings[33]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[33]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[34]](234) !== array(234*946.35295, "Milliliters")){
        $test->set_fail($class->function_strings[34]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[34]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[35]](234) !== array(234*9.4635295, "Deciliters")){
        $test->set_fail($class->function_strings[35]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[35]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[36]](234) !== array(234*453.59237, "Grams")){
        $test->set_fail($class->function_strings[36]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[36]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[37]](234) !== array(234*929.0304, "Centimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[37]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[37]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[38]](234) !== array(234*92903.04, "Millimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[38]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[38]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[39]](234) !== array(234*9.290304E-8, "Kilometer<sup>2</sup>")){
        $test->set_fail($class->function_strings[39]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[39]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[40]](234) !== array(234*2.5899881e10, "Centimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[40]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[40]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[41]](234) !== array(234*2.5899881e12, "Millimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[41]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[41]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[42]](234) !== array(234*2589988.1, "Meters<sup>2</sup>")){
        $test->set_fail($class->function_strings[42]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[42]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[43]](234) !== array(234*8361.2736, "Centimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[43]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[43]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[44]](234) !== array(234*836127.36, "Millimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[44]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[44]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[45]](234) !== array(234*8.3612736e-7, "Kilometer<sup>2</sup>")){
        $test->set_fail($class->function_strings[45]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[45]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[46]](234) !== array(234*645.16, "Millimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[46]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[46]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[47]](234) !== array(234*6.4516, "Centimeters<sup>2</sup>")){
        $test->set_fail($class->function_strings[47]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[47]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[48]](234) !== array(234*0.00064516, "Meter<sup>2</sup>")){
        $test->set_fail($class->function_strings[48]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[48]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[49]](234) !== array(234*6.4516e-10, "Kilometer<sup>2</sup>")){
        $test->set_fail($class->function_strings[49]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[49]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[50]](234) !== array(234*914.4, "Millimeters")){
        $test->set_fail($class->function_strings[50]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[50]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[51]](234) !== array(234*91.44, "Centimeters")){
        $test->set_fail($class->function_strings[51]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[51]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[52]](234) !== array(234*0.0009144, "Kilometer")){
        $test->set_fail($class->function_strings[52]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[52]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[53]](234) !== array(234*0.76455486, "Meters<sup>3</sup>")){
        $test->set_fail($class->function_strings[53]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[53]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[54]](234) !== array(234*7.6455486e-10, "Kilometer<sup>3</sup>")){
        $test->set_fail($class->function_strings[54]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[54]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[55]](234) !== array(234*236.58824, "Milliliters")){
        $test->set_fail($class->function_strings[55]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[55]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[56]](234) !== array(234*23.658824, "Centiliters")){
        $test->set_fail($class->function_strings[56]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[56]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[57]](234) !== array(234*2.3658824, "Deciliters")){
        $test->set_fail($class->function_strings[57]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[57]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[58]](234) !== array(234*0.23658824, "Liters")){
        $test->set_fail($class->function_strings[58]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[58]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[59]](234) !== array(234*14.786765, "Milliliters")){
        $test->set_fail($class->function_strings[59]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[59]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[60]](234) !== array(234*1.4786765, "Centiliters")){
        $test->set_fail($class->function_strings[60]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[60]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[61]](234) !== array(234*0.14786765, "Deciliters")){
        $test->set_fail($class->function_strings[61]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[61]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[62]](234) !== array(234*0.014786765, "Liters")){
        $test->set_fail($class->function_strings[62]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[62]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[63]](234) !== array(234*4.9289216, "Milliliters")){
        $test->set_fail($class->function_strings[63]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[63]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[64]](234) !== array(234*0.49289216, "Centiliters")){
        $test->set_fail($class->function_strings[64]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[64]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[65]](234) !== array(234*0.049289216, "Deciliters")){
        $test->set_fail($class->function_strings[65]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[65]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[66]](234) !== array(234*0.0049289216, "Liters")){
        $test->set_fail($class->function_strings[66]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[66]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[67]](234) !== array(234*16387.064, "Millimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[67]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[67]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[68]](234) !== array(234*16.387064, "Centimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[68]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[68]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[69]](234) !== array(234*1.6387064e-5, "Meter<sup>3</sup>")){
        $test->set_fail($class->function_strings[69]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[69]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[70]](234) !== array(234*1.6387064e-14, "Kilometer<sup>3</sup>")){
        $test->set_fail($class->function_strings[70]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[70]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[71]](234) !== array(234*28316847, "Millimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[71]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[71]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[72]](234) !== array(234*28316.847, "Centimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[72]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[72]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[73]](234) !== array(234*0.028316847, "Meters<sup>3</sup>")){
        $test->set_fail($class->function_strings[73]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[73]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[74]](234) !== array(234*2.8316847e-11, "Kilometer<sup>3</sup>")){
        $test->set_fail($class->function_strings[74]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[74]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[75]](234) !== array(234*4.1681818e18, "Millimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[75]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[75]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[76]](234) !== array(234*4.1681818e15, "Centimeters<sup>3</sup>")){
        $test->set_fail($class->function_strings[76]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[76]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[77]](234) !== array(234*4.1681818e9, "Meters<sup>3</sup>")){
        $test->set_fail($class->function_strings[77]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[77]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[78]](234) !== array(234*4.1681818, "Kilometers<sup>3</sup>")){
        $test->set_fail($class->function_strings[78]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[78]);
        $pass++;
    }
    #}}}
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}

echo "Preping for Imperial to Metric
--------------------------------------\n";
sleep(1);
$test->pass_fail($impm, test_Imp_to_Met($test, $impm));

