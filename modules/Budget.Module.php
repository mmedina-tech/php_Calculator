<?php
# SYNOPSIS: Calculate Budgets
#
# Budget.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:42:54 PM PDT
# Last Update: 2022-03-02: 20:13
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
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                'Monthly Income',
                function($num, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14){
                    $income     = $num * $num2;
                    $expenses   = $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10 + $num11 + $num12 + $num13 + $num14;
                    $income     = $this->prec($income, 2);
                    $expenses   = $this->prec($expenses, 2);
                    $result     = $income - $expenses;
                    $result     = $this->prec($result, 2);
                    $pos_result = "<span class='income'>Income {$this->money($income)}</span><br><br><span class='expenses'>Expenses {$this->money($expenses)}</span><br><br><span class='income'>{$this->money($result)} after Expenses Paid</span>";
                    $neg_result = "<span class='income'>Income {$this->money($income)}</span><br><br><span class='expenses'>Expenses {$this->money($expenses)}</span><br><br><span class='expenses'>{$this->money($result)} after Expenses Paid</span>";
                    if ( $result > 1 ) {
                        return array($pos_result, "");
                    } else {
                        return array($neg_result, "");

                    }
                },
                array(
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
                array(
                    '' => '(Hourly Wages * Monthly Hours) - (Rent/Mortgage + Cable + <br>Electrical + Phone + <br>Groceries + Helath Care + <br>Clothing Expenses + Car Expenses + <br>Cost of Supervision + Program Cost + <br>Recreation Expenses + Any Other Expenses)'
                ),
            ),
        );
    }
}
$cats["Budgeting"] = new Budget();
