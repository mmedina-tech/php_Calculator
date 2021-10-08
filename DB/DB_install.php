<?php
# SYNOPSIS: Install Massive Calculator DataBase
# 
# DB_install.php
#
# Author: Marcus Medina
# Date: Thu 09 Sep 2021 08:11:27 PM PDT
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
$page = file_get_contents('../admin/index.html');

function pdo_conn($hostname, $user, $passwd, $page, $dbname){
	$success = "<pre>Database Created: $dbname</pre>";
	try{
		$db = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $user, $passwd);
	}catch (PDOException $e){
		$error = "<p>Couldn't connect to the database: ".$e->getMessage()."</p>";
		$page .= str_replace("{ERROR}", $error, $page);
		$page .= str_replace("<div class='error' hidden>", '<div>', $page);
		print $page;
		exit();
	}
	try{
		$db->exec("create table if not exists `Formulas`(
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
		ENGINE=InnoDB DEFAULT CHARSET=UTF8;");

		$db->exec("create table if not exists `Comments` (
		`comment_id` int(11) NOT NULL AUTO_INCREMENT,
		`first_name` varchar(256) NOT NULL,
		`last_name` varchar(256) NOT NULL,
		`comment` varchar(256) NOT NULL,
		`date_entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
		unique key `comment_id` (`comment_id`) USING BTREE)
		ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$db->exec("create table if not exists ` Calculation_Log` (
		`log_id` int(11) NOT NULL AUTO_INCREMENT,
		`local_time` varchar(256) NOT NULL,
		`server_time` varchar(256) NOT NULL,
		`ip_address` varchar(256) NOT NULL,
		`category` varchar(256) NOT NULL,
		`formula` varchar(256) NOT NULL,
		`answer` varchar(256) NOT NULL,
		unique key `log_id` (`log_id`) USING BTREE)
		ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$success .= "\n<pre>Table Created: 	Formulas
Table Created: 	Comments
Table Created: 	Calculation_Log</pre>";

	}catch (PDOException $e){
		throw $e;
	}
	$page = str_replace("<div class='success' hidden>", '<div>', $page);
	$page = str_replace("{TABLE}", $success, $page);
	$page = str_replace("{START}", "<br><br><a id='tabitem' href='/Massive_Calculator.web/calculator_front.html'>Start Calculator</a>", $page);
	return $page;
}


$hostname = "localhost";
$dbname   = "Massive_Calculator";
$user 	  = "icio_ems";
$passwd   = "icio_ems";

$conn = new mysqli($hostname, $user, $passwd);
if ($conn->connect_error){
	$error = "Connection Failed: ".$conn->connect_error;
	$page = str_replace("{ERROR}", $error, $page);
	$page = str_replace("<div class='error' hidden>", '<div>', $page);
	print $page;
	exit();
}

$sql = "CREATE DATABASE if not exists `$dbname`";
if ($conn->query($sql) === true){
	$conn->close();
	$page = pdo_conn($hostname, $user, $passwd, $page, $dbname);
	print $page;

}

