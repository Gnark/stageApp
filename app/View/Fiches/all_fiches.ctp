<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Listes des fiches</title>

	<link href="all_fiche.css" rel="stylesheet">
</head>
<body>
	
	<table>
		<tr>
			<th>Id Fiche</th>
			<th>Client</th>
			<th>Produit</th>
			<th>Créée le</th>
			<th></th>
		</tr>
		<!--?php print_r($fiches);?-->
		

		<?php foreach ($data as $fiche): ?>
			<tr>
				<td>
					
					<?php echo $this->Html->link($fiche['f']['id'],
					array('controller' => 'fiches', 'action' => 'fiche', $fiche['f']['id'])); ?>
					
				</td>
				<td>
					<?php echo $fiche['cl']['nom']." ".$fiche['cl']['prenom'];
					?>
					<!--?php /*
					//print_r($data);
					foreach ($data as $cli):
						if($cli['clients']['id']==$fiche['Fiche']['client_id']){
							echo $cli['clients']['nom']." ".$cli['clients']['prenom'];
							break;
						}
					endforeach;*/

					?-->
				</td>
				<td>
					<?php echo $fiche['m']['nom_modele']; ?>
				</td>
				<td><?php echo $fiche['f']['date_debut']; ?></td>
				<td>

					<?php //afficher que si role = admin
					echo $this->Html->link('Modifer fiche',
						array('controller' => 'fiches', 'action' => 'modif_fiche', $fiche['f']['id']))
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php unset($fiche); ?>
			<td colspan="5">
				<?php //afficher que si role = admin
			echo $this->Html->link('Ajouter fiche', array('controller' => 'fiches', 'action' => 'ajouter_fiche'))
			?>
			</td>
		</table>
	</body>