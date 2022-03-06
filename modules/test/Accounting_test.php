<?php
# SYNOPSIS: Test Suite for Accounting Module
#
# Accounting_test.php
#
# Author: Marcus Medina
# Date: Fri 03 Dec 2021 10:57:14 PM PST
# Last Update: 2022-03-05: 19:01
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This Program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY of FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You Should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#
#
#
require_once("pass_fail.php");
require_once("imports.inc.php");

$account = $cats["Accounting"];
$test = new TestSuite();

function test_Accounting($test, $class){
    $pass = 0;
    $fail = 0;
    #{{{
    if ( $class->function_list[$class->function_strings[1]](234, 234) !== array("1%", "Equity")){
        $test->set_fail($class->function_strings[1]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[1]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[2]](234, 234) !== array("1%", "Trend Percentage") ){
        $test->set_fail($class->function_strings[2]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[2]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[3]](234, 234) !== array("1%", "Current Ratio") ){
        $test->set_fail($class->function_strings[3]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[3]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[4]](234, 234) !== array("1%", "Gross Margin Percentage") ){
        $test->set_fail($class->function_strings[4]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[4]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[5]](234, 234) !== array("1 : 1", "Gross Margin Ratio") ){
        $test->set_fail($class->function_strings[5]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[5]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[6]](234, 234) !== array("1 : 1", "Turn-Over Ratio") ){
        $test->set_fail($class->function_strings[6]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[6]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[7]](234, 234, 234, 234, 234) !== array("4 : 1", "Quick Ratio")){
        $test->set_fail($class->function_strings[7]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[7]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[8]](234, 234) !== array($class->prec(234/234, 2), $class->function_strings[8]) ){
        $test->set_fail($class->function_strings[8]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[8]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[9]](234, 234) !== array(365.0, "Days")){
        $test->set_fail($class->function_strings[9]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[9]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[10]](234, 234) !== array(1.0, "Rate of Return")){
        $test->set_fail($class->function_strings[10]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[10]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[11]](234, 234) !== array("$1.00", "Total Assets Turn-Over")){
        $test->set_fail($class->function_strings[11]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[11]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[12]](234, 234) !== array("$1.00", "Earnings Per Share")){
        $test->set_fail($class->function_strings[12]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[12]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[13]](234, 234) !== array('$1.00', "Dividend Yield")){
        $test->set_fail($class->function_strings[13]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[13]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[14]](234, 234) !== array("1 : 1", "Payout Ratio")){
        $test->set_fail($class->function_strings[14]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[14]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[15]](234, 234, 234, 234) !== array("-1 : 1", "Quick Ratio")){
        $test->set_fail($class->function_strings[15]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[15]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[16]](234, 234) !== array("0%", "Gross Margin")){
        $test->set_fail($class->function_strings[16]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[16]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[17]](234, 234) !== array("$100.00", "Company Valuation")){
        $test->set_fail($class->function_strings[17]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[17]);
        $pass++;
    }
    if ( $class->function_list[$class->function_strings[18]](234, 234) !== array("1%", "Equity")){
        $test->set_fail($class->function_strings[18]);
        $fail++;
    } else {
        $test->set_pass($class->function_strings[18]);
        $pass++;
    }
    echo "\nTested: ".count($class->function_list);
    echo "\nPassed: ".$pass;
    echo "\nFailed: ".$fail;
    #}}}
}

echo "Preparing Accounting
-------------------------------\n";
sleep(1);
$test->pass_fail($account, test_Accounting($test, $account));

