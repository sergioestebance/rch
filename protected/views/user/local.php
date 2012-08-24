<?php
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Elegir local',
);
?>

<h1>Eleccion de local</h1>

<?php 
if(Yii::app()->user->hasFlash('info')){?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('info'); ?>
</div>

<?php } ?>


<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'local-grid',
	'dataProvider' => $model,
	'type'=>'striped bordered condensed',
	'template'=>"{items}",
	'columns' => array(
		'id',
		'ciudad',
		'direccion',
		'telefono',
		'nombre',
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array(
				'style'=>'width: 50px',
				'url'=>'#myModal',
				
				),
			'template'=>'{view}',
			'buttons'=>array(
				'view' => array(
					'label'=>'Elegir local',
					'url'=>'Yii::app()->createUrl("user/ingresar", array("id"=>$data->id))',
					'icon'=>'check',
					'options' => array(
						'ajax'=>array(
								'url'=>"js:$(this).attr('href')",
								'data'=> "js:$(this).serialize()",
								'type'=>'post',
								'dataType'=>'json',
								'success'=>"function(data){	
										if(data.status=='success'){
										window.location = data.content;
										}else{
										$('.flash-success').html(data.content);
										}
								}",
								),
					),
				),
			),
		),
	),
));
 ?>
