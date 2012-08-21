

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

<?php 
$menu=array();
$this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
            'name'=>'OTE',
            'value'=>'$data->id',
        ),
		array(
            'name'=>'Compania',
            'value'=>'$data->compania',
        ),
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