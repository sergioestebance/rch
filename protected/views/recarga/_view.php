<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('local_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->local)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('celular')); ?>:
	<?php echo GxHtml::encode($data->celular); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('compania')); ?>:
	<?php echo GxHtml::encode($data->compania); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('monto')); ?>:
	<?php echo GxHtml::encode($data->monto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comentario')); ?>:
	<?php echo GxHtml::encode($data->comentario); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('estado')); ?>:
	<?php echo GxHtml::encode($data->estado); ?>
	<br />
	*/ ?>

</div>