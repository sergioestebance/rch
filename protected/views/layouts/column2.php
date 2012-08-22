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
		$session=Yii::app()->getSession();
		$_tipo=($session['_tipo']);
		if($_tipo=="ADMIN"):?>
		
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'RECARGASCHILE'),
        array('label'=>'Ingresar recarga', 'icon'=>'pencil', 'url'=>$this->createUrl('recarga/create'), ),
        array('label'=>'Ver Listas', 'icon'=>'book', 'url'=>$this->createUrl('recarga/verListas')),
        array('label'=>'Ver Pendientes', 'icon'=>'check', 'url'=>$this->createUrl('recarga/verPendientes')),
        array('label'=>'OTRAS OPCIONES'),
        array('label'=>'Cuenta', 'icon'=>'user', 'url'=>$this->createUrl('user/admin')),
        array('label'=>'Configuracion', 'icon'=>'cog', 'url'=>$this->createUrl('user/admin')),
        array('label'=>'Ayuda', 'icon'=>'flag', 'url'=>$this->createUrl('site/about')),
    ),
)); ?>


<?php endif; ?>
		</div><!-- sidebar -->
	</div>
	
	<div class="span-5 last">
		<div id="sidebar">
		<?php 
		$session=Yii::app()->getSession();
		$_tipo=($session['_tipo']);
		if($_tipo=="OPERADOR"):?>
		
<?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'RECARGASCHILECLIENTE'),
        array('label'=>'Ver recargas', 'icon'=>'pencil', 'url'=>$this->createUrl('#'), ),
        array('label'=>'Ver listas', 'icon'=>'book', 'url'=>$this->createUrl('recarga/verListas')),
        array('label'=>'Ver todas', 'icon'=>'check', 'url'=>$this->createUrl('recarga/verPendientes')),
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