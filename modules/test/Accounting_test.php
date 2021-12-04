<?php
# SYNOPSIS: Test Suite for Accounting Module
# 
# Accounting_test.php
#
# Author: Marcus Medina
# Date: Fri 03 Dec 2021 10:57:14 PM PST
# Last Update: 2021-12-03: 22:58
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


function test_Accounting(){
	global $account;

	if ( $account->function_list[$account->function_strings[1]](234, 234) !== array("1%", "Equity")){
		set_fail($account->function_strings[1]);
	} else if ( $account->function_list[$account->function_strings[2]](234, 234) !== array("1%", "Trend Percentage") ){
		set_fail($account->function_strings[2]);
	} else if ( $account->function_list[$account->function_strings[3]](234, 234) !== array("1%", "Current Ratio") ){
		set_fail($account->function_strings[3]);
	} else if ( $account->function_list[$account->function_strings[4]](234, 234) !== array("1%", "Gross Margin Percentage") ){
		set_fail($account->function_strings[4]);
	} else if ( $account->function_list[$account->function_strings[5]](234, 234) !== array("1 : 1", "Gross Margin Ratio") ){
		set_fail($account->function_strings[5]);
	} else if ( $account->function_list[$account->function_strings[6]](234, 234) !== array("1 : 1", "Turn-Over Ratio") ){
		set_fail($account->function_strings[6]);
	} else if ( $account->function_list[$account->function_strings[7]](234, 234, 234, 234, 234) !== array("4 : 1", "Quick Ratio")){
		set_fail($account->function_strings[7]);
	} else if ( $account->function_list[$account->function_strings[10]](234, 2) !== array(117, "Rate of Return") ){
		set_fail($account->function_strings[10]);
	}
}

pass_fail($account, test_Accounting());

