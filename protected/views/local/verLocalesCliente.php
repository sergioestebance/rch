
<?php
$this->breadcrumbs=array(
	'Locales',
);

?>
<h1>Locales</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'locales-grid',
	'dataProvider'=>$dataProvider,
	'type'=>'striped bordered condensed',
	'template'=>"{items}",
	'columns'=>array(
		
		'ciudad',
		'nombre',
		'direccion',
		'telefono',
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
			'template'=>'{view}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Ver local',
					'url'=>'Yii::app()->createUrl("local/verLocalCliente", array("id"=>$data->id))',
					'icon'=>'icon-zoom-in',
					'options' => array(
						
					),
				),
			),
		),
		),	
)); ?>