<?php
Yii::import('application.services.procesocompra.ProcesocompraServices');
class L1EPServices extends ProcesocompraServices{

	public function asignarEtapas($model) {
		
		/*
		$model_peticionet = new Peticionet;
		$model_peticionet->procesocompra_id=$model->id;
		$model_peticionet->save(false);
		
		$model_solicitudcompra = new Solicitudcompra;
		$model_solicitudcompra->procesocompra_id=$model->id;
		$model_solicitudcompra->save(false);
		
		$model_enviobase = new Enviobase;
		$model_enviobase->procesocompra_id=$model->id;
		$model_enviobase->save(false);
		
		$model_adquisicion = new Adquisicion;
		$model_adquisicion->procesocompra_id=$model->id;
		$model_adquisicion->save(false);
		*/
		
		$model_et = new Et;
		$model_et->procesocompra_id=$model->id;
		$model_et->save(false);
	}
	public function cargarEtapas($model){
	
	return $model;
	}

}