<?php

Class Zona extends Database
{
	private $id;
	private $descripcion;
	private $coordenadas;
	private $estado;
	private $habilitado;

	public function FnGetZona($id)
	{
		$qry = sprintf("SELECT `id`, `descripcion`, `coordenadas`, `habilitado`
				FROM `Zona`
				WHERE `id` = %d
				LIMIT 1", $id);
		return $this->queryOne($qry);
	}

	public function FnGetZonas()
	{
		$qry = sprintf("SELECT `id`, `descripcion`, `coordenadas`, `habilitado`
				FROM `Zona`
				WHERE `estado` = 1", False);
		return $this->query($qry);
	}	

}