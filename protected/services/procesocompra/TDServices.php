<?php

class TDServices extends ProcesocompraServices{

	public function asignarEtapas($model) {
		/*$model_peticionet = new Peticionet;
		$model_peticionet->procesocompra_id=$model->id;
		$model_peticionet->save(true);
		
		$model_solicitudcompra = new Solicitudcompra;
		$model_solicitudcompra->procesocompra_id=$model->id;
		$model_solicitudcompra->save(true);		
		
		$model_enviobase = new Enviobase;
		$model_enviobase->procesocompra_id=$model->id;
		$model_enviobase->save(true);		
		
		$model_adquisicion = new Adquisicion;
		$model_adquisicion->procesocompra_id=$model->id;
		$model_adquisicion->save(true);*/
		
		$model_et = new Et;
		$model_et->procesocompra_id=$model->id;
		$model_et->save(true);
	
	return true;
	}
	
	public function cargarEtapas($model){
	return $model;
	}
}