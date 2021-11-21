<?php
# SYNOPSIS: Resistive Inductive in Series Formulas
# 
# Resistive_Inductive_Series.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:55:01 PM PDT
# Last Update: 2021-11-20: 17:33
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

class Resistive_Inductive_Series extends FormulaBase{
    function __construct(){

		#{{{ Function Titles
		$this->function_strings = array();
		#}}}
	
        #{{{ Function List
		$this->function_list = array();
        #}}}

        #{{{ Inputs
		$this->functionInputs = array();
        #}}}

        #{{{ Formula List
		$this->formula_list = array();
        #}}}

	}
}
