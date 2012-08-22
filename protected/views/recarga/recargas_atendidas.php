

<?php
$this->breadcrumbs=array(
	'Recargas',
);

$this->menu=array(
	array('label'=>'Crear Recarga', 'url'=>array('create')),
	array('label'=>'Ver Ultimas recargas', 'url'=>array('ultimas')),
	array('label'=>'Ver mis Recarga', 'url'=>array('mias')),
);

?>
<h1>Recargas</h1>
<?php 
$menu=array();
$this->widget('bootstrap.widgets.BootGridView', array(
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'type'=>'striped bordered condensed',
	'columns'=>array(
		array(
            'name'=>'OTE',
            'value'=>'$data->id',
        ),
		'compania',
		'local',
		'celular',
		'monto',
		'estado',
		array(
            'name'=>'Comentario Recarga',
            'value'=>'$data->comentario',
        ),

	),	
)); ?>