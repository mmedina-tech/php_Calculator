<?php
# SYNOPSIS: Present the main suggestion form
# 
# suggestion_r.php
#
# Author: Marcus Medina
# Date: Tue 07 Sep 2021 09:21:57 AM PDT
# Last Update: 2022-01-31: 21:56
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

require( '../DB/DB_conn.php' );
$calc_base = calc_base_url();

$header = file_get_contents('../header.html');
$header = str_replace("{{CALC_BASE}}", $calc_base, $header);
$page = file_get_contents('suggestions.html');
$page = str_replace('{{CALC_BASE}}', $calc_base, $page);
$page = str_replace('{INSERT}', '', $page);
$page = str_replace('HEADER', $header, $page);
print $page;
