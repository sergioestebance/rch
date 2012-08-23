<?php

class CMEServices extends ProcesocompraServices{

	public function asignarEtapas($model){
		
		/*
		$model_peticionet = new Peticionet;
		$model_peticionet->procesocompra_id=$model->id;
		$model_peticionet->save(true);	
		
		$model_solicitudcompra = new Solicitudcompra;
		$model_solicitudcompra->procesocompra_id=$model->id;
		$model_solicitudcompra->save(true);	
		*/		
		
		$model_et = new Et;
		$model_et->procesocompra_id=$model->id;
		$model_et->save(true);
	}
	public function cargarEtapas($model){
	return $model;
	}
}