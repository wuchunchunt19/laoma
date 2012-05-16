<?php
	include_once "../interface/laoma-interface.php";
	include_once "../database/laoma-database-manager.php";
	
	class LaomaRawDataProcessor implements iRawDataProcessor{
		private $dm;

		public function __construct(){
			$this->dm = LaomaDatabaseManager::getInstance();
		}

		public function processRawData(){
			$this->__generate_tables();
		}

		private function __generate_tables(){
			$this->dm->executeSqlFile(__DIR__ . "/tables.sql");
		}

	}
?>