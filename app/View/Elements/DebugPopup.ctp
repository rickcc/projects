<?php if (AuthComponent::user('role') == 'admin') { ?>
	<?php
		if (!isset($label)) $label = "Debug Info";
		$id = "popupDebug_" . $label; 
		$id = preg_replace('/\s+/', '_', $id);
	?>
	<div style="display: none">
		<div id="<?php echo $id; ?>">
			<?php debug( $varToDisplay ) ?>
		</div>
	</div>
	<div class="actions">
		<ul><li><a href="#<?php echo $id; ?>" class="cbInline"><?php echo $label; ?></a></li></ul>
	</div>
<?php } ?>