<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'name' => 'usuario',
			'type' => 'raw',
			'value' => $model->usuario !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->usuario)), array('empleado/view', 'id' => GxActiveRecord::extractPkValue($model->usuario, true))) : null,
			),
array(
			'name' => 'cupo',
			'type' => 'raw',
			'value' => $model->cupo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->cupo)), array('cupo/view', 'id' => GxActiveRecord::extractPkValue($model->cupo, true))) : null,
			),
array(
			'name' => 'local',
			'type' => 'raw',
			'value' => $model->local !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->local)), array('local/view', 'id' => GxActiveRecord::extractPkValue($model->local, true))) : null,
			),
'ot',
'celular',
'compania',
'monto',
'comentario',
'estado',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('atencions')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->atencions as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('atencion/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('noprepagos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->noprepagos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('noprepago/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>