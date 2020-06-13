<?php

class Model
{
	protected $db;

	public function __construct()
	{

		global $config;
		try{
			$this->db = new PDO("postgree:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
		}catch(PDOException $e){
			echo "ERRO NAS CONFIGURAÇÕES!";
		}
	}

}
