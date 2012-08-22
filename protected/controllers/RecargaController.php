<?php

class RecargaController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Recarga'),
		));
	}

	public function actionCreate() {
		$model = new Recarga;

		$this->performAjaxValidation($model, 'recarga-form');

		if (isset($_POST['Recarga'])) {
			$model->setAttributes($_POST['Recarga']);
			$session=Yii::app()->getSession();
			$model=$session['_id'];

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('_crear', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Recarga');

		$this->performAjaxValidation($model, 'recarga-form');

		if (isset($_POST['Recarga'])) {
			$model->setAttributes($_POST['Recarga']);

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
			$this->loadModel($id, 'Recarga')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Recarga');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Recarga('search');
		$model->unsetAttributes();

		if (isset($_GET['Recarga']))
			$model->setAttributes($_GET['Recarga']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	
		
/**********************************************************
			DESCRIP:	MOSTRAR TODAS LAS RECARGAS CON ESTADO PENDIENTE
			REQUIERE:	$ID DEL USUARIO
			UTILIZA:	VISTA 'recargas_pendientes'
************************************************************/	
	public function actionRecargasPendientes() {
		
		$model = new Recarga('search');
		$model->unsetAttributes();

		$criteria=new CDbCriteria(array(
			'condition'=>'estado = :estado',
			'order'=>'id DESC',
			'limit'=>500,
			'params'=> array(':estado' => 'PENDIENTE'),
		));
		
		$dataProvider=new CActiveDataProvider('Recarga',array('criteria'=>$criteria,));
		$dataProvider->setPagination(false);
		//FIN CONSULTA
		$this->render('recargas_pendientes',array('dataProvider'=>$dataProvider));
		
	}
	
	
/********************
			DESCRIP:	ACTION QUE PERMITE VER LAS RECARGAS ATENDIDAS Y APROBADAS POR UN OPERADOR
			REQUIERE:	$ID DEL USUARIO
			UTILIZA:	VISTA 'recargas_atendidas'
********************/	
	public function actionRecargasAtendidas()
{
		$model = new Recarga('search');
		$model->unsetAttributes();
		$criteria=new CDbCriteria(array(
			'condition'=>'usuario_id = :usuario_id',
			'order'=>'id DESC',
			'limit'=>500,
			'params'=> array(':usuario_id' => 1),
		));
		$model=Recarga::model()->findAll($criteria);
		$dataProvider=new CActiveDataProvider('Recarga',array('criteria'=>$criteria,));
		$dataProvider->setPagination(false);
		
		
		//FIN CONSULTA
		$this->render('recargas_atendidas',array('dataProvider'=>$dataProvider,'model'=>$model));
	}
	
	/********************
			DESCRIP:	ACTION QUE PERMITE VER LAS RECARGAS REALIZADAS POR LOS EMPLEADOS DE UN CLIENTE
			REQUIERE:	$ID DEL CLIENTE
			UTILIZA:	VISTA 'recargas_realizadas'
*******************
	public function actionRecargasRealizadas()
	{
			$model = new Recarga('search');
			$model->unsetAttributes();
			$session=Yii::app()->getSession();
			$id_user=($session['_id']);
			
			$criteria=new CDbCriteria(array(
				'condition'=>'user_id =:user_id and estado =:estado',
				'order'=>'id DESC',
				'limit'=>500,
				'params'=> array(':user_id' => $id_user, ':estado'=>'PENDIENTE'),
					));
			$model=Recarga::model()->findAll($criteria);
			$dataProvider=new CActiveDataProvider('Recarga',array('criteria'=>$criteria,));
			$dataProvider->setPagination(false);		
			
			//FIN CONSULTA
			$this->render('recargas_realizadas',array('dataProvider'=>$dataProvider,'model'=>$model));
		} */
  
/********************
 * 	DESCRIP:	ACTION QUE PERMITE VER LAS RECARGAS INGRESADAS POR EL EMPLEADO.
	REQUIERE:	$ID DEL EMPLEADO
	UTILIZA:	VISTA 'Ver_Recargas'
********************/
	public function actionRecargasIngresadas()
	{
			$model = new Recarga('search');
			$model->unsetAttributes();
			
			$criteria=new CDbCriteria(array(
				'condition'=>'usuario_id =:usuario_id',
				'order'=>'id DESC',
				'limit'=>500,
				'params'=> array(':usuario_id' => 1),
					));
			$model=Recarga::model()->findAll($criteria);
			$dataProvider=new CActiveDataProvider('Recarga',array('criteria'=>$criteria,));
			$dataProvider->setPagination(false);
			
			
			//FIN CONSULTA
			$this->render('recargas_ingresadas',array('dataProvider'=>$dataProvider,'model'=>$model));
		}
	
	
	/********************
 * 	DESCRIP:	ACTION QUE PERMITE VER LAS RECARGAS INGRESADAS POR EL EMPLEADO).
	REQUIERE:	
	UTILIZA:	MODELO cargarListas, VISTA verListas
********************/
	
	public function actionVerListas()
	{
		
		$model = new Recarga('search');
		$model->unsetAttributes();
		$dataProvider=$model->cargarListas();
			
		$this->render('verListas',array('dataProvider'=>$dataProvider,'model'=>$model));
		
	}
	
	
/********************
 	DESCRIP:	ACTION QUE PERMITE VER LAS RECARGAS PENDIENTES POR EL EMPLEADO).
	REQUIERE:	
	UTILIZA:	MODELO cargarPendientes, VISTA verListas
********************/
	
	public function actionVerPendientes()
	{
		$model = new Recarga('search');
		$model->unsetAttributes();
		$dataProvider=$model->cargarPendientes();
			
		$this->render('verListas',array('dataProvider'=>$dataProvider,'model'=>$model));
	}


/********************
 	DESCRIP:	ACTION QUE PERMITE VER LAS RECARGAS RECHAZADAS POR EL EMPLEADO).
	REQUIERE:	
	UTILIZA:	MODELO cargarPendientes, VISTA verListas
********************/

	public function actionExport (){
			
		$model = new User('search');
		$model->unsetAttributes();
		//$model=$model->cargarUser();
		$id_user=User::model()->cargarUser();
		
		$model = $this->loadModel($id_user, 'User');
		
		Yii::app()->request->sendFile('recargas_'.$model->username.'.xls', 		
			$this->renderPartial('excel', array(
			'model' => $model,
			),true) 
		);

	}


}//fin fin