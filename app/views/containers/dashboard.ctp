<div class="stat stat-first">
	<h4>Locations</h4>
	<span class="stat-value"><?php echo number_format($total_locations); ?></span>
	<?php echo $this->Html->link('View Your Locations', array('controller' => 'locations', 'action' => 'index'), array('class' => 'stat-view')); ?>
</div>
<div class="stat">
	<h4>Containers</h4>
	<span class="stat-value"><?php echo number_format($total_containers); ?></span>
	<?php echo $this->Html->link('View Your Containers', array('controller' => 'containers', 'action' => 'index'), array('class' => 'stat-view')); ?>
</div>
<div class="stat">
	<h4>Items</h4>
	<span class="stat-value"><?php echo number_format($total_container_items); ?></span>
	<?php echo $this->Html->link('View Your Items', array('controller' => 'container_items', 'action' => 'index'), array('class' => 'stat-view')); ?>
</div>
<div style="clear: both">&nbsp;</div>
<?php
	echo $this->GChart->start('containers_trend');
	echo $this->GChart->visualize('containers_trend', $container_graph);
?>
<?php if(!empty($recent_items)) {
	echo $html->tag('h2', 'Recent Items').$html->tag('br');
	foreach($recent_items as $item) {
?>
<div class="container-item-list" >
	<span class="container-item-list-quantity">
		<?php echo $item['ContainerItem']['quantity']; ?>
	</span>
	<p class="container-item-list-content">
		<?php echo Sanitize::html($item['ContainerItem']['body'], array('remove' => true)); ?><br/>
		<?php echo $html->link($item['Container']['name'], array('controller' => 'containers', 'action' => 'view', $item['Container']['slug'])); ?><br/>
		<small><?php echo $time->timeAgoInWords($item['ContainerItem']['modified']); ?></small>
	</p>
	<div style="clear: both"></div>
</div>
<?php
	}
}
