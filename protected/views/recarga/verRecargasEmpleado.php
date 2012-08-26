
<script type="text/javaScript">

function init(){
$.fn.yiiGridView.update('recargas_pendientes-grid');
}
$(document).ready(init);
</script>
<?php
$this->breadcrumbs=array(
	'Recargas',
);

?>
<h1>Recargas</h1>

<?php 				
	$this->widget('bootstrap.widgets.TbGridView', array(
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
)); 

?>