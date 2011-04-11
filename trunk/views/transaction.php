<?php if($transaction): ?>

<dl>
	<dt>Header</dt>
	<dd>
		<?php $header = $transaction->getHeader(); ?>

		<dl>
			<dt>Number</dt>
			<dd><?php echo $header->getNumber(); ?></dd>
		</dl>
	</dd>
</dl>

<?php endif; ?>