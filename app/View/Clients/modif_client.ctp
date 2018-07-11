<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Client</title>

	<link href="" rel="stylesheet">
</head>
<body>

	<form>
		<table class="entier">
			<tr>
				<th colspan="4">Informations du Client</th>
			</tr>
			<tr>
				<td>
					Nom
				</td>
				<td colspan="3">
					<!--?php print_r($data_client);?-->
					<!--?php print_r($produits_client);?-->
					<!--?php print_r($fiches_client);?-->
					<input class="inputText" class="entier" type="text" id="nom" name="nom" value="<?php echo $data_client['cl']['nom']; ?>" placeholder='Nom' />
					
				</td>
			</tr>
			<tr>
				<td>
					Prénom
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="prenom" name="prenom" value="<?php echo $data_client['cl']['prenom']; ?>" placeholder='Prénom' />
					
				</td>
			</tr>
			<tr>
				<td>
					Adresse
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="adresse" name="adresse" value="<?php echo $data_client['adr']['rue']['numero']?>" placeholder='Numéro de rue' />
					<input class="inputText" class="entier" type="text" id="adresse" name="adresse" value="<?php echo $data_client['adr']['rue']['nom_rue']?>" placeholder='Nom de rue' />
					<input class="inputText" class="entier" type="text" id="adresse" name="adresse" value="<?php echo $data_client['adr']['ville']['code_postal']?>" placeholder='Code postal' />
				</td>
			</tr>
			<tr>
				<td>
					E-mail
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="email" name="email" value="<?php echo $data_client['cl']['email'] ?>" placeholder='Email' />					
				</td>
			</tr>
			<tr>
				<td>
					Numéro de portable
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="telephone_portable" name="telephone_portable" value="<?php echo $data_client['cl']['telephone_portable'] ?>" placeholder='Téléphone Portable' />
					
				</td>
			</tr>
			<tr>
				<td>
					Numéro de fixe
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="telephone_fixe" name="telephone_fixe" value="<?php echo $data_client['cl']['telephone_fixe'] ?>" placeholder='Téléphone Fixe' />
				</td>
			</tr>
			<tr>
				<td>
					Nombre de tags :
				</td>
				<td>
					<?php echo $nb_tags ?>
				</td>
				<td colspan="2">
					<?php echo $this->Html->link('Voir les tags',
					array('controller' => 'tags', 'action' => 'all_tags_client', $data_client['cl']['id'])); ?>
				</td>
			</tr>

			<tr>
				<td rowspan="<?php echo count($produits_client)+1?>">
					Appareil(s) lui appartenant : 
				</td>
				<th>Type d'appareil</th>
				<th>Modèle</th>
				<th>Marque</th>
				<?php foreach ($produits_client as $pr){ ?>
					<tr>
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
			</tr>

			<tr>
				<td rowspan="<?php echo count($fiches_client)+1?>">
					Fiche(s) le concernant : 
				</td>
				<th>
					Id fiche
				</th>
				<th>
					Type de produit
				</th>
				<th>
					Créée le
				</th>

				<?php foreach ($fiches_client as $pr){ ?>
					<tr>

						<td>
							<?php echo $this->Html->link($pr['f']['id'],
							array('controller' => 'fiches', 'action' => 'fiche', $pr['f']['id'])); ?>
						</td>
						<td>
							<?php echo $pr['m']['nom_modele']; ?>
						</td>
						<td>
							<?php echo $pr['f']['date_debut']; ?>
						</td>
					</tr>
				<?php }?>

			</tr>

			<tr>
				<td rowspan="2">
					Carte
				</td>
				<?php if ($data_client['carte']!=null){ ?>
					<td>
						Crédit restant
					</td>
					<td>
						Facturée ?
					</td>
				</tr>

				<tr>
					<td>
						<?php echo $data_client['carte']['credit_restant']?>
					</td> 
					<td>
						<?php echo $data_client['carte']['facturee']?'oui':'non' ?>
					</td>

				</tr>
			<?php } 
			else {?>
				<td>
					Ne possède pas de carte
				</td>
			<?php } ?>
		</table>
	</form>

	<?php echo $this->Html->link('Retour',
	array('controller' => 'clients', 'action' => 'all_clients')); ?>



</body>