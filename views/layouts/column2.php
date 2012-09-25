<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
	<div class="span9">
		<?php echo $content; ?>
	</div>
	<div class="span3">
		<div class="well sidebar-nav">
			<?php
				$this->beginWidget('zii.widgets.CPortlet', array(
					'title'=>'Operations',
				));
				$this->widget('ext.bootstrap.widgets.TbMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'operations'),
				));
				$this->endWidget();
			?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>