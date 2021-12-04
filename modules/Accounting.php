<?php
# SYNOPSIS: Accounting Module for Massive Calculator
# 
# Accounting.php
#
# Author: Marcus Medina
# Date: Mon 11 Oct 2021 08:15:45 PM PDT
# Last Update: 2021-12-03: 22:31
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

include_once("FormulaBase.php");

class Accounting extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array(
			1 => "The Equity Ratio",
			2 => "Trend Percentage",
			3 => "Current Ratio",
			4 => "Gross Margin Percentage",
			5 => "Gross Margin Ratio using Gross Profit and Revenue",
			6 => "Inventory Turn-Over Ratio",
			7 => "The Quick Ratio using Cash, Cash Equivalents, Short Term Investments, etc.",
			8 => "Accounts Receivable Turn-Over",
			9 => "Number of Days Sales in Accounts Receivable",
			10 => "Rate of Return on Operating Assets",
			11 => "Total Asset Turn-Over",
			12 => "Earnings Per Share and Price Earnings Ratio",
			13 => "Dividend Yield on Common Stock",
			14 => "Payout Ratio on Common Stock",
			15 => "The Quick Ratio using Total Current Assets, Inventory, Prepaid Expenses, and Current Liabilities",
			16 => "Gross Margin Ratio using Revenue and Cost of Goods Sold",
			17 => "Company Equity",
			18 => "Cash to Equity"
		);
		#}}}
	
        #{{{ Function List
		$this->function_list = array(
			$this->function_strings[1] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)."%", $this->pluralize($result, "Equity"));
			},
			$this->function_strings[2] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)."%", $this->pluralize($result, "Trend Percentage"));
			},
			$this->function_strings[3] => function ($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)."%", $this->pluralize($result, "Current Ratio"));
			},
			$this->function_strings[4] => function ($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)."%", $this->pluralize($result, "Gross Margin Percentage"));
			},
			$this->function_strings[5] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Gross Margin Ratio"));
			},
			$this->function_strings[6] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Turn-Over Ratio"));
			},
			$this->function_strings[7] => function($num=NULL, $num2=NULL, $num3=NULL, $num4=NULL, $num5=NULL){
				$result = (($num + $num2 + $num3) + $num4) / $num5;
				return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Quick Ratio"));
			},
			$this->function_strings[8] => function ($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2), $this->pluralize($result, $this->function_strings[8]));
			},
			$this->function_strings[9] => function ($num=NULL, $num2=NULL){
				$result = 365 / ($num / $num2);
				return array($this->prec($result, 2), $this->pluralize($result, "Day"));
			},
			$this->function_strings[10] => function ($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2), $this->pluralize($result, "Rate of Return"));
			},
			$this->function_strings[11] => function ($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array(money_format("$", $result), $this->pluralize($result, "Total Assets Turn-Over"));
			},
			$this->function_strings[12] => function ($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array(money_format("$", $result), $this->pluralize($result, "Earnings Per Share"));
			},
			$this->function_strings[13] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array(money_format("$", $result), $this->pluralize($result, "Dividend Yield"));
			},
			$this->function_strings[14] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Payout Ratio"));
			},
			$this->function_strings[15] => function($num=NULL, $num2=NULL, $num3=NULL, $num4=NULL){
				$result = ($num - $num2 - $num3) / $num4;
				return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Quick Ratio"));
			},
			$this->function_strings[16] => function($num=NULL, $num2=NULL){
				$result = ($num - $num2) / $num2;
				return array($this->prec($result, 2)."%", $this->pluralize($result, "Gross Margin"));
			},
			$this->function_strings[17] => function($num=NULL, $num2=NULL){
				$result = $num / ($num2 * (10**-2));
				return array(money_format("$", $result), $this->pluralize($result, "Company Valuation"));
			},
			$this->function_strings[18] => function($num=NULL, $num2=NULL){
				$result = $num / $num2;
				return array($this->prec($result, 2)."%", $this->pluralize($result, "Equity"));
			},
		);
        #}}}

        #{{{ Inputs
		$this->functionInputs = array(
			$this->function_strings[1] => array(
				"number_input" => "Stockholders Equity (input): ",
				"number_input2" => "Total Equity (input): "
			),
			$this->function_strings[2] => array(
				"number_input" => "Current Year Amount (input): ",
				"number_input2" => "Base Year Amount (input): ",
			),
			$this->function_strings[3] => array(
				"number_input" => "Current Assets (input): ",
				"number_input2" => "Current Liabilities (input): "
			),
			$this->function_strings[4] => array(
				"number_input" => "Cost of Goods Sold (input): ",
				"number_input2" => "Revenue (input): "
			),
			$this->function_strings[5] => array(
				"number_input" => "Gross Profit (input): ",
				"number_input2" => "Revenue (input): "
			),
			$this->function_strings[6] => array(
				"number_input" => "Cost of Goods Sold (input):",
				"number_input2" => "Average Inventory (input):"
			),
			$this->function_strings[7] => array(
				"number_input" => "Cash (input):",
				"number_input2" => "Cash Equivalents (input):",
				"number_input3" => "Short Term Investments (input):",
				"number_input4" => "Current Receivables (input):",
				"number_input5" => "Current Liabilities (input):"
			),
			$this->function_strings[8] => array(
				"number_input" => "Net Credit Sales (input):",
				"number_input2" => "Average Accounts (input):",
			),
			$this->function_strings[9] => array(
				"number_input" => "Sales (input):",
				"number_input2" => "Account Receivable (input):",
			),
			$this->function_strings[10] => array(
				"number_input" => "Net Income (input):",
				"number_input2" => "Operating Assets (input):",
			),
			$this->function_strings[11] => array(
				"number_input" => "Net Sales (input):",
				"number_input2" => "Average Total Assets (input):",
			),
			$this->function_strings[12] => array(
				"number_input" => "Income Available to Common Stockholders (input):",
				"number_input2" => "Weighted-Average Number of Common Shares Outstanding (input):",
			),
			$this->function_strings[13] => array(
				"number_input" => "Dividend Per Share of Common Stock (input):",
				"number_input2" => "Current Market Price per Share (input):",
			),
			$this->function_strings[14] => array(
				"number_input" => "Dividend per Share of Common Stock (input):",
				"number_input2" => "Earnings per Share (EPS) (input):",
			),
			$this->function_strings[15] => array(
				"number_input" => "Total Current Assets (input):",
				"number_input2" => "Inventory (input):",
				"number_input3" => "Prepaid Expenses (input):",
				"number_input4" => "Current Liabilities (input):"
			),
			$this->function_strings[16] => array(
				"number_input" => "Revenue (input):",
				"number_input2" => "Cost of Goods Sold (input):",
			),
			$this->function_strings[17] => array(
				"number_input" => "Cash Amount Asking (input):",
				"number_input2" => "Amount of Equity Given (input):",
			),
			$this->function_strings[18] => array(
				"number_input" => "Company Worth (input):",
				"number_input2" => "Buy in Amount (input):"
			),
		);
        #}}}

        #{{{ Formula List
		$this->formula_list = array(
			$this->function_strings[1] => array(
				'' => "Stockholders Equity / Total Equity",
			),
			$this->function_strings[2] => array(
				'' => "Current Year Amount / Base Year Amount",
			),
			$this->function_strings[3] => array(
				'' => "Current Assets / Current Liabilities",
			),
			$this->function_strings[4] => array(
				'' => "((Cost of Goods Sold - Revenue) / Revenue) * 100",
			),
			$this->function_strings[5] => array(
				'' => "Gross Profit / Revenue",
			),
			$this->function_strings[6] => array(
				'' => "Cost of Goods Sold / Average Inventory",
			),
			$this->function_strings[7] => array(
				'' => "(Cash + Cash Equivalents + Short Term Investments + Current Receivables) / Current Liabilities",
			),
			$this->function_strings[8] => array(
				'' => "Net Credit Sales / Average Accounts",
			),
			$this->function_strings[9] => array(
				'' => "365 / (Sales / Account Receivable)",
			),
			$this->function_strings[10] => array(
				'' => "Net Income / Operating Assets",
			),
			$this->function_strings[11] => array(
				'' => "Net Sales / Average Total Assets",
			),
			$this->function_strings[12] => array(
				'' => "Income Available to Common Stockholders / Weighted-Average Number of Common Shares Outstanding"
			),
			$this->function_strings[13] => array(
				'' => "Dividend Per Share of Common Stock / Current Market Price per Share"
			),
			$this->function_strings[14] => array(
				"" => "Dividend per Share of Common Stock / Earnings per Share (EPS)"
			),
			$this->function_strings[15] => array(
				'' => "(Total Current Assets - Inventory - Prepaid Expenses) / Current Liabilities",
			),
			$this->function_strings[16] => array(
				'' => "(Revenue - Cost of Goods Sold) / Cost of Goods Sold"
			),
			$this->function_strings[17] => array(
				'' => "Cash Amount Asking / (Amount of Equity Given _ (10<sup>-1</sup>))"
			),
			$this->function_strings[18] => array(
				'' => "Company Worth / Amount Put In"
			),
		);
        #}}}
	}
	#{{{ Functions
	function equity($num=NULL, $num2=NULL){
		$result = $num / $num2;
		return array($this->prec($result, 2)."%", $this->pluralize($result, "Equity"));
	}
	#}}}
}
