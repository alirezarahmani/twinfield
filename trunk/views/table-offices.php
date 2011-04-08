<?php if($offices): ?>

<table>
	<thead>
		<tr>
			<th scope="col">Code</th>
			<th scope="col">Name</th>
			<th scope="col">Shortname</th>
		</tr>
	</thead>

	<tbody>

		<?php foreach($offices as $office): ?>

		<tr>
			<td><?php echo $office->getCode(); ?></td>
			<td><?php echo $office->getName(); ?></td>
			<td><?php echo $office->getShortName(); ?></td>
		</tr>

		<?php endforeach; ?>

	</tbody>
</table>

<?php endif; ?>