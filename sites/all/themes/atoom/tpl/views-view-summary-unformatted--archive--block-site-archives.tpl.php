<?php if ($rows): ?>
<ul class="list2">
	<?php foreach ($rows as $id => $row): ?>
	    <li><a href="<?php print $row->url; ?>"<?php print !empty($row_classes[$id]) ? ' class="' . $row_classes[$id] . '"' : ''; ?>><i class="fa fa-caret-right"></i><?php print $row->link; ?></a></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>