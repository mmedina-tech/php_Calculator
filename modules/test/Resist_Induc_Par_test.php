<?php
# SYNOPSIS: Test fot Resistive_Inductive_Parallel Module
# 
# Resist_Induc_Par_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:49:52 PM PST
# Last Update: 2022-02-18: 10:34
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

require_once( 'imports.inc.php' );
require_once( 'pass_fail.php' );
$test = new TestSuite();


function Resist_Induct_Par_test($test, $class){
    $fail = 0;
    $pass = 0;
    if ( $class->function_list[$class->function_strings[1]](234,234) !== array($class->prec(1/((1/pow(234,2))+(1/pow(234,2))), 4), "Impedance")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234,234) !== array($class->prec(234/234, 4), "Impedance")){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234,234) !== array($class->prec(pow(234, 2)/234, 4), "Impedance")){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234,234) !== array($class->prec(234/pow(234,2),4), "Impedance")){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234,234) !== array($class->prec(234*234, 4), "Impedance")){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234,234) !== array($class->prec(2*$class->PI*234*234, 4), "Inductive Reactance")){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](23,234) !== array($class->prec(1/(1/pow(23,2) - (1/pow(234,2))), 4), "Inductive Reactance")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234,234) !== array($class->prec(234/pow(234,2), 4), "Inductive Reactance")){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234,234) !== array($class->prec(234/234, 4), "Inductive Reactance")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234,234) !== array($class->prec(pow(234,2)/234, 4), "Inductive Reactance")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[11]](234,234) !== array($class->prec(234/234, 4), "Inductor Amp")){
        $test->set_fail($class->function_strings[11]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[11]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[12]](234,234) !== array($class->prec(sqrt( 234 / 234 ), 4), "Inductor Amp")){
        $test->set_fail($class->function_strings[12]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[12]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[13]](234,234) !== array($class->prec(234/234, 4), "Inductor Amp")){
        $test->set_fail($class->function_strings[13]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[13]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[14]](234,234) !== array($class->error_msg, "")){
        $test->set_fail($class->function_strings[14]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[14]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[14]](234,23) !== array($class->prec(sqrt(pow(234,2)-pow(23,2)),4), "Inductor Amps")){
        $test->set_fail($class->function_strings[14]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[14]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[15]](234,234) !== array($class->prec(234/(2*$class->PI*234),4), "Inductor Rating")){
        $test->set_fail($class->function_strings[15]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[15]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[16]](234,234) !== array($class->prec(pow(234,2)*234, 4), "Inductor VARs")){
        $test->set_fail($class->function_strings[16]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[16]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[17]](234,234) !== array($class->prec(234*234, 4), "Inductor VARs")){
        $test->set_fail($class->function_strings[17]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[17]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[18]](234,234) !== array($class->prec(pow(234,2)/234, 4), "Inductor VARs")){
        $test->set_fail($class->function_strings[18]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[18]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[19]](234,234) !== array($class->error_msg, "")){
        $test->set_fail($class->function_strings[19]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[19]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[19]](234,23) !== array($class->prec(sqrt(pow(234,2)-pow(23,2)),4), "Inductor VARs")){
        $test->set_fail($class->function_strings[19]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[19]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[20]](234,234) !== array($class->prec(sqrt(234*234),4), "Inductor Volts")){
        $test->set_fail($class->function_strings[20]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[20]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[21]](234,234) !== array($class->prec(234*234, 4), "Inductor Volts")){
        $test->set_fail($class->function_strings[21]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[21]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[22]](234,234) !== array($class->prec(234/234, 4), "Inductor Volt")){
        $test->set_fail($class->function_strings[22]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[22]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[23]](234) !== array($class->prec(cos(234),4), "Power Factor")){
        $test->set_fail($class->function_strings[23]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[23]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[24]](234,234) !== array($class->prec(234/234, 4), "Power Factor")){
        $test->set_fail($class->function_strings[24]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[24]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[25]](234,234) !== array($class->prec(234/234, 4), "Power Factor")){
        $test->set_fail($class->function_strings[25]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[25]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[26]](234,234) !== array($class->prec(234/234, 4), "Power Factor")){
        $test->set_fail($class->function_strings[26]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[26]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[27]](23,234) !== array($class->prec(1/sqrt((1/pow(23,2))-(1/pow(234,2))), 4), "Resistance")){
        $test->set_fail($class->function_strings[27]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[27]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[28]](234,234) !== array($class->prec(234/234, 4), "Resistance")){
        $test->set_fail($class->function_strings[28]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[28]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[29]](234,234) !== array($class->prec(234/234, 4), "Resistance")){
        $test->set_fail($class->function_strings[29]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[29]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[30]](234,234) !== array($class->prec(234/pow(234,2), 4), "Resistance")){
        $test->set_fail($class->function_strings[30]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[30]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[31]](234,234) !== array($class->prec(234/234, 4), "Resistor Amp")){
        $test->set_fail($class->function_strings[31]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[31]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[32]](234,234) !== array($class->error_msg, "")){
        $test->set_fail($class->function_strings[32]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[32]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[32]](234,23) !== array($class->prec(sqrt(pow(234,2)-pow(23,2)), 4), "Resistor Amps")){
        $test->set_fail($class->function_strings[32]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[32]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[33]](234,234) !== array($class->prec(234*234, 4), "Resistor Amps")){
        $test->set_fail($class->function_strings[33]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[33]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[34]](234,234) !== array($class->prec(sqrt(234/234), 4), "Resistor Amp")){
        $test->set_fail($class->function_strings[34]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[34]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[35]](234,234) !== array($class->prec(234/234, 4), "Resistor Amp")){
        $test->set_fail($class->function_strings[35]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[35]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[36]](234,234) !== array($class->prec(234*234, 4), "Resistor Volts")){
        $test->set_fail($class->function_strings[36]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[36]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[37]](234,234) !== array($class->prec(sqrt(234*234), 4), "Resistor Volts")){
        $test->set_fail($class->function_strings[37]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[37]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[38]](234,234) !== array($class->prec(234/234, 4), "Resistor Volt")){
        $test->set_fail($class->function_strings[38]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[38]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[39]](234,234) !== array($class->prec(sqrt(pow(234,2)+pow(234,2)), 4), "Total Amps")){
        $test->set_fail($class->function_strings[39]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[39]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[40]](234,234) !== array($class->prec(234/234, 4), "Total Amp")){
        $test->set_fail($class->function_strings[40]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[40]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[41]](234,234) !== array($class->prec(234/234, 4), "Total Amp")){
        $test->set_fail($class->function_strings[41]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[41]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[42]](234,234) !== array($class->prec(234/234, 4), "Total Amp")){
        $test->set_fail($class->function_strings[42]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[42]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[43]](234,234) !== array($class->prec(sqrt(234/234), 4), "Total Amp")){
        $test->set_fail($class->function_strings[43]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[43]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[44]](234,234) !== array($class->prec(234*234, 4), "Total Volts")){
        $test->set_fail($class->function_strings[44]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[44]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[45]](234,234) !== array($class->prec(sqrt(234*234),4), "Total Volts")){
        $test->set_fail($class->function_strings[45]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[45]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[46]](234,234) !== array($class->prec(234/234, 4), "Total Volt")){
        $test->set_fail($class->function_strings[46]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[46]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[47]](234,234) !== array($class->prec(pow(234,2)*234, 4), "Volt Amps")){
        $test->set_fail($class->function_strings[47]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[47]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[48]](234,234) !== array($class->prec(pow(234,2)/234, 4), "Volt Amps")){
        $test->set_fail($class->function_strings[48]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[48]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[49]](234,234) !== array($class->prec(234*234, 4), "Volt Amps")){
        $test->set_fail($class->function_strings[49]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[49]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[50]](234,234) !== array($class->prec(sqrt(pow(234,2)+pow(234,2)),4), "Volt Amps")){
        $test->set_fail($class->function_strings[50]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[50]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[51]](234,234) !== array($class->prec(234/234, 4), "Volt Amp")){
        $test->set_fail($class->function_strings[51]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[51]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[52]](234,234) !== array($class->prec(pow(234,2)*234, 4), "Watts")){
        $test->set_fail($class->function_strings[52]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[52]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[53]](234,234) !== array($class->prec(pow(234,2)/234, 4), "Watts")){
        $test->set_fail($class->function_strings[53]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[53]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[54]](234,234) !== array($class->prec(234*234, 4), "Watts")){
        $test->set_fail($class->function_strings[54]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[54]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[55]](234,234) !== array($class->error_msg, "")){
        $test->set_fail($class->function_strings[55]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[55]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[55]](234,23) !== array($class->prec(sqrt(pow(234,2)-pow(23,2)),4), "Watts")){
        $test->set_fail($class->function_strings[55]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[55]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[56]](234,234) !== array($class->prec(234*234, 4), "Watts")){
        $test->set_fail($class->function_strings[56]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[56]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[57]](234,234) !== array($class->prec(pow(234,2)/234, 4), "Resistance")){
        $test->set_fail($class->function_strings[57]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[57]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}


echo "Preparing Resistive Inductive Parallel Test
---------------------------------------------------------\n";
sleep(1);
$test->pass_fail($rip, Resist_Induct_Par_test($test, $rip));
