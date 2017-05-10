<?php

class Usuario extends Model
{

	public function __construct()
	{

		parent::__construct();
	}

	public function getUsuarios()
	{

		$array = array();

		$sql = "SELECT * FROM usuarios LIMIT 100";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}
}