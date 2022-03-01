<?php
# SYNOPSIS: Create input fields for formula selected
#
# input.php
#
# Author: Marcus Medina
# Date: Fri 08 Oct 2021 03:53:48 PM PDT
# Last Update: 2022-03-01: 12:26
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

require_once("./imports.inc.php");
require_once("./log.php");

$cat = $_GET['category'];
$forms = $_GET['Formula'];
$active_cats = $cats[$cat];
$inputs = $active_cats->for_loop($forms);
$formula = formSelect($active_cats->function_list, $attribs, $forms);
$category = cateSelect($cats, $attrib, $cat);
$show_formulas = $active_cats->show_Formulas($forms);

$action = "./answer.php";

$outputfp = str_replace("CALCPATH", "/php_Calculator", $outputfp);
$outputfp = str_replace("TITLE", $forms, $outputfp);
$outputfp = str_replace("CATEGORY", $category, $outputfp);
$outputfp = str_replace("ACTION", $action, $outputfp);
$outputfp = str_replace("FORMULA", $show_formulas, $outputfp);
$outputfp = str_replace("FORM_SELECT", $formula, $outputfp);
$outputfp = str_replace("LICENSE", $license, $outputfp);
$outputfp = str_replace("HEADER", $header, $outputfp);
try{
    $outputfp = str_replace("INPUT", $inputs, $outputfp);
    $outputfp = str_replace("ANSWER", '', $outputfp);
    $outputfp = str_replace("ERROR", '', $outputfp);
    print $outputfp;
} catch (Exception $e){
    $outputfp = str_replace("INPUT", $inputs, $outputfp);
    $outputfp = str_replace("ANSWER", '', $outputfp);
    $outputfp = str_replace("ERROR", "<h1 class='error'>{$e->getMessage()}</h1>", $outputfp);
    print $outputfp;
}
