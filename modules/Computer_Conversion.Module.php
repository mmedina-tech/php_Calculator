<?php
# SYNOPSIS: computer conversion
#
# Computer_Conversion.Module.php
#
# Author: Marcus Medina,,,
# Date: Fri 11 Mar 2022 09:29:36 PM PST
# Last update: Fri 11 Mar 2022 09:29:36 PM PST
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

class Computer_Conversion extends FormulaBase{
    function __construct(){
        $this->entries = array(
            1 => FormulaBase::create_func_entry(
                "{}",
                function({}){
                    {}
                    return array({}, $this->pluralize({}, "{}");
                },
                array({}, {}),
                array({}, {}),
            ),
        );
    }
}
$cats["Computer Conversion"] = new Computer_Conversion();
