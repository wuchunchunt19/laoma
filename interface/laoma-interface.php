<?php
interface iDatabaseManager {
    public function connect($host, $username, $password);

    public function useDatabase($database);

    public function dropTable($table);

    public function query($query);
}

interface iRawDataProcessor {
    /**
     * Append raw data of $source to the tables specified above.
     */
    public function processRawData();
}

interface iUser {
	
	public function  register($user_id,$user_name,$user_psd);
	
	public function  login($user_id,$user_psd);
}

interface iManager {

}

interface iView {
	
}

?>
