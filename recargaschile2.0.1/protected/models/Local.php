<?php

Yii::import('application.models._base.BaseLocal');

class Local extends BaseLocal
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}