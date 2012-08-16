<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('atencion_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->atencion)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('numero')); ?>:
	<?php echo GxHtml::encode($data->numero); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('compania')); ?>:
	<?php echo GxHtml::encode($data->compania); ?>
	<br />

</div>