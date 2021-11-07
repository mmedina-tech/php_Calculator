<?php
# SYNOPSIS: Convert from Metric to Imperial units
# 
# Metric_to_Imperial.php
#
# Author: Marcus Medina
# Date: Sat 06 Nov 2021 08:47:57 PM PDT
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

class Metric_to_Imperial extends FormulaBase{
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
