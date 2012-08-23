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
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->radioButtonList($model,'estado',array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO', ),array('labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model, 'salt', array('maxlength' => 64, 'value'=>'28b206548469ce62182048fd9cf91760')); ?>
		<?php echo $form->error($model,'salt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->radioButtonList($model,'tipo',array('EMPLEADO' => 'EMPLEADO', 'CLIENTE' => 'CLIENTE', 'OPERADOR' => 'OPERADOR'),array('labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'entel'); ?>
		<?php echo $form->radioButtonList($model,'entel',array('SI' => 'SI', 'NO' => 'NO', ),array('labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'entel'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'movistar'); ?>
		<?php echo $form->radioButtonList($model,'movistar',array('SI' => 'SI', 'NO' => 'NO', ),array('labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'movistar'); ?>
		</div><!-- row -->

		
<?php
echo GxHtml::submitButton(Yii::t('app', 'CREAR'));
$this->endWidget();
?>
</div><!-- form -->