<?php

class AtencionController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Atencion'),
		));
	}

	public function actionCreate() {
		$model = new Atencion;

		$this->performAjaxValidation($model, 'atencion-form');

		if (isset($_POST['Atencion'])) {
			$model->setAttributes($_POST['Atencion']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Atencion');

		$this->performAjaxValidation($model, 'atencion-form');

		if (isset($_POST['Atencion'])) {
			$model->setAttributes($_POST['Atencion']);

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
			$this->loadModel($id, 'Atencion')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Atencion');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Atencion('search');
		$model->unsetAttributes();

		if (isset($_GET['Atencion']))
			$model->setAttributes($_GET['Atencion']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}