<?php
# SYNOPSIS: Php to replace a token
# 
# about.php
#
# Author: Marcus Medina
# Date: Wed 08 Sep 2021 07:36:18 PM PDT
# Last Update: 2021-11-20: 17:25
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

$token = file_get_contents('./Special_Thanks.txt');
/*
$lists = "<ul>";
foreach( $names as $name)
{
	$lists .= "<li>$name</li>";
	
}
$lists .= "</ul>";
 */
$page = file_get_contents('./about.html');
$page = str_replace("{THNX}", $token, $page);
print $page;
