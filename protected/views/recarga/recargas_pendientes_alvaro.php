<script type="text/javaScript">
function init(){

grill.update('recargas_pendientes-grid');
setTimeout("init()", 5000)
}
$(document).ready(function(){
grilla = $.fn.yiiGridView.update('recargas_pendientes-grid');
init();
});
</script>

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


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'recargas_pendientes-grid',
	'dataProvider'=>$dataProvider,
	'type'=>'striped bordered condensed',
	//'filter' => $model,
	'template'=>"{items}",
	'columns' => array(
		array(
            'name'=>'OTE',
            'value'=>'$data->id',
        ),
		array(
            'name'=>'Compania',
            'value'=>'$data->compania',
        ),
		'celular',
		'monto',
		'estado',


	array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view}{atender}',
			'buttons'=>array
			(			
			'view' => array('label' => 'Ver Recarga','url'=>'Yii::app()->createUrl("recarga/view", array("id"=>$data->id))',),
			'atender' => array(
					'label'=>'Atender',
					'url'=>'Yii::app()->createUrl("atencion/creaatencion", array("id"=>$data->id))',
					'icon'=>'check',
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


