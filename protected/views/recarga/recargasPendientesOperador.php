


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
	'dataProvider'=>$dataProvider,
	'type'=>'striped bordered condensed',
	//'filter' => $model,
	'template'=>"{items}",
	'columns' => array(
		array(
            'name'=>'OT',
            'value'=>'$data->id',
        ),
		'compania',
		'celular',
		'monto',
		'estado',


	array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{atender}',
			'buttons'=>array
			(			
			'atender' => array(
					'label'=>'Atender',
					'url'=>'Yii::app()->createUrl("atencion/creaatencion", array("id"=>$data->id))',
					'icon'=>'ok-circle',
					/*'options' => array(
						'onclick'=>"js:",
						'ajax'=>array(
							'url'=>"js:$(this).attr('href')",
							'data'=> "js:$(this).serialize()",
							'type'=>'post',
							'dataType'=>'json',
							'success'=>"function(data){
										
										$.fn.yiiGridView.update('recargas_pendientes-grid');
										
										if(data.status=='processing'){
										
										$('#dialog_recarga').html(data.mensaje);
										$('#dialog_recarga form').submit(ingresarPago);
										
										}
										else{
											$('#dialog_recarga').html(data.mensaje);
											setTimeout(\"$('#dialog_pago').dialog('close') \",3000);
										}
										
							}",
							),
						),*/
				),				
				),
			),	
	
	
)
        ))
        ;
?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( 
    'id'=>'dialog_recarga',
    'options'=>array(
        'title'=>'Crear atencion',
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>550,
        'height'=>470,
    ),
));?>
<div id="dialog_recarga"></div>
 
<?php $this->endWidget();?>