<?php

class UserController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}


	public function actionIngresar($id){
	
	
	
	
	$local_model = $this->loadModel($id, 'Local');
	$estado=$local_model->user->estado;
	
	if (Yii::app()->request->isAjaxRequest)
        {
			if($estado!="ACTIVO"){
				echo CJSON::encode(array('status'=>'failure', 'content'=>'CLIENTE INACTIVO'));
				exit;               
			}
        }
	
	if (Yii::app()->request->isAjaxRequest)
        {
		if ($local_model->id!= NULL){
			$session=Yii::app()->getSession();
			$session['_local']=$local_model->id;
				if ($session['_local']!= NULL) {
				
					if (Yii::app()->request->isAjaxRequest){
							echo CJSON::encode(array(
							'status'=>'success', 
							'content'=>$this->createUrl('recarga/create'),
							));
						exit;               
					}
				}
		}
	}
	
}
	
	public function actionElegir()
	{
		
		$session=Yii::app()->getSession();
		$id_user=$session['_id'];
		$model_user = $this->loadModel($id_user, 'User');
		$id_user=$model_user->user->id;
		
		$locales= new CArrayDataProvider($model_user->user->locales,array());
		
		Yii::app()->user->setFlash('info', 'Porfavor seleccione el <strong>LOCAL</strong> en el cual se encuentra.');
		$this->render('local',array('model'=>$locales,'user_id'=>$id_user));
		
	}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'User'),
		));
	}

	public function actionCreate() {
		$model = new User;

		$this->performAjaxValidation($model, 'user-form');

		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);
			$model->password=$model->hashPassword($model->password,$model->salt);

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
		$model = $this->loadModel($id, 'User');

		$this->performAjaxValidation($model, 'user-form');

		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

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
			$this->loadModel($id, 'User')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('User');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new User('search');
		$model->unsetAttributes();

		if (isset($_GET['User']))
			$model->setAttributes($_GET['User']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}