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
			$this->widget('bootstrap.widgets.TbMenu',array(
			'type'=>'pills',
			'stacked'=> false,
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),	
		
		));
		
		?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>