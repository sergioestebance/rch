<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebar">
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'RECARGASCHILE'),
        array('label'=>'Inicio', 'icon'=>'home', 'url'=>$this->createUrl('site/index'), ),
        array('label'=>'Recargas', 'icon'=>'book', 'url'=>$this->createUrl('recarga/admin')),
        array('label'=>'Informes', 'icon'=>'pencil', 'url'=>$this->createUrl('recarga/index')),
        array('label'=>'OTRAS OPCIONES'),
        array('label'=>'Cuenta', 'icon'=>'user', 'url'=>$this->createUrl('user/admin')),
        array('label'=>'Configuracion', 'icon'=>'cog', 'url'=>$this->createUrl('user/admin')),
        array('label'=>'Ayuda', 'icon'=>'flag', 'url'=>$this->createUrl('site/about')),
    ),
)); ?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>