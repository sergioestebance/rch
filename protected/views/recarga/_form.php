<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'recarga-form',
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
		<?php echo $form->labelEx($model,'local_id'); ?>
		<?php echo $form->dropDownList($model, 'local_id', GxHtml::listDataEx(Local::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'local_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model, 'celular', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'celular'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'compania'); ?>
		<?php echo $form->textField($model, 'compania', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'compania'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model, 'monto', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'monto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comentario'); ?>
		<?php echo $form->textField($model, 'comentario', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'comentario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->

		<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->