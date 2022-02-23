<?php
# SYNOPSIS: Test for Budget Module
#
# Budget_test.php
#
# Author: Marcus Medina
# Date: Fri 17 Dec 2021 12:39:04 PM PST
# Last Update: 2022-02-23: 15:26
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

function test_Budget($test, $class){
    $pass = 0;
    $fail = 0;
    #{{{
    echo "\nBudgeting
---------------------------\n";
    if ( $class->function_list[$class->function_strings[1]](234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234, 234) !== array("<span class='income'>Income $54756.00</span><br><br><span class='expenses'>Expenses $2808.00</span><br><br><span class='income'>$51948.00 after Expenses Paid</span>", "")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
    #}}}
}

$test->pass_fail($budget, test_Budget($test, $budget));
