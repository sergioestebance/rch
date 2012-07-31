<?php

Yii::import('application.models._base.BaseNoprepago');

class Noprepago extends BaseNoprepago
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}