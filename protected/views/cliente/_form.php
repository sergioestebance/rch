<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'cliente-form',
	'enableAjaxValidation' => false,
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
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model, 'apellido', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model, 'telefono', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'entel'); ?>
		<?php echo $form->checkBox($model, 'entel'); ?>
		<?php echo $form->error($model,'entel'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'movistar'); ?>
		<?php echo $form->checkBox($model, 'movistar'); ?>
		<?php echo $form->error($model,'movistar'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('empleados')); ?></label>
		<?php echo $form->checkBoxList($model, 'empleados', GxHtml::encodeEx(GxHtml::listDataEx(Empleado::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('locals')); ?></label>
		<?php echo $form->checkBoxList($model, 'locals', GxHtml::encodeEx(GxHtml::listDataEx(Local::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->