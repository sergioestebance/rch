

<?php
$this->breadcrumbs=array(
	'Recargas',
);

$this->menu=array(
	array('label'=>'Crear Recarga', 'url'=>array('create')),
	array('label'=>'Ver Ultimas recargas', 'url'=>array('ultimas')),
	array('label'=>'Ver mis Recarga', 'url'=>array('mias')),
	array('label'=>'Exportar', 'url'=>array('export')),
);

?>
<h1>Recargas</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'recargas_pendientes-grid',
	'type'=>'striped bordered condensed',
	//'filter' => $model,
	'template'=>"{items}",
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
            'name'=>'OTE',
            'value'=>'$data->id',
        ),
		'compania',
		array(
            'name'=>'Local',
            'value'=>'$data->local',
        ),
		'celular',
		'monto',
		'estado',
		array(
            'name'=>'Comentario Recarga',
            'value'=>'$data->comentario',
        ),

	),	
)); ?>