<?php

class ClienteController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow', 
				'actions'=>array('admin','delete','index','view','create','update'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Cliente'),
		));
	}

	public function actionCreate() {
		$model = new Cliente;
        $model_user = new User;
                
		if (isset($_POST['Cliente'])) {
			$model->setAttributes($_POST['Cliente']);
			$model_user->setAttributes($_POST['User']);
			$model_user->tipo = 'CLIENTE';
                        $model_user->save(true);
			$model->user_id=$model_user->id;
			
			if ($model->save()) {			
			
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
			
		}

		$this->render('create', array( 'model' => $model, 'model_user' => $model_user));
	}
        

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Cliente');


		if (isset($_POST['Cliente'])) {
			$model->setAttributes($_POST['Cliente']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Cliente')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Cliente');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Cliente('search');
		$model->unsetAttributes();

		if (isset($_GET['Cliente']))
			$model->setAttributes($_GET['Cliente']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}