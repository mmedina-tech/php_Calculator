<?php
# SYNOPSIS: Log all interactions of Massive Calculator
# 
# log.php
#
# Author: Marcus Medina
# Date: Tue 12 Oct 2021 03:55:19 PM PDT
# Last Update: 2021-11-20: 17:24
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


require_once("DB/DB_conn.php");

function logme($msg){
	$fp = file_get_contents("./Logs/Calculator.log");
	$fp = file_put_contents("./Logs/Calculator.log", $msg."\n");
}

function statlogger($cat, $forms, $formula_fields, $outscreen, $user){
	global $db;
	
	$outscreen = htmlentities($outscreen, ENT_QUOTES);

	$cat = htmlentities($cat, ENT_QUOTES);

	if ( !isset($forms) )
	{
		$forms = htmlentities($forms, ENT_QUOTES);
	}
	$time = strftime('%c', strtotime(date('D M j G:i:s Y')));
	$time = strval($time);
	$server_time = strftime('%c', $_SERVER['REQUEST_TIME']);
	$user = $_SERVER['REMOTE_ADDR'];
	if ( $user === "::1" ) {
		$user = str_replace($user, "localhost", $user);
	}

	$db->beginTransaction();
	if ($db->exec("INSERT INTO Calculation_Log (log_id, local_time, server_time, ip_address, category, formula, inputs, answer) VALUES (NULL, '$time', NOW(), '$user', '$cat', '$forms', '$formula_fields', '$outscreen')")){
		$db->commit();
	} else {
		print "Rolling Back";
		$db->rollback();
		print "\n".var_dump($db->errorInfo());
		exit();
	}

	if ( !file_exists("./Logs") )
	{
		mkdir("./Logs");
		$files = fopen("./Logs/Calculator.log", 'w');
	} else {
		$files = fopen("./Logs/Calculator.log", 'a');
	}
	fwrite($files, "Local Time: $time\nServer Time: $server_time\nIP Address: $user\nCategory: $cat\nFormula: $forms\nInputs: $formula_fields\nAnswer: $outscreen\n-------------------------------------------------------------------------\n");
	fclose($files);
	return $db;

}
