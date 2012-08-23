<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Eleccion de local</h1>

<?php if(Yii::app()->user->hasFlash('info')){?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('info'); ?>
</div>

<?php } ?>


<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'local-grid',
	'dataProvider' => $model,
	'type'=>'striped bordered condensed',
	//'filter' => $model,
	'template'=>"{items}",
	'columns' => array(
		'id',
		'ciudad',
		'direccion',
		'telefono',
		'nombre',
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
			'template'=>'{view}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Elegir local',
					'url'=>'Yii::app()->createUrl("#", array("id"=>$data->id))',
					'icon'=>'check',
				),
			),
		),
	),
));
 ?>



