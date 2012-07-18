<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'cupo-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model, 'numero', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'numero'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cupo'); ?>
		<?php echo $form->textField($model, 'cupo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'cupo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('atencions')); ?></label>
		<?php echo $form->checkBoxList($model, 'atencions', GxHtml::encodeEx(GxHtml::listDataEx(Atencion::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('recargas')); ?></label>
		<?php echo $form->checkBoxList($model, 'recargas', GxHtml::encodeEx(GxHtml::listDataEx(Recarga::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->