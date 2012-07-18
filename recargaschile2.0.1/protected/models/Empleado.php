<?php

Yii::import('application.models._base.BaseEmpleado');

class Empleado extends BaseEmpleado
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}