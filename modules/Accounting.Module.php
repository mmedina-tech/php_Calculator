<?php
# SYNOPSIS: Accounting Module for Massive Calculator
#
# Accounting.php
#
# Author: Marcus Medina
# Date: Mon 11 Oct 2021 08:15:45 PM PDT
# Last Update: 2022-03-02: 20:22
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
        setlocale(LC_MONETARY, 'en_US');
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                "The Equity Ratio",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)."%", $this->pluralize($result, "Equity"));
                },
                array(
                    "number_input" => "Stockholders Equity (input): ",
                    "number_input2" => "Total Equity (input): "
                ),
                array(
                    '' => "Stockholders Equity / Total Equity",
                ),
            ),
            FormulaBase::create_func_entry(
                "Trend Percentage",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)."%", $this->pluralize($result, "Trend Percentage"));
                },
                array( "number_input" => "Current Year Amount (input): ", "number_input2" => "Base Year Amount (input): ",),
                array( '' => "Current Year Amount / Base Year Amount",),
            ),
            FormulaBase::create_func_entry(
                "Current Ratio",
                function ($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)."%", $this->pluralize($result, "Current Ratio"));
                },
                array(
                    "number_input" => "Current Assets (input): ",
                    "number_input2" => "Current Liabilities (input): "
                ),
                array(
                    '' => "Current Assets / Current Liabilities",
                ),
            ),
            FormulaBase::create_func_entry(
                "Gross Margin Percentage",
                function ($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)."%", $this->pluralize($result, "Gross Margin Percentage"));
                },
                array(
                    "number_input" => "Cost of Goods Sold (input): ",
                    "number_input2" => "Revenue (input): "
                ),
                array(
                    '' => "((Cost of Goods Sold - Revenue) / Revenue) * 100",
                ),
            ),
            FormulaBase::create_func_entry(
                "Gross Margin Ratio using Gross Profit and Revenue",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Gross Margin Ratio"));
                },
                array(
                    "number_input" => "Gross Profit (input): ",
                    "number_input2" => "Revenue (input): "
                ),
                array(
                    '' => "Gross Profit / Revenue",
                ),
            ),
            FormulaBase::create_func_entry(
                "Inventory Turn-Over Ratio",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Turn-Over Ratio"));
                },
                array(
                    "number_input" => "Cost of Goods Sold (input):",
                    "number_input2" => "Average Inventory (input):"
                ),
                array(
                    '' => "Cost of Goods Sold / Average Inventory",
                ),
            ),
            FormulaBase::create_func_entry(
                "The Quick Ratio using Cash, Cash Equivalents, Short Term Investments, etc.",
                function($num=NULL, $num2=NULL, $num3=NULL, $num4=NULL, $num5=NULL){
                    $result = (($num + $num2 + $num3) + $num4) / $num5;
                    return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Quick Ratio"));
                },
                array(
                    "number_input" => "Cash (input):",
                    "number_input2" => "Cash Equivalents (input):",
                    "number_input3" => "Short Term Investments (input):",
                    "number_input4" => "Current Receivables (input):",
                    "number_input5" => "Current Liabilities (input):"
                ),
                array(
                    '' => "(Cash + Cash Equivalents + Short Term Investments + Current Receivables) / Current Liabilities",
                ),
            ),
            FormulaBase::create_func_entry(
                "Accounts Receivable Turn-Over",
                function ($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2), $this->pluralize($result, "Accounts Receivable Turn-Over"));
                },
                array(
                    "number_input" => "Net Credit Sales (input):",
                    "number_input2" => "Average Accounts (input):",
                ),
                array(
                    '' => "Net Credit Sales / Average Accounts",
                ),
            ),
            FormulaBase::create_func_entry(
                "Number of Days Sales in Accounts Receivable",
                function ($num=NULL, $num2=NULL){
                    $result = 365 / ($num / $num2);
                    return array($this->prec($result, 2), $this->pluralize($result, "Day"));
                },
                array(
                    "number_input" => "Sales (input):",
                    "number_input2" => "Account Receivable (input):",
                ),
                array(
                    '' => "365 / (Sales / Account Receivable)",
                ),
            ),
            FormulaBase::create_func_entry(
                "Rate of Return on Operating Assets",
                function ($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2), $this->pluralize($result, "Rate of Return"));
                },
                array(
                    "number_input" => "Net Income (input):",
                    "number_input2" => "Operating Assets (input):",
                ),
                array(
                    '' => "Net Income / Operating Assets",
                ),
            ),
            FormulaBase::create_func_entry(
                "Total Asset Turn-Over",
                function ($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    $result = $this->money($result);
                    return array($result, $this->pluralize($result, "Total Assets Turn-Over"));
                },
                array(
                    "number_input" => "Net Sales (input):",
                    "number_input2" => "Average Total Assets (input):",
                ),
                array(
                    '' => "Net Sales / Average Total Assets",
                ),
            ),
            FormulaBase::create_func_entry(
                "Earnings Per Share and Price Earnings Ratio",
                function ($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->money($result), $this->pluralize($result, "Earnings Per Share"));
                },
                array(
                    "number_input" => "Income Available to Common Stockholders (input):",
                    "number_input2" => "Weighted-Average Number of Common Shares Outstanding (input):",
                ),
                array(
                    '' => "Income Available to Common Stockholders / Weighted-Average Number of Common Shares Outstanding"
                ),
            ),
            FormulaBase::create_func_entry(
                "Dividend Yield on Common Stock",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->money($result), $this->pluralize($result, "Dividend Yield"));
                },
                array(
                    "number_input" => "Dividend Per Share of Common Stock (input):",
                    "number_input2" => "Current Market Price per Share (input):",
                ),
                array(
                    '' => "Dividend Per Share of Common Stock / Current Market Price per Share"
                ),
            ),
            FormulaBase::create_func_entry(
                "Payout Ratio on Common Stock",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Payout Ratio"));
                },
                array(
                    "number_input" => "Dividend per Share of Common Stock (input):",
                    "number_input2" => "Earnings per Share (EPS) (input):",
                ),
                array(
                    "" => "Dividend per Share of Common Stock / Earnings per Share (EPS)"
                ),
            ),
            FormulaBase::create_func_entry(
                "The Quick Ratio using Total Current Assets, Inventory, Prepaid Expenses, and Current Liabilities",
                function($num=NULL, $num2=NULL, $num3=NULL, $num4=NULL){
                    $result = ($num - $num2 - $num3) / $num4;
                    return array($this->prec($result, 2)." : 1", $this->pluralize($result, "Quick Ratio"));
                },
                array(
                    "number_input" => "Total Current Assets (input):",
                    "number_input2" => "Inventory (input):",
                    "number_input3" => "Prepaid Expenses (input):",
                    "number_input4" => "Current Liabilities (input):"
                ),
                array(
                    '' => "(Total Current Assets - Inventory - Prepaid Expenses) / Current Liabilities",
                ),
            ),
            FormulaBase::create_func_entry(
                "Gross Margin Ratio using Revenue and Cost of Goods Sold",
                function($num=NULL, $num2=NULL){
                    $result = ($num - $num2) / $num2;
                    return array($this->prec($result, 2)."%", $this->pluralize($result, "Gross Margin"));
                },
                array(
                    "number_input" => "Revenue (input):",
                    "number_input2" => "Cost of Goods Sold (input):",
                ),
                array(
                    '' => "(Revenue - Cost of Goods Sold) / Cost of Goods Sold"
                ),
            ),
            FormulaBase::create_func_entry(
                "Company Equity",
                function($num=NULL, $num2=NULL){
                    $result = $num / ($num2 * (10**-2));
                    return array($this->money($result), $this->pluralize($result, "Company Valuation"));
                },
                array(
                    "number_input" => "Cash Amount Asking (input):",
                    "number_input2" => "Amount of Equity Given (input):",
                ),
                array(
                    '' => "Cash Amount Asking / (Amount of Equity Given _ (10<sup>-1</sup>))"
                ),
            ),
            FormulaBase::create_func_entry(
                "Cash to Equity",
                function($num=NULL, $num2=NULL){
                    $result = $num / $num2;
                    return array($this->prec($result, 2)."%", $this->pluralize($result, "Equity"));
                },
                array(
                    "number_input" => "Company Worth (input):",
                    "number_input2" => "Buy in Amount (input):"
                ),
                array(
                    '' => "Company Worth / Amount Put In"
                ),
            ),
        );
    }
    #}}}
}

$cats["Accounting"] = new Accounting();
