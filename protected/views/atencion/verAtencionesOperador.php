

<?php
$this->breadcrumbs=array(
	'Atenciones',
);

$this->menu=array(
	array('label'=>'Crear Recarga', 'url'=>array('create')),
	array('label'=>'Ver Ultimas recargas', 'url'=>array('ultimas')),
	array('label'=>'Ver mis Recarga', 'url'=>array('mias')),
	array('label'=>'Exportar', 'url'=>array('export')),
);

?>
<h1>Atenciones</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'atenciones_listas-grid',
	'type'=>'striped bordered condensed',
	'template'=>"{items}",
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
            'name'=>'OT',
            'value'=>'$data->recarga_id',
        ),
		array(
            'name'=>'Monto',
            'value'=>'$data->recarga->monto',
        ),
		array(
            'name'=>'Compania',
            'value'=>'$data->recarga->compania',
        ),
		'fecha',
		'tiempoRespuesta',
		
	),	
)); ?>