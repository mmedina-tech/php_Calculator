<?php
# SYNOPSIS: send input values and return answer
#
# answer.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 04:13:06 PM PDT
# Last Update: 2022-03-01: 09:19
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

require_once("imports.inc.php");
require_once("log.php");

$cat = $_POST['category'];
$forms = $_POST['Formula'];
$active_cats = $cats[$cat];

$inputs = $active_cats->for_loop($forms);
$formula = formSelect($active_cats->function_list, $attribs, $forms);
$category = cateSelect($cats, $attrib, $cat);
$show_formula = $active_cats->show_Formulas($forms);
$action = "./answer.php";

$outputfp = str_replace("CALCPATH", "/php_Calculator", $outputfp);
$outputfp = str_replace("CATEGORY", $category, $outputfp);
$outputfp = str_replace("TITLE", $forms, $outputfp);
$outputfp = str_replace("ACTION", $action, $outputfp);
$outputfp = str_replace("FORMULA", $show_formula, $outputfp);
$outputfp = str_replace("FORM_SELECT", $formula, $outputfp);
$outputfp = str_replace("LICENSE", $license, $outputfp);
$outputfp = str_replace("HEADER", $header, $outputfp);
try{
    if ( count($cats[$cat]->functionInputs[$forms]) === 2 ) {
        if ( is_float($num) && is_float($num2) ){
            $formula_fields = "$number, $number2";

            $iterator = new ArrayObject($active_cats->function_list);
            $answer = $iterator->offsetGet($forms);
            $answer = $answer($number, $number2);
        } else {
            throw Exception;
        }

    } elseif ( count($cats[$cat]->functionInputs[$forms]) === 3 ) {
        $formula_fields = "$number, $number2, $number3";

        $iterator = new ArrayObject($active_cats->function_list);
        $answer = $iterator->offsetGet($forms);
        $answer = $answer($number, $number2, $number3);

    } elseif ( count($cats[$cat]->functionInputs[$forms]) === 4 ) {
        $formula_fields = "$number, $number2, $number3, $number4";

        $iterator = new ArrayObject($active_cats->function_list);
        $answer = $iterator->offsetGet($forms);
        $answer = $answer($number, $number2, $number3, $number4);

    } elseif ( count($cats[$cat]->functionInputs[$forms]) === 5 ) {
        $formula_fields = "$number, $number2, $number3, $number4, $number5";

        $iterator = new ArrayObject($active_cats->function_list);
        $answer = $iterator->offsetGet($forms);
        $answer = $answer($number, $number2, $number3, $number4, $number5);

    } elseif ( count($cats[$cat]->functionInputs[$forms]) === 14 ) {
        $formula_fields = "$number, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10, $number11, $number12, $number13, $number14";

        $iterator = new ArrayObject($active_cats->function_list);
        $answer = $iterator->offsetGet($forms);
        $answer = $answer($number, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10, $number11, $number12, $number13, $number14);

    } else {
        if ( is_float($num) ){
            $formula_fields = "$number";
            $iterator = new ArrayObject($active_cats->function_list);
            $answer = $iterator->offsetGet($forms);
            $answer = $answer($number);
        } else {
            throw Exception;
        }
    }
    $outscreen = "{$answer[0]} {$answer[1]}";
    $outputfp = str_replace("INPUT", $inputs, $outputfp);
    $outputfp = str_replace("ANSWER", $outscreen, $outputfp);
    $outputfp = str_replace("ERROR", '', $outputfp);
    statlogger($cat, $forms, $formula_fields, $outscreen, $_SERVER['REMOTE_ADDR']);
    print $outputfp;
} catch (Exception $e){
    $error = $e->getMessage();
    $outputfp = str_replace("INPUT", $inputs, $outputfp);
    $outputfp = str_replace("ANSWER", '', $outputfp);
    $outputfp = str_replace("ERROR", "<h1 class='error'>{$error[1]}</h1>", $outputfp);
    statlogger($cat, $forms, $formula_fields, $outscreen, $_SERVER['REMOTE_ADDR']);
    print $outputfp;
}


