<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'atencion-form',
	'enableAjaxValidation' => true,
));
?>
<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio', // 'checkbox' or 'radio'
    'buttons' => array(
		array('label'=>'LISTA'),
        array('label'=>'RECHAZO'),
        array('label'=>'RECHAZO NO PREPAGO'),
        
    ),
)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->