<script type="text/javaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javaScript">
function init(){
$("#Recarga_compania_0").attr("checked",true);
$("#Recarga_monto_0").attr("checked",true);

	$("#Recarga_celular").keypress(function (e){
		var keycode=e.which;
		if(48>keycode || keycode>57){
		if(keycode!=8){
		return false;
		}
		}
		});

$("#Recarga_compania_0").click(function() {

  $("#Recarga_monto_0").val("500");
  $(".compactRadioGroup label:eq(2)").text("");
  $(".compactRadioGroup label:eq(2)").text("500");  
  
  $("#Recarga_monto_1").val("1000");
  $(".compactRadioGroup label:eq(3)").text("");
  $(".compactRadioGroup label:eq(3)").text("1000");
  
  $("#Recarga_monto_2").val("1500");
  $(".compactRadioGroup label:eq(4)").text("");
  $(".compactRadioGroup label:eq(4)").text("1500");
  
       
});
$("#Recarga_compania_1").click(function() {
  $("#Recarga_monto_0").val("1000");
  $(".compactRadioGroup label:eq(2)").text("");
  $(".compactRadioGroup label:eq(2)").text("1000");
  
  $("#Recarga_monto_1").val("2000");
  $(".compactRadioGroup label:eq(3)").text("");
  $(".compactRadioGroup label:eq(3)").text("2000");
  
  $("#Recarga_monto_2").val("3000");
  $(".compactRadioGroup label:eq(4)").text("");
  $(".compactRadioGroup label:eq(4)").text("3000");
  
     
});

$('#recarga-form').submit(function() {
if($("#Recarga_celular").val().length!=8){
  alert("EL CELULAR DEBE SER DE 8 DIGITOS");
  return false;
  }
  }
);
}
$(document).ready(init);

</script>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recarga-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'celular',array('style'=>'font-size:25px')); ?>
		<?php echo $form->textField($model,'celular',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
	<div class="compactRadioGroup">
		<?php echo $form->radioButtonList($model,'compania',array('Movistar' => 'Movistar', 'Entel' => 'Entel'),array('labelOptions'=>array('style'=>'display:inline'))); ?>
	</div>
		<?php echo $form->error($model,'compania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto',array('style'=>'font-size:25px')); ?>
	<div class="compactRadioGroup">
		<?php echo $form->radioButtonList($model,'monto',array('500' => '500', '1000' => '1000', '1500' => '1500'),array('labelOptions'=>array('style'=>'display:inline'))); ?>
	</div>
		<?php echo $form->error($model,'monto'); ?>
	</div>


	<div class="row">
		
		<?php echo $form->hiddenField($model,'idCliente', array('value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'idCliente'); ?>
	</div>
    
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( 
    'id'=>'dialogo_confirmacion',
    'options'=>array(
        'title'=>'Confirmar',
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>550,
        'height'=>470,
    ),
));?>

<?php $this->endWidget();?>