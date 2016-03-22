<?php print render($title_prefix); ?>

<div class="container alicent">
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
	<div id="filters-container" class="cbp-l-filters-button">
		<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
            <?php print t('All') ?> <div class="cbp-filter-counter"></div>
        </div>
	<?php
		$name = 'project_categories';
		$myvoc = taxonomy_vocabulary_machine_name_load($name);
		$tree = taxonomy_get_tree($myvoc->vid);
		foreach ($tree as $term) {
		 print '<div data-filter=".'.$term->tid.'" class="cbp-filter-item">'.$term->name.'<div class="cbp-filter-counter"></div></div>';
		}
	?>
	</div>
	<p class="clearfix margin_bottom3"></p>
<?php if ($rows): ?>
	<div id="grid-container4" class="cbp-l-grid-fullWidth">
		<?php print $rows; ?>
	</div>
<?php endif; ?>
</div>
