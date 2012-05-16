<?php
	include_once "C:/wamp/www/laoma/database/laoma-database-manager.php";
	
	class LaomaUser implements iUser{
		private $dm;
		public function __construct(){
			$this->dm = LaomaDatabaseManager::getInstance();
		}

		public function register($user_id,$user_name,$user_psd){
			$this->dm->query("insert into user_info values({$user_id},{$user_name},{$user_psd})");
			echo "register successed!";
		}
		
		public function login($user_id, $user_psd){
			$result = $this->dm->query("select * from user_info where user_id = {$user_id} and user_psd = {$user_psd}");
			if(mysql_num_rows($result) == 1)
				echo "login suceessed!";
			else
				echo "login failed!";
		}
	}