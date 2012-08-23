<?php

abstract class ProcesocompraServices {
	abstract protected function asignarEtapas($model);
	abstract protected function cargarEtapas($model);
	public function asignarTipo($model){
	
		$sigla=$model->sigla;
		if($sigla=="L1" OR $sigla=="LE" OR $sigla=="LP"){
			$model->tipo="L1EP";
		}elseif($sigla=="TD"){
		$model->tipo="TD";
		}elseif($sigla=="ME" OR $sigla=="CM"){
		$model->tipo="CME";
		}
		$model->save(true);
		}
	public function anularProceso($model){
	$model->estado = "ANULADO";
	$model->save(true);
	}
	
	public function activarProceso($model){
	$model->estado = "ACTIVO";
	$model->save(true);
	}
	
	public function finalizarProceso($model){
	$model->estado = "FINALIZADO";
	$model->save(true);
	}
		
}