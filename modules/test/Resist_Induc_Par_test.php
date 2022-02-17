<?php
# SYNOPSIS: Test fot Resistive_Inductive_Parallel Module
# 
# Resist_Induc_Par_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:49:52 PM PST
# Last Update: 2022-02-17: 07:48
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
    if ( $class->function_list[$class->function_strings[1]](234,234) !== array(1/((1/pow(234,2))+(1/pow(234,2))), "Impedance")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
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
