<?php if ($contact_exist): ?>
	<div id="addressbook-single">
		<div class="addressbook-contact-photo">
			<?php if ($photo): ?>
				<img src="<?php echo $photo; ?>">
			<?php else: ?>
				<div class="addressbook-no-photo">
					<?php echo t('No photo'); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="addressbook-contact-info">
			<p><span><?php echo t('Category:'); ?></span> <?php echo $category; ?></p>
			<p><span><?php echo t('Email:'); ?></span> <?php echo $email; ?></p>
			<p><span><?php echo t('Phone:'); ?></span> <?php echo $phone; ?></p>
			<p><span><?php echo t('Birthday:'); ?></span> <?php echo $birthday; ?></p>
			<p><span><?php echo t('Some notes about this contact'); ?></span><br>
			   <?php echo $notes; ?>
			</p>
		</div>
	</div>
<?php endif; ?>