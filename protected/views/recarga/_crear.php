<script type="text/javaScript">
function confirmarDatos(){

 $("#numero_celular").text($("#Recarga_celular").val());
 $("#numero_monto").text($(".compactRadioGroup [name=Recarga[monto]]:radio:checked").val());

}

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
  $(".compactRadioGroup label:eq(0)").text("");
  $(".compactRadioGroup label:eq(0)").text("500");  
  
  $("#Recarga_monto_1").val("1000");
  $(".compactRadioGroup label:eq(1)").text("");
  $(".compactRadioGroup label:eq(1)").text("1000");
  
  $("#Recarga_monto_2").val("1500");
  $(".compactRadioGroup label:eq(2)").text("");
  $(".compactRadioGroup label:eq(2)").text("1500");
  
  $("#numero_compania").text("MOVISTAR");
       
});
$("#Recarga_compania_1").click(function() {
  $("#Recarga_monto_0").val("1000");
  $(".compactRadioGroup label:eq(0)").text("");
  $(".compactRadioGroup label:eq(0)").text("1000");
  
  $("#Recarga_monto_1").val("2000");
  $(".compactRadioGroup label:eq(1)").text("");
  $(".compactRadioGroup label:eq(1)").text("2000");
  
  $("#Recarga_monto_2").val("3000");
  $(".compactRadioGroup label:eq(2)").text("");
  $(".compactRadioGroup label:eq(2)").text("3000");
  
  $("#numero_compania").text("ENTEL");
     
});

$('#recarga-form').submit(function(){
if($("#Recarga_celular").val().length!=8){
  alert("EL CELULAR DEBE SER DE 8 DIGITOS");
  return false;
  }
  }
);
}
$(document).ready(init);

</script>

<?php
if(Yii::app()->user->hasFlash('error')){?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('error'); ?>
</div>

<?php }?>

<?php
if(Yii::app()->user->hasFlash('info')){?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('info'); ?>
</div>

<?php }?>	
	
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
	<div class="hola">
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
				<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'INGRESAR',
	'url'=>'#myModal',
    'type'=>'primary',
	'htmlOptions'=>array(
			'data-toggle'=>'modal',
			'onclick'=>'js: confirmarDatos();
						 $("button[name=yt0]").focus();	',
			),
   )); ?>
	</div>


<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>CONFIRMACION DE RECARGA</h3>
</div>
 
<div class="modal-body">
    <strong>NUMERO:</strong> <span id="numero_celular">855566689</span><br>
	<strong>MONTO:</strong> <span id="numero_monto">855566689</span><br>
	<strong>COMPANIA:</strong> <span id="numero_compania">MOVISTAR</span><br>
</div>
 
<div class="modal-footer">
  <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'success',
		'icon'=>'ok white',
		'buttonType'=>'submit', 
        'label'=>'CONFIRMAR',
        'htmlOptions'=>array(
			'data-dismiss'=>'modal',
			'onclick'=>'js: $("#recarga-form").submit();',
			),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'CANCELAR',
		'icon'=>'remove white',
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