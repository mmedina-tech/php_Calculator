<?php
# SYNOPSIS: Install Massive Calculator DataBase
# 
# DB_install.php
#
# Author: Marcus Medina
# Date: Thu 09 Sep 2021 08:11:27 PM PDT
# Last Update: 2022-02-14: 07:25
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

$page = file_get_contents('../admin/index.php');

function pdo_conn(){
	global $page;
	if ( !file_exists("./calculator.config.php") ) {
		$config = fopen('./calculator.config.php', 'a+');
		$param = "<?php\n";
		$param .= "\$CONNECTION = '{$_POST['conn']}';\n"; 
		$param .= "\$CALCPATH = '{$_POST['calcpath']}';\n";
		$param .= "\$USER = '{$_POST['user']}';\n";
		$param .= "\$PASSWD = '{$_POST['passwd']}';\n";
		$param .= "\$DBNAME = '{$_POST['dbname']}';\n";

		fwrite($config, $param);
		fclose($config);
	}
	
	
	include_once('./calculator.config.php');
	$CALCPATH = basename($CALCPATH);

	if ( ! file_exists("$CALCPATH/Logs") ){
		mkdir("$CALCPATH/Logs");
		chdir("$CALCPATH/Logs");
		$logs_dir = "<pre>Log: Logs Directory Created</pre>";
	} else {
		$logs_dir = "<pre>Log: Logs Directory Already Exists</pre>";
	}

	if ( ! file_exists("$CAlCPATH/Logs/Calculator.log") ) {
		chdir("$CALCPATH/Logs");
		touch("Calculator.log");
		$logs = "<pre>Log: Calculator.log created</pre>";
	} else {
		$logs = "<pre>Log: Calculator.log already Exists</pre>";
	}
	$page = str_replace("{LOGS}", $logs_dir, $page);
	$page = str_replace("{LOGS2}", $logs, $page);
	$conn = new mysqli($CONNECTION, $USER, $PASSWD);
	if ($conn->connect_error){
		$error = "Connection Failed: ".$conn->connect_error;
		$page = str_replace("{ERROR}", $error, $page);
		$page = str_replace("<div class='error' hidden>", '<div>', $page);
		print $page;
		exit();
	}

	$sql = "CREATE DATABASE if not exists `$DBNAME`";
	if ($conn->query($sql)){
		$database = "<pre>Database Created: $DBNAME</pre>";
	} else {
		$database = "<pre>Datebase Created: $DBNAME Already Exists</pre>";
	}
	$conn->close();
	try{
		$db = new PDO('mysql:host='.$CONNECTION.';dbname='.$DBNAME, $USER, $PASSWD);
	}catch (PDOException $e){
		$error = "<p>Couldn't connect to the database: ".$e->getMessage()."</p>";
		$page .= str_replace("{ERROR}", $error, $page);
		$page .= str_replace("<div class='error' hidden>", '<div>', $page);
		print $page;
		exit();
	}
	try{
		if ($db->exec("create table if not exists `Formulas`(
			`form_id` int(11) NOT NULL AUTO_INCREMENT,
			`user_fname` varchar(256) NOT NULL,
			`user_lname` varchar(256) NOT NULL,
			`form_cat` varchar(256) NOT NULL,
			`form_name` varchar(256) NOT NULL,
			`Formula` varchar(256) NOT NULL,
			`description` varchar(256) NOT NULL,
			`Book_Title` varchar(256) NULL,
			`Book_Author` varchar(256) NULL,
			`Book_Publisher` varchar(256) NULL,
			`Page_Number` varchar(256) NULL,
			`Date_Entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
			unique key`form_id` (`form_id`) USING BTREE)
			ENGINE=InnoDB DEFAULT CHARSET=UTF8;")){
			$table1 = "<pre>Table: Formulas Created</pre>";
		} else {
			$table1 = "<pre>Table: Formulas Already Exists</pre>";
		}

		if ($db->exec("create table if not exists `Comments` (
			`comment_id` int(11) NOT NULL AUTO_INCREMENT,
			`first_name` varchar(256) NOT NULL,
			`last_name` varchar(256) NOT NULL,
			`comment` varchar(256) NOT NULL,
			`date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
			unique key `comment_id` (`comment_id`) USING BTREE)
			ENGINE=InnoDB DEFAULT CHARSET=utf8;")){
			$table2 = "<pre>Table: Comments Created</pre>";
		} else {
			$table2 = "<pre>Table: Comments Already Exists</pre>";
		}

		if ($db->exec("create table if not exists `Calculation_Log` (
			`log_id` int(11) NOT NULL AUTO_INCREMENT,
			`local_time` varchar(256) NOT NULL,
			`server_time` datatime NOT NULL DEFAULT CURRENT_TIMESTAMP,
			`ip_address` varchar(256) NOT NULL,
			`category` varchar(256) NOT NULL,
			`formula` varchar(256) NOT NULL,
			`inputs` varchar(256) NOT NULL,
			`answer` varchar(256) NOT NULL,
			unique key `log_id` (`log_id`) USING BTREE)
			ENGINE=InnoDB DEFAULT CHARSET=utf8;")){
			$table3 = "<pre>Table: Calculator_Log Created</pre>";
		} else {
			$table3 = "<pre>Table: Calculator_Log Already Exists</pre>";
		}


	}catch (PDOException $e){
		print $e;
		exit();
	}
	$page = str_replace("<div class='success' hidden>", '<div class="success">', $page);
	$page = str_replace("{DATABASE}", $database, $page);
	$page = str_replace("{TABLE}", $table1, $page);
	$page = str_replace("{TABLE1}", $table2, $page);
	$page = str_replace("{TABLE2}", $table3, $page);
	$page = str_replace("<div hidden>", "<div>", $page);
	$page = str_replace("{START}", "<br><br><button id='tabitem'><a href='{$CALCPATH}/calculator_front.php'>Start Calculator</a></button>", $page);
	return $page;
}



$page = pdo_conn();
echo $page;

