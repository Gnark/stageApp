<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Listes des clients</title>

	<link href="" rel="stylesheet">
</head>
<body>
	<table>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
			<!--th>Créée le</th-->
			<th></th>
		</tr>
		<!--?php print_r($data);?-->
		

		<?php foreach ($data as $client): ?>
			<tr>
				<td>
					
					<?php echo $this->Html->link($client['clients']['nom'],
					array('controller' => 'clients', 'action' => 'client', $client['clients']['id'])); ?>
					
				</td>
				<td>
					<?php echo $client['clients']['prenom'];
					?>
					
				</td>
				<td>
					<?php echo $client['clients']['email']; ?>
				</td>
				
				<td>

					<?php //afficher que si role = admin
					echo $this->Html->link('Modifer client',
						array('controller' => 'clients', 'action' => 'modif_client', $client['clients']['id']))
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php unset($client); ?>
			
		</table>
	</body>