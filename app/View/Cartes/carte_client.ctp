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


	<table class="entier">
		<tr>
			<th colspan="4">Carte de <?php echo $carte['cl']['nom']." ".$carte['cl']['prenom'] ?></th>
		</tr>
		<tr>
			<td rowspan="2">Propriétaire</td>
			<td>
				Nom
			</td>
			<td colspan="2">
				<?php print_r($carte);?>
				<?php print_r($i);?>
				<?php echo $carte['cl']['nom']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Prénom
			</td>
			<td colspan="2">
				<?php echo $carte['cl']['prenom']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Numéro
			</td>
			<td colspan="3">
				<?php echo $carte['ca']['id']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Date d'achat
			</td>
			<td colspan="3">
				<?php echo $carte['ca']['date_achat']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td colspan="3">
				<?php echo $carte['cl']['email']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Tel portable
			</td>
			<td colspan="3">
				<?php echo $carte['cl']['telephone_portable']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Crédit acheté
			</td>
			<td colspan="3">
				<?php echo $carte['ca']['credit']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Crédit restant
			</td>
			<td colspan="3">
				<?php echo $carte['ca']['credit_restant']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Facturée ?
			</td>
			<td colspan="3">
				<?php 
				if ($carte['ca']['facturee']==0)
					echo 'Non';
				else
					echo 'Oui';
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="<?php echo count($i)+1?>">
				Intervention(s)
			</td>
		<?php if (count($i)>0){ ?>
			<th>
				Date
			</th>
			<th>
				Crédit utilisé
			</th>
		</tr>
		<?php foreach ($i as $inter){ ?>
		<tr>
			<td>
				<?php echo $inter['i']['date']; ?>
			</td>
			<td>
				<?php echo $inter['i']['credit_utilise']; ?>
			</td>
		</tr>
		<?php unset($i);}}
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