<?php 

class Datbase{
		public static function connect(){
			$link = new PDO("mysql:host=127.0.0.1;dbname=system_amb",
			            "root",
			            "");
			$link->exec("set names utf8");

			return $link;
		}
	}