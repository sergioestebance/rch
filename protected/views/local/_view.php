<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ciudad')); ?>:
	<?php echo GxHtml::encode($data->ciudad); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('direccion')); ?>:
	<?php echo GxHtml::encode($data->direccion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('telefono')); ?>:
	<?php echo GxHtml::encode($data->telefono); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<?php echo GxHtml::encode($data->nombre); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('entel')); ?>:
	<?php echo GxHtml::encode($data->entel); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('movistar')); ?>:
	<?php echo GxHtml::encode($data->movistar); ?>
	<br />
	*/ ?>

</div>