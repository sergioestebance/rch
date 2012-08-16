<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'local-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model, 'ciudad', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model, 'direccion', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model, 'telefono', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'entel'); ?>
		<?php echo $form->textField($model, 'entel', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'entel'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'movistar'); ?>
		<?php echo $form->textField($model, 'movistar', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'movistar'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('recargas')); ?></label>
		<?php echo $form->checkBoxList($model, 'recargas', GxHtml::encodeEx(GxHtml::listDataEx(Recarga::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->