<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebar">
		<?php 
		$_tipo="EMPLEADO";
		if($_tipo=="EMPLEADO"):?>
		
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'RECARGASCHILE'),
        array('label'=>'Ingresar recarga', 'icon'=>'pencil', 'url'=>$this->createUrl('site/index'), ),
        array('label'=>'Ver ingresadas', 'icon'=>'book', 'url'=>$this->createUrl('recarga/recargasRealizadas')),
        array('label'=>'Ver atendidas', 'icon'=>'check', 'url'=>$this->createUrl('recarga/recargasIngresadas')),
        array('label'=>'OTRAS OPCIONES'),
        array('label'=>'Cuenta', 'icon'=>'user', 'url'=>$this->createUrl('user/admin')),
        array('label'=>'Configuracion', 'icon'=>'cog', 'url'=>$this->createUrl('user/admin')),
        array('label'=>'Ayuda', 'icon'=>'flag', 'url'=>$this->createUrl('site/about')),
    ),
)); ?>

<?php endif; ?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>