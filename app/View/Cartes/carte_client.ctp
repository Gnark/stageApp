<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Carte</title>

	<link href="" rel="stylesheet">
</head>
<body>

	<?php include '/../Menu/menu.ctp';?>

	<table class="entier">
		<tr>
			<th colspan="4">Carte de <?php echo $carte['Client']['nom']." ".$carte['Client']['prenom'] ?></th>
		</tr>
		<tr>
			<td rowspan="2">Propriétaire</td>
			<td>
				Nom
			</td>
			<td colspan="2">
				<?php print_r($carte);?>
				<!--?php print_r($i);?-->
				<?php echo $carte['Client']['nom']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Prénom
			</td>
			<td colspan="2">
				<?php echo $carte['Client']['prenom']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Numéro
			</td>
			<td colspan="3">
				<?php echo $carte['Carte']['id']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Date d'achat
			</td>
			<td colspan="3">
				<?php echo $carte['Carte']['date_achat']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td colspan="3">
				<?php echo $carte['Client']['email']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Tel portable
			</td>
			<td colspan="3">
				<?php echo $carte['Client']['telephone_portable']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Crédit acheté
			</td>
			<td colspan="3">
				<?php echo $carte['Carte']['credit']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Crédit restant
			</td>
			<td colspan="3">
				<?php echo $carte['Carte']['credit_restant']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Facturée ?
			</td>
			<td colspan="3">
				<?php 
				if ($carte['Carte']['facturee']==0)
					echo 'Non';
				else
					echo 'Oui';
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="<?php echo count($carte['Intervention'])+1?>">
				Intervention(s)
			</td>
		<?php if (count($carte['Intervention'])>0){ ?>
			<th>
				Date
			</th>
			<th>
				Crédit utilisé
			</th>
		</tr>
		<?php foreach ($carte['Intervention'] as $inter){ ?>
		<tr>
			<td>
				<?php echo $inter['date']; ?>
			</td>
			<td>
				<?php echo $inter['credit_utilise']; ?>
			</td>
		</tr>
		<?php unset($inter);}}
		else { ?>
			<td colspan="3">
				Pas encore d'intervention
			</td>
		<?php } ?>





		
	</table>

	<!-- Inserer bouton pour demarrer et finir une intervention 
		Quand on appuie dessus, enregistre l'heure et la réenregistre quand on reclique dessus. Faire la difference entre les deux pour avoir le temps de l'intervention
	-->


</body>