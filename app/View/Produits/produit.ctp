<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Produit</title>

	<link href="" rel="stylesheet">
</head>
<body>

	<?php include '/../Menu/menu.ctp';?>

	<table>
		<tr>
			<th colspan="4">Informations du Produit</th>
		</tr>
		<tr>
			<td>Type d'appareil</td>
			<td>
				<?php print_r($data);?>
				<?php echo $data['tp']['type']; ?>
			</td>
		</tr>
		<tr>
			<td>Modèle</td>
			<td>
				<?php echo $data['m']['nom_modele']; ?>
			</td>

		<tr>
			<td>Marque</td>
			<td>
				<?php echo $data['ma']['nom_marque']; ?>
			</td>

		</tr>

		<tr>
			<td>
			Photo
		</td>
			<td>
				<?php echo $data['pr']['lien_photo']; ?>
			</td>
		</tr>
		<tr>
			<td>
				OS
			</td>
			<td>
				<?php echo $data['pr']['os']; ?>
			</td>
		</tr>


		<tr><!-- n'afficher qu'à un admin-->
			<td>
				mdp
			</td>
			<td>
				<?php echo $data['pr']['mdp']; ?>
			</td>
		</tr>


		<tr>
			<td>
			Identifiant de télémaintenance
			</td>
			<td>
				<?php echo $data['pr']['identifiant_telemaintenance']; ?>
			</td>
		</tr>
	</table>		

	<?php echo $this->Html->link('Retour',
	array('controller' => 'produits', 'action' => 'all_produits')); ?>



</body>