<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Listes des produits</title>

	<link href="all_fiche.css" rel="stylesheet">
</head>
<body>
	<table>
		<tr>
			<th>Id produit</th>
			<th>Type d'appareil</th>
			<th>Modèle</th>
			<th>Marque</th>
		</tr>
		<!--?php print_r($data);?-->
		

		<?php foreach ($data as $pr){ ?>
				<tr>
					<td>
						<?php echo $this->Html->link($pr['pr']['id'],
                    array('controller' => 'produits', 'action' => 'produit', $pr['pr']['id'])); ?>
					</td>
					<td>
						<?php echo $pr['tp']['type']; ?>
					</td>
					<td>
						<?php echo $pr['m']['nom_modele']; ?>
					</td>
					<td>
						<?php echo $pr['ma']['nom_marque']; ?>
					</td>
				</tr>
			<?php }?>
			<?php unset($pr); ?>
			<!--td colspan="4">
				<?php /*//afficher que si role = admin
			echo $this->Html->link('Ajouter fiche', array('controller' => 'fiches', 'action' => 'modif_fiche'))
			*/?>
			</td-->
			
		</table>
	</body>