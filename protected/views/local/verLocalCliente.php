<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'user',
			'type' => 'raw',
			'value' => $model->user !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))) : null,
			),
'ciudad',
'direccion',
'telefono',
'nombre',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('recargas')); ?></h2>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'recarga-grid',
	'dataProvider' => $dataProvider,
	'type'=>'striped bordered condensed',
	
	'template'=>"{items} {summary}",
	'summaryText'=>'total : {start} to {end} from {count}',
	'columns' => array(
		'id',
		'celular',
		'compania',
		'monto',
		/*
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
		*/
       
	),
)); ?>