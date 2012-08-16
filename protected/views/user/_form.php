<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>


		<div class="row">
		<?php echo $form->labelEx($model,'Nombre de cuenta'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45,'style' => "text-transform: lowercase;")); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'Contrase&ntilde;a'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 45, )); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->

		<div class="row">
		<?php echo $form->labelEx($model,'Tipo de Cuenta'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->