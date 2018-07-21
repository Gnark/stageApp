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

	<?php include '/../Menu/menu.ctp';?>
	
	<table>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
			<!--th>Créée le</th-->
			<th></th>
		</tr>
		<?php print_r($data);?>
		

		<?php foreach ($data as $client): ?>
			<tr>
				<td>
					
					<?php echo $this->Html->link($client['Client']['nom'],
					array('controller' => 'clients', 'action' => 'client', $client['Client']['id'])); ?>
					
				</td>
				<td>
					<?php echo $client['Client']['prenom'];
					?>
					
				</td>
				<td>
					<?php echo $client['Client']['email']; ?>
				</td>
				
				<td>

					<?php //afficher que si role = admin
					echo $this->Html->link('Modifer client',
						array('controller' => 'clients', 'action' => 'modif_client', $client['Client']['id']))
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php unset($client); ?>
			
		</table>
	</body>