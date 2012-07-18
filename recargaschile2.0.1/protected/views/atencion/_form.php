<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'atencion-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'recarga_id'); ?>
		<?php echo $form->dropDownList($model, 'recarga_id', GxHtml::listDataEx(Recarga::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'recarga_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'operador_id'); ?>
		<?php echo $form->dropDownList($model, 'operador_id', GxHtml::listDataEx(Operador::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'operador_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cupo_id'); ?>
		<?php echo $form->dropDownList($model, 'cupo_id', GxHtml::listDataEx(Cupo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'cupo_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model, 'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tiempoRespuesta'); ?>
		<?php echo $form->textField($model, 'tiempoRespuesta'); ?>
		<?php echo $form->error($model,'tiempoRespuesta'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model, 'estado', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'estado'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('noprepagos')); ?></label>
		<?php echo $form->checkBoxList($model, 'noprepagos', GxHtml::encodeEx(GxHtml::listDataEx(Noprepago::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->