<?php print render($title_prefix); ?>

<div class="container alicent">
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
	<div class="cbp-panel">
		<div id="filters-container" class="cbp-l-filters-dropdown">
            <div class="cbp-l-filters-dropdownWrap">
                <div class="cbp-l-filters-dropdownHeader"><?php print t('Sort Gallery') ?></div>
                <div class="cbp-l-filters-dropdownList">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        <?php print t('All') ?> (<div class="cbp-filter-counter"></div> items)
                    </div>
					<?php
						$name = 'project_categories';
						$myvoc = taxonomy_vocabulary_machine_name_load($name);
						$tree = taxonomy_get_tree($myvoc->vid);
						foreach ($tree as $term) {
						 print '<div data-filter=".'.$term->tid.'" class="cbp-filter-item">'.$term->name.' (<div class="cbp-filter-counter"></div> items)</div>';
						}
					?>
				</div>
			</div>
		</div>
		<div id="grid-container6" class="cbp">
			<?php print $rows; ?>
		</div>
	</div>
<?php endif; ?>
</div>
