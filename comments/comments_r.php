<?php
# SYNOPSIS: Read the comments.html template page
# 
# comments_r.php
#
# Author: Marcus Medina
# Date: Tue 07 Sep 2021 08:26:22 AM PDT
# Last Update: 2021-11-20: 17:26
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


$page = file_get_contents('comments.html');
$page = str_replace('{{CALC_BASE}}', $calc_base, $page);
$page = str_replace('{INSERT}', '', $page);
print $page;
