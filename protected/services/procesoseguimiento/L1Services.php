<?php
Yii::import('application.services.procesoseguimiento.ControlseguimientoServices');
class L1Services extends ControlseguimientoServices{

	public function asignarEtapas($model) {
		
		$model_aj = new Aj;
		$model_aj->controlseguimiento_id=$model->id;
		$model_aj->tipo="FIC";
		$model_aj->save(false);
		
		$model_dp = new Directorproyecto;
		$model_dp->controlseguimiento_id=$model->id;
		$model_dp->save(false);
		
		$model_oc = new Oficioconductor;
		$model_oc->tipo="L";
		$model_oc->controlseguimiento_id=$model->id;
		$model_oc->save(false);
		
		$model_ro = new Resolucionof;
		$model_ro->controlseguimiento_id=$model->id;
		$model_ro->tipo="DA";
		$model_ro->save(false);
		
		$model_se = new Secretaria;
		$model_se->controlseguimiento_id=$model->id;
		$model_se->tipo="RESOFL1";
		$model_se->save(false);
		
		$model_con = new Contraloria;
		$model_con->controlseguimiento_id=$model->id;
		$model_con->tipo="L1";
		$model_con->save(false);
		
		$model_pub = new Publicacion;
		$model_pub->controlseguimiento_id=$model->id;
		$model_pub->save(false);
		
		$model_pe = new Procesoevaluacion ;
		$model_pe->controlseguimiento_id=$model->id;
		$model_pe->save(false);
		
		$model_oc = new Oficioconductor;
		$model_oc->controlseguimiento_id=$model->id;
		$model_oc->tipo="ADODES";
		$model_oc->save(false);		
		
		$model_radodes = new Resolucionadodes;
		$model_radodes->controlseguimiento_id=$model->id;
		$model_radodes->tipo="L1";
		$model_radodes->save(false);
		
		$model_sec = new Secretaria;
		$model_sec->controlseguimiento_id=$model->id;
		$model_sec->tipo="RESADODES";
		$model_sec->save(false);

		$model_con = new Contraloria;
		$model_con->controlseguimiento_id=$model->id;
		$model_con->tipo="FIRMARESADODES";
		$model_con->save(false);
		
		$model_rof= new Resolucionoficializada;
		$model_rof->controlseguimiento_id=$model->id;
		$model_rof->save(false);
		
		$model_adj = new Adjudicacion;
		$model_adj->controlseguimiento_id=$model->id;
		$model_adj->save(false);
		
		/*
		$model_ = new ;
		$model_->controlseguimiento_id=$model->id;
		$model_->save(false);
		*/
	}
	public function cargarEtapas($model){
	
	return $model;
	}

}