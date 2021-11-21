<?php
# SYNOPSIS: Calculate Budgets
# 
# Budget.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:42:54 PM PDT
# Last Update: 2021-11-20: 17:29
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

require_once ("FormulaBase.php");

class Budget extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => 'Monthly Income',
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14){
				$income     = $num * $num2;
				$expenses   = $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10 + $num11 + $num12 + $num13 + $num14;
				$result     = $income - $expenses;
				$income     = round($income, 2);
				$expenses   = round($expenses, 2);
				$result     = round($result, 2);
				$pos_result = "<span class='income'>Income $$income</span><br><br><span class='expenses'>Expenses $$expenses</span><br><br><span class='income'>$$result after Expenses Paid</span>";
				$neg_result = "<span class='income'>Income $$income</span><br><br><span class='expenses'>Expenses $$expenses</span><br><br><span class='expenses'>$$result after Expenses Paid</span>";
				if ( $result > 1 ) {
					return array($pos_result, "");
				} else {
					return array($neg_result, "");
					
				}
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				'number_input' => 'Hourly Wages (input): ',
				'number_input2' => 'Monthly Hours (input): ',
				'number_input3' => 'Rent/Mortgage (input): ',
				'number_input4' => 'Cable Bill (input): ',
				'number_input5' => 'Phone Bill (input): ',
				'number_input6' => 'Electrical and Water Bill (input): ',
				'number_input7' => 'Groceries (input): ',
				'number_input8' => 'Health Care Insurance (input): ',
				'number_input9' => 'Clothing Expenses (input): ',
				'number_input10' => 'Car Expenses (Insurance, Maintenance, and Gas) (input): ',
				'number_input11' => 'Cost of Supervision (input): ',
				'number_input12' => 'Program Cost (input): ',
				'number_input13' => 'Recreation Expenses (input): ',
				'number_input14' => 'Any Other Expenses (input): ',
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'' => '(Hourly Wages * Monthly Hours) - (Rent/Mortgage + Cable + <br>Electrical + Phone + <br>Groceries + Helath Care + <br>Clothing Expenses + Car Expenses + <br>Cost of Supervision + Program Cost + <br>Recreation Expenses + Any Other Expenses)'
			),
		);
        #}}}
	}
}
