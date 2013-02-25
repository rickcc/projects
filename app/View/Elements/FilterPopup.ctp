<div style="display: none">
	<div id="FilterPopup">
		<?php echo $this->Filter->filterForm(Inflector::singularize( $this->name ), array('legend' => "Filter $this->name")); ?>
		<?php // debug( Inflector::singularize( $this->name ) ); ?>
	</div>
</div>
<div class="actions">
	<ul><li><a href="#FilterPopup" class="cbInline">Filter List</a></li></ul>
</div>
