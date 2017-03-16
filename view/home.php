<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Contacts de la session #0</div>
	<div class="panel-body">
		Liste des contacts de la session de formation Webforce3 #0
	</div>

	<?php if (sizeof($contactsList) > 0) : ?>
	<!-- Table -->
	<table class="table">
		<thead>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($contactsList as $currentContact) : ?>
			<tr>
				<td><?= $currentContact['lname'] ?></td>
				<td><?= $currentContact['fname'] ?></td>
				<td><?= $currentContact['email'] ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>
</div>
