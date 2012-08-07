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
	/*	array(
            'name'=>'Local',
            'value'=>'$data->local',
        ),*/
		'celular',
		'monto',
		'estado',
            
/*		array(
            'name'=>'Comentario Recarga',
            'value'=>'$data->comentario',
        ),
*/

	array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{atender}',
			'buttons'=>array
			(			
			'view' => array('label' => 'Ver Recarga','url'=>'Yii::app()->createUrl("recarga/view", array("id"=>$data->id))',),
			'atender' => array(
					'label'=>'Nuevo Proceso de Compra',
					'url'=>'Yii::app()->createUrl("atencion/creaatencion", array("id"=>$data->id))',
					'imageUrl' => Yii::app()->request->baseUrl.'/images/ico/apply.png',
					'options' => array(
						'onclick'=>"js:$('#dialog_recarga').dialog('open')",
						'ajax'=>array(
							'url'=>"js:$(this).attr('href')",
							'data'=> "js:$(this).serialize()",
							'type'=>'post',
							'dataType'=>'json',
							'success'=>"function(data){
										$('#dialog_recarga').html(data.mensaje);
							}",
							),
						),
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


