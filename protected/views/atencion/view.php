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
			'name' => 'cupo',
			'type' => 'raw',
			'value' => $model->cupo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->cupo)), array('cupo/view', 'id' => GxActiveRecord::extractPkValue($model->cupo, true))) : null,
			),
array(
			'name' => 'user',
			'type' => 'raw',
			'value' => $model->user !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->user, true))) : null,
			),
array(
			'name' => 'recarga',
			'type' => 'raw',
			'value' => $model->recarga !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->recarga)), array('recarga/view', 'id' => GxActiveRecord::extractPkValue($model->recarga, true))) : null,
			),
'fecha',
'tiempoRespuesta',
'estado',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('noprepagos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->noprepagos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('noprepago/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>