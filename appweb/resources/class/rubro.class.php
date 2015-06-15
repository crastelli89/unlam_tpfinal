<?php

Class Rubro extends Database
{
	private $id;
	private $descripcion;
	private $icono;
	private $estado;
	private $habilitado;

	public function getRubro($id)
	{
		$qry = sprintf("SELECT `id`, `descripcion`, `icono`, `habilitado`
				FROM `Rubro`
				WHERE `id` = %d
				LIMIT 1", $id);
		return $this->queryOne($qry);
	}

	public function getRubros()
	{
		$qry = sprintf("SELECT `id`, `descripcion`, `icono`, `habilitado`
				FROM `Rubro`
				WHERE `estado` = 1", False);
		return $this->query($qry);
	}	

}