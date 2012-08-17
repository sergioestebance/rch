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
   
	
	<div class="row buttons">
				<?php //$this->widget('bootstrap.widgets.BootButton', array('buttonType'=>'reset', 'type'=>'primary', 'icon'=>'ok white', 'label'=>'INGRESAR')); ?> 
				<?php $this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'INGRESAR',
	'icon'=>'ok white',
	'url'=>'#myModal',
    'type'=>'primary',
	'htmlOptions'=>array(
			'data-toggle'=>'modal',
			),
   )); ?>
	</div>


<?php $this->beginWidget('bootstrap.widgets.BootModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>CONFIRMACION DE RECARGA</h3>
</div>
 
<div class="modal-body">
    <span id="numero_celular"><strong>NUMERO:</strong> 855566689</span><br>
	<span id="numero_celular"><strong>MONTO:</strong> 855566689</span><br>
	<span id="numero_celular"><strong>COMPANIA:</strong> 855566689</span><br>
</div>
 
<div class="modal-footer">
  <?php $this->widget('bootstrap.widgets.BootButton', array(
        'type'=>'success',
		'buttonType'=>'submit', 
        'label'=>'CONFIRMAR',
        'htmlOptions'=>array(
			'data-dismiss'=>'modal',
			'onclick'=>'js: $("#recarga-form").submit();',
			),
    )); ?>
    <?php $this->widget('bootstrap.widgets.BootButton', array(
        'label'=>'CANCELAR',
		'buttonType'=>'reset', 
		'type'=>'danger',
		'htmlOptions'=>array(
			'data-dismiss'=>'modal',
			//'onclick'=>'js: alert("CANCELAR");',
			),
    )); ?>
	
</div>
 

  
	<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

</div><!-- form -->