<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'noprepago-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'atencion_id'); ?>
		<?php echo $form->dropDownList($model, 'atencion_id', GxHtml::listDataEx(Atencion::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'atencion_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model, 'numero', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numero'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'compania'); ?>
		<?php echo $form->textField($model, 'compania', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'compania'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->