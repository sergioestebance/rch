<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>



<p>
	<li><?php echo CHtml::link('Subitem',array('subitem/admin')); ?></li>
	<li><?php echo CHtml::link('Item',array('item/admin')); ?></li>
	<li><?php echo CHtml::link('Proyecto',array('proyecto/admin')); ?></li>
	<li><?php echo CHtml::link('Centros de Costos',array('centrocosto/admin')); ?></li>
	<li><?php echo CHtml::link('Tipos de Aportes',array('tipoaporte/admin')); ?></li>
	<li><?php echo CHtml::link('Especificaciones Tecnicas',array('et/admin')); ?></li>

</p>