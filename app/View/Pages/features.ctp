<h2><?php echo __('Features'); ?></h2><br/><br/>
<div style="width: 85%; margin: 0 auto;">
	<?php echo $this->Html->image('features/container_view.png', array('style' => 'float: left; padding-right: 30px;')); ?>
	<p><b><?php echo __('Create containers'); ?></b> <?php echo __('and add items to those containers through the web interface.'); ?></p>
	<p><?php echo __("You will be able to track what's in your containers, and the quantity of each item.  This allows for easy inventory management."); ?></p>
	<div style="clear: both;  border-bottom: 1px solid #ccc; margin: 0 50px 20px 50px;">&nbsp;</div>
	<?php echo $this->Html->image('features/qr_label.png', array('style' => 'float: left; margin-right: 30px; border-left: 1px solid #666; border-bottom: 1px solid #666; border-right: 1px solid #666;')); ?>
	<p>
		<b><?php echo __('Create and print QR labels'); ?></b> <?php echo __('to attach to containers.');?><br/><br/>
		<?php echo __('Scan with your smart phone and instantly have access to the manifest of the contents within the labeled container.'); ?>
	</p>
	<div style="clear: both;  border-bottom: 1px solid #ccc; margin: 0 50px 20px 50px;">&nbsp;</div>
	<div style="float: left; width: 430px; height: 100px; text-align: center;">
		<?php echo $this->Html->image('features/search.png'); ?>
	</div>
	<p>
		<b><?php echo __('Find items instantly'); ?></b>.<br/><br/>
		<?php echo __('Search the contents of all containers and find the container of the item searched.'); ?>
	</p>
	<div style="clear: both;  border-bottom: 1px solid #ccc; margin: 0 50px 20px 50px;">&nbsp;</div>
	<div style="float: left; width: 430px; text-align: center;">
		<?php echo $this->Html->image('features/mobile.png'); ?>
	</div>
	<p>
		<b><?php echo __('Boxmeup is mobile ready'); ?></b>.<br/><br/>
		<?php echo __('The web application is specially designed for smart phones, and in addition has a dedicated Android app on the Android Market.'); ?>
	</p>
	<div style="clear: both;">&nbsp;</div>
</div>
<br/>
<?php echo $this->Html->link(__('Sign Up Today'), '/signup', array('class' => 'super button green', 'style' => 'float: right; margin-right: 75px;')); ?>
