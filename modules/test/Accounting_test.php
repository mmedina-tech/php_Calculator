<?php
# SYNOPSIS: Test Suite for Accounting Module
# 
# Accounting_test.php
#
# Author: Marcus Medina
# Date: Fri 03 Dec 2021 10:57:14 PM PST
# Last Update: 2021-12-05: 15:58
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


function test_Accounting(){
	global $account;
	if ( $account->function_list[$account->function_strings[1]](234, 234) !== array("1%", "Equity")){
		set_fail($account->function_strings[1]);
	} else {
		set_pass($account->function_strings[1]);
	}
	if ( $account->function_list[$account->function_strings[2]](234, 234) !== array("1%", "Trend Percentage") ){
		set_fail($account->function_strings[2]);
	} else {
		set_pass($account->function_strings[2]);
	}
	if ( $account->function_list[$account->function_strings[3]](234, 234) !== array("1%", "Current Ratio") ){
		set_fail($account->function_strings[3]);
	} else {
		set_pass($account->function_strings[3]);
	}
	if ( $account->function_list[$account->function_strings[4]](234, 234) !== array("1%", "Gross Margin Percentage") ){
		set_fail($account->function_strings[4]);
	} else {
		set_pass($account->function_strings[4]);
	}
	if ( $account->function_list[$account->function_strings[5]](234, 234) !== array("1 : 1", "Gross Margin Ratio") ){
		set_fail($account->function_strings[5]);
	} else {
		set_pass($account->function_strings[5]);
	}
	if ( $account->function_list[$account->function_strings[6]](234, 234) !== array("1 : 1", "Turn-Over Ratio") ){
		set_fail($account->function_strings[6]);
	} else {
		set_pass($account->function_strings[6]);
	}
	if ( $account->function_list[$account->function_strings[7]](234, 234, 234, 234, 234) !== array("4 : 1", "Quick Ratio")){
		set_fail($account->function_strings[7]);
	} else {
		set_pass($account->function_strings[7]);
	}
	if ( $account->function_list[$account->function_strings[8]](234, 234) !== array(1.0, "Accounts Receivable Turn-Over") ){
		set_fail($account->function_strings[8]);
	} else {
		set_pass($account->function_strings[8]);
	}
	if ( $account->function_list[$account->function_strings[9]](234, 234) !== array(365.0, "Days")){
		set_fail($account->function_strings[9]);
	} else {
		set_pass($account->function_strings[9]);
	}
	if ( $account->function_list[$account->function_strings[10]](234, 234) !== array(1.0, "Rate of Return")){
		set_fail($account->function_strings[10]);
	} else {
		set_pass($account->function_strings[10]);
	}
	if ( $account->function_list[$account->function_strings[11]](234, 234) !== array("$1.00", "Total Assets Turn-Over")){
		set_fail($account->function_strings[11]);
	} else {
		set_pass($account->function_strings[11]);
	}
	if ( $account->function_list[$account->function_strings[12]](234, 234) !== array("$1.00", "Earnings Per Share")){
		set_fail($account->function_strings[12]);
	} else {
		set_pass($account->function_strings[12]);
	}
	if ( $account->function_list[$account->function_strings[13]](234, 234) !== array('$1.00', "Dividend Yield")){
		set_fail($account->function_strings[13]);
	} else {
		set_pass($account->function_strings[13]);
	}
	if ( $account->function_list[$account->function_strings[14]](234, 234) !== array("1 : 1", "Payout Ratio")){
		set_fail($account->function_strings[14]);
	} else {
		set_pass($account->function_strings[14]);
	}
	if ( $account->function_list[$account->function_strings[15]](234, 234, 234, 234) !== array("-1 : 1", "Quick Ratio")){
		set_fail($account->function_strings[15]);
	} else {
		set_pass($account->function_strings[15]);
	}
	if ( $account->function_list[$account->function_strings[16]](234, 234) !== array("0%", "Gross Margin")){
		set_fail($account->function_strings[16]);
	} else {
		set_pass($account->function_strings[16]);
	}
	if ( $account->function_list[$account->function_strings[17]](234, 234) !== array("$100.00", "Company Valuation")){
		set_fail($account->function_strings[17]);
	} else {
		set_pass($account->function_strings[17]);
	}
	if ( $account->function_list[$account->function_strings[18]](234, 234) !== array("1%", "Equity")){
		set_fail($account->function_strings[18]);
	} else {
		set_pass($account->function_strings[18]);
	}
}

pass_fail($account, test_Accounting());

