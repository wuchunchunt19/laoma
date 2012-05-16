<?php
	include_once "base-database-manager.php";

	class LaomaDatabaseManager extends DatabaseManager{
		private static $dm;

		public static function getInstance(){
			if(!self::$dm){
				self::$dm = new self();
			}
			return self::$dm;
		}

		private function __construct(){
			$this->connect("localhost", "root", ""); // connect database
			$this->useDatabase("laoma"); // use "laoma" database
		}
	}
?>