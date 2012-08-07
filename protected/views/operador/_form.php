<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'operador-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

        
                <div class="row">
		<?php echo $form->labelEx($model_user,'username'); ?>
		<?php echo $form->textField($model_user, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model_user,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model_user,'password'); ?>
		<?php echo $form->textField($model_user, 'password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model_user,'password'); ?>
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

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->