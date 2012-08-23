<?php
Yii::import('application.services.procesoseguimiento.ControlseguimientoServices');
class LEServices extends ControlseguimientoServices{

	public function asignarEtapas($model) {
		
		$model_aj = new Aj;
		$model_aj->controlseguimiento_id=$model->id;
		$model_aj->tipo="FIC";
		$model_aj->save(false);
		
		$model_dp = new Directorproyecto;
		$model_dp->controlseguimiento_id=$model->id;
		$model_dp->save(false);
		
		$model_oc = new Oficioconductor;
		$model_oc->controlseguimiento_id=$model->id;
		$model_oc->tipo="L";
		$model_oc->save(false);
		
		$model_ro = new Resolucionof;
		$model_ro->controlseguimiento_id=$model->id;
		$model_ro->tipo="VAF";
		$model_ro->save(false);
		
		$model_se = new Secretaria;
		$model_se->controlseguimiento_id=$model->id;
		$model_se->tipo="RESOFLEP";
		$model_se->save(false);
		
		$model_con = new Contraloria;
		$model_con->controlseguimiento_id=$model->id;
		$model_con->tipo="LEP";
		$model_con->save(false);
		
		$model_pub = new Publicacion;
		$model_pub->controlseguimiento_id=$model->id;
		$model_pub->save(false);

		$model_pub = new Envinformeseva;
		$model_pub->controlseguimiento_id=$model->id;
		$model_pub->save(false);
		
		$model_oco = new Oficioconductor;
		$model_oco->controlseguimiento_id=$model->id;
		$model_oco->tipo="ADODES";
		$model_oco->save(false);
		
		$model_ce = new Comisionevaluacion;
		$model_ce->controlseguimiento_id=$model->id;
		$model_ce->save(false);
		
		$model_vaf = new Vaf;
		$model_vaf->controlseguimiento_id=$model->id;
		$model_vaf->save(false);
		
		$model_sec = new Secretaria;
		$model_sec->controlseguimiento_id=$model->id;
		$model_sec->tipo="RESADODES";
		$model_sec->save(false);
		
		$model_cont = new Contraloria;
		$model_cont->controlseguimiento_id=$model->id;
		$model_cont->tipo="FIRMARESADODES";
		$model_cont->save(false);
		
		$model_adj = new Adjudicacion;
		$model_adj->controlseguimiento_id=$model->id;
		$model_adj->save(false);
		
		$model_ris = new Recinformacionsup;
		$model_ris->controlseguimiento_id=$model->id;
		$model_ris->save(false);
		
		$model_asju = new Asesorjuridico;
		$model_asju->controlseguimiento_id=$model->id;
		$model_asju->save(false);
		
		$model_asec = new Abogadasecretaria;
		$model_asec->controlseguimiento_id=$model->id;
		$model_asec->tipo="REVCONTRATO";
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
	public function cargarEtapas($model){
	
	return $model;
	}

}