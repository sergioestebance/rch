<?php

class EmpleadoController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow', 
				'actions'=>array('admin','delete','index','view','create','update',),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Empleado'),
		));
	}

	public function actionCreate() {
		$model = new Empleado;
                $model_user= new User;

		if (isset($_POST['Empleado'])) {
			$model->setAttributes($_POST['Empleado']);
                        $model_user->setAttributes($_POST['User']);
			$model_user->tipo = 'EMPLEADO';
                        $model_user->save(true);
			$model->user_id=$model_user->id;
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model, 'model_user' =>$model_user));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Empleado');


		if (isset($_POST['Empleado'])) {
			$model->setAttributes($_POST['Empleado']);

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
			$this->loadModel($id, 'Empleado')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Empleado');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Empleado('search');
		$model->unsetAttributes();

		if (isset($_GET['Empleado']))
			$model->setAttributes($_GET['Empleado']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}