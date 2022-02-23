<?php
# SYNOPSIS: Resistive Inductive Capacitive Parallel Test
# 
# Resist_Induc_Cap_Par_test.php
#
# Author: Marcus Medina,,,
# Date: Wed 23 Feb 2022 03:08:08 PM PST
# Last update: 2022-02-23: 15:09
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

function Resist_Induc_Cap_Par_test($test, $class){

    $pass = 0;
    $fail = 0;
    if ( $class->function_list[$class->function_strings[1]](234,234) !== array(<{}>, "<{}>")){
        $test->set_fail($class->funciton_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }


    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
}
echo "Preparing Resistive Inductive Capacitive Parallel Test
------------------------------------------\n";
sleep(1);
$test->pass_fail($ricp, Resist_Induc_Cap_Par_test($test, $ricp));

