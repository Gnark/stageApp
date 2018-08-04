<table class="entier">
		<tr>
			<th colspan="5">Informations du Client</th>
		</tr>
		<tr>
			<td>
				Nom
			</td>
			<td colspan="4">
				<!--?php print_r($data_client);?-->
				<!--?php print_r($produits_client);?-->
				<!--?php print_r($fiches_client);?-->
				<?php echo $data_client['Client']['nom']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Prénom
			</td>
			<td colspan="4">
				<?php echo $data_client['Client']['prenom']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Adresse
			</td>
			<td colspan="4">
				<?php echo $data_client['Adresse']['numero']." ".$data_client['Adresse']['nom_rue'].", ".$data_client['Adresse']['Ville']['code_postal'] ?>
			</td>
		</tr>
		<tr>
			<td>
				E-mail
			</td>
			<td colspan="4">
				<?php echo $data_client['Client']['email'] ?>
			</td>
		</tr>
		<tr>
			<td>
				Numéro de portable
			</td>
			<td colspan="4">
				<?php echo $data_client['Client']['telephone_portable'] ?>
			</td>
		</tr>
		<tr>
			<td>
				Numéro de fixe
			</td>
			<td colspan="4">
				<?php echo $data_client['Client']['telephone_fixe'] ?>
			</td>
		</tr>
		<tr>
			<td>
				Nombre de tags :
			</td>
			<td>
				<?php echo $nb_tags ?>
			</td>
			<td colspan="3">
				<?php echo $this->Html->link('Voir les tags',
				array('controller' => 'tags', 'action' => 'all_tags_client', $data_client['Client']['id'])); ?>
			</td>
		</tr>

		<tr>
			<td rowspan="<?php echo count($data_client['Produit'])+1?>">
				Appareil(s) lui appartenant : 
			</td>
			<th>Type d'appareil</th>
			<th>Modèle</th>
			<th>Marque</th>
			<th>Fiche associée</th>
			<?php foreach ($data_client['Produit'] as $pr){ ?>
				<tr>
					<td>
						<?php echo $pr['Modele']['TypeProduit']['type']; ?>
					</td>
					<td>
						<?php echo $pr['Modele']['nom_modele']; ?>
					</td>
					<td>
						<?php echo $pr['Modele']['Marque']['nom_marque']; ?>
					</td>
					<td>
						<?php foreach($data_client['Fiche'] as $f)
							if ($pr['id']==$f['produit_id'])
								echo $this->Html->link($f['id'], array('controller' => 'fiches', 'action' => 'fiche', $f['id']));
							else
								echo 'Pas de fiche associée';
						?>
					</td>
				</tr>
			<?php }?>
		</tr>
		
		<!-- <tr>
			<td rowspan="<//?php echo count($data_client['Fiche'])+1?>">
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
			
			<//?php //foreach ($data_client['Fiche'] as $f){ ?>
				<tr>

					<td>
						<//?php echo $this->Html->link($f['id'],
						array('controller' => 'fiches', 'action' => 'fiche', $f['id'])); ?>
					</td>
					<td>
						<//?php echo $f['Modele']['nom_modele']; ?>
					</td>
					<td>
						<//?php echo $f['Fiche']['date_debut']; ?>
					</td>
				</tr>
			<//?php }?>
			
		</tr> -->

		<tr>
			<td rowspan="2">
				Carte
			</td>
		<?php if ($data_client['Carte']!=null){ ?>
			<td>
				Crédit restant
			</td>
			<td>
				Facturée ?
			</td>
		</tr>
		
		<tr>
			<td>
				<?php echo $data_client['Carte']['credit_restant']?>
			</td> 
			<td>
				<?php echo $data_client['Carte']['facturee']?'oui':'non' ?>
			</td>
			<td>
				<?php echo $this->Html->link('Voir la carte',
                    array('controller' => 'cartes', 'action' => 'carte_client', $data_client['Client']['id']));
                ?>
			</td>

		</tr>
	<?php } 
	else {?>
		<td>
			Ne possède pas de carte
		</td>
	<?php } ?>
	</table>

	<?php echo $this->Html->link('Retour',
	array('controller' => 'clients', 'action' => 'all_clients')); ?>



