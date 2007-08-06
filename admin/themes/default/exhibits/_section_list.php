<?php foreach( $exhibit->Sections as $key => $section ): ?>
	<li id="section_<?php echo $key; ?>">
		<span class="left">
		<span class="handle"><img src="<?php echo img('icons/arrow_move.png'); ?>" alt="Drag" /></span>
		<span class="input"><?php text(array('name'=>"Sections[$key][order]",'size'=>2,'class'=>'order-input'), $key); ?></span>

		<span class="section-title"><?php echo h($section->title); ?></span>
		</span>
		<span class="right">
		<span class="section-edit"><a href="<?php echo uri('exhibits/editSection/'.$section->id); ?>"><img src="<?php echo img('icons/page_white_edit.png'); ?>" alt="Edit" /> Edit</a></span>
		<span class="section-delete"><a href="<?php echo uri('exhibits/deleteSection/'.$section->id); ?>"><img src="<?php echo img('icons/delete.png'); ?>" alt="Drag" /> Delete</a></span>
		</span>
	</li>
<?php endforeach; ?>