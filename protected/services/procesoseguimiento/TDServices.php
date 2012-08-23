<?php
Yii::import('application.services.procesoseguimiento.ControlseguimientoServices');
class TDServices extends ControlseguimientoServices{

	public function asignarEtapas($model) {
			
		$model_aj = new Aj;
		$model_aj->controlseguimiento_id=$model->id;
		$model_aj->tipo="UTA";
		$model_aj->save(false);
		
		$model_se = new Secretaria;
		$model_se->controlseguimiento_id=$model->id;
		$model_se->tipo="RESADODES";
		$model_se->save(false);
		
		$model_con = new Contraloria;
		$model_con->controlseguimiento_id=$model->id;
		$model_con->tipo="FIRMARESADODES";
		$model_con->save(false);
		
		if ($UTM>100){
		
		$model_reci = new Recopilacioninfo;
		$model_reci->controlseguimiento_id=$model->id;
		$model_reci->save(false);
		
		$model_asec = new Abogadasecretaria;
		$model_asec->controlseguimiento_id=$model->id;
		$model_asec->tipo="RESOF";
		$model_asec->save(false);
		
		$model_ecf = new Enviocontratofirma ;
		$model_ecf->controlseguimiento_id=$model->id;
		$model_ecf->save(false);
		
		$model_rocv = new Resofcontratovaf;
		$model_rocv->controlseguimiento_id=$model->id;
		$model_rocv->save(false);
		
		$model_rofc= new Resofcontrato;
		$model_rofc->controlseguimiento_id=$model->id;
		$model_rofc->tipo="SECRETARIA";
		$model_rofc->save(false);
		
		$model_rofcc= new Resofcontrato;
		$model_rofcc->controlseguimiento_id=$model->id;
		$model_rofcc->tipo="CONTARLORIA";
		$model_rofcc->save(false);
		
		}
		
		else{
		
		$model_rof = new Resolucionof;
		$model_rof->controlseguimiento_id=$model->id;
		$model_rof->save(false);
		
		$model_rofc= new Resofcontrato;
		$model_rofc->controlseguimiento_id=$model->id;
		$model_rofc->tipo="SECRETARIA";
		$model_rofc->save(false);
		
		$model_rofcc= new Resofcontrato;
		$model_rofcc->controlseguimiento_id=$model->id;
		$model_rofcc->tipo="CONTARLORIA";
		$model_rofcc->save(false);
		
		}
	return true;
	}
	
	public function cargarEtapas($model){
	return $model;
	}
}