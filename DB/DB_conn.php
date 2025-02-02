<?php
# SYNOPSIS: DB Connection Config
# 
# DB_conn.php
#
# Author: Marcus Medina
# Date: Tue 07 Sep 2021 08:02:58 AM PDT
# Last Update: 2025-02-02: 15:36
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

$dbname = "Massive_Calculator";
$user = "Massive-Calculator";
$passwd = "Massive-Calculator";

try{
	$db = new mysqli('host=localhost,dbname='.$dbname.",username=".$user.",password=".$passwd);
}catch (Exception $e){
	print "Couldn't connect to the database: ".$e->getMessage();
	exit();
}

