<?php
	include_once "../interface/laoma-interface.php";

	class DatabaseManager implements iDatabaseManager{
		private $connect;

		public function connect($host = "localhost", $username = "root", $password = "") {
			ini_set("max_execution_time",3600);

			$this->connect = mysql_connect($host, $username, $password);
			if(!$this->connect){
				die(mysql_error());
			}
		}
		
		public function useDatabase($database){
			$success = mysql_select_db($database, $this->connect);
			if(!$success){
				die(mysql_error());
			}
		}

		public function dropTable($table){
			$this->query("DROP TABLE IF EXISTS " . $table);
		}

		public function query($query_string, $ignore_duplicate_error = false){
			$result = mysql_query($query_string);
			if(!$result){
				if(mysql_errno() != 1062 || (mysql_errno() == 1062 && !$ignore_duplicate_error))
					die($query_string . "<br />" . mysql_error() . "<br />");
			}
			return $result;
		}
		
		public function close(){
			$success = mysql_close($this->connect);
			if(!$success){
				die(mysql_error());
			}
		}

		/**
		 *	execute a sql file containing several commands
		 *  NOTE: the comments in the sql file cannot contain any ';' because the function preg_split with ';'
		 */
		public function executeSqlFile($filename){
			$sql_filename = $filename;
			$sql_contents = file_get_contents($sql_filename);
			$sql_querys = preg_split('@;@', $sql_contents, NULL, PREG_SPLIT_NO_EMPTY);

			foreach ($sql_querys as $query) {
				if (strlen(trim($query)) != 0) // remove those strings contain only whitespace
					$this->query($query);
			}
		}
	}
?>