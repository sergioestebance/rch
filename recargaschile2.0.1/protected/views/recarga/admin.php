<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('recarga-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'recarga-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		array(
				'name'=>'usuario_id',
				'value'=>'GxHtml::valueEx($data->usuario)',
				'filter'=>GxHtml::listDataEx(Empleado::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'cupo_id',
				'value'=>'GxHtml::valueEx($data->cupo)',
				'filter'=>GxHtml::listDataEx(Cupo::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'local_id',
				'value'=>'GxHtml::valueEx($data->local)',
				'filter'=>GxHtml::listDataEx(Local::model()->findAllAttributes(null, true)),
				),
		'ot',
		'celular',
		/*
		'compania',
		'monto',
		'comentario',
		'estado',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>