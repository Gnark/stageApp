	<form>
		<table class="entier">
			<tr>
				<th colspan="4">Fiche de prise en charge matériel</th>
			</tr>
			<tr>
				<td>
					Nom
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="nom" name="nom" value="<?php echo $data['cl']['nom'] ?>" placeholder='Nom' />
				</td>
			</tr>
			<tr>
				<td>
					Prénom
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="prenom" name="prenom" value="<?php echo $data['cl']['prenom'] ?>" placeholder='Prénom' />
				</td>
			</tr>
			<tr>
				<td>
					Adresse
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="adresse" name="adresse" value="<?php echo $data['adr']['numero']?>" placeholder='Numéro de rue' />
					<input class="inputText" class="entier" type="text" id="adresse" name="adresse" value="<?php echo $data['adr']['nom_rue']?>" placeholder='Nom de rue' />
					<input class="inputText" class="entier" type="text" id="adresse" name="adresse" value="<?php echo $data['v']['code_postal']?>" placeholder='Code postal' />
				</td>
			</tr>
			<tr>
				<td>
					E-mail
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="email" name="email" value="<?php echo $data['cl']['email'] ?>" placeholder='Email' />
				</td>
			</tr>
			<tr>
				<td>
					Type de matériel
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="type" name="type" value="<?php echo $data['tp']['type'] ?>" placeholder='Type de matériel' />
				</td>
				<td>
					OS
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="os" name="os" value="à venir" placeholder='Système d exploitation' />
				</td>
			</tr>
			<tr>
				<td>
					Tag
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="tag" name="tag" value="à venir" placeholder='Tag' />
				</td>
			</tr>
			<tr>
				<td>
					Mot de passe
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="mdp" name="mdp" value="<?php echo $data['pr']['mdp'] ?>" placeholder='Mot de passe' />
				</td>
			</tr>


			<!--------------------------------------------------------------------------que si type = telephone-------------------------------------------------------------------------->
			<?php if ($data['tp']['type']=='telephone'){ ?>
			<tr>
				<td>
					N° Portable
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="num" name="num" value="42" placeholder='Numéro de téléphone' />
				</td>
				<td>
					ID
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="id" name="id" value="666" placeholder='ID' />
				</td>
			</tr>
			<tr>
				<td>
					Code PIN
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="pin" name="pin" value="0000" placeholder='Code PIN' />
				</td>
				<td rowspan="2">
					Code de dévérouillage
				</td>
				<td rowspan="2">
					<input class="inputText" class="entier" type="text" id="pin" name="pin" value="1234" placeholder='Code' />
				</td>
			</tr>
			<?php };?>
			<!--------------------------------------------------------------------------fin "que si type = telephone"-------------------------------------------------------------------------->


			<tr>
				<td colspan="2">
					Symptômes
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<textarea class="entier">
						
					</textarea>
					<!--input class="inputText" class="entier" type="text" id="pin" name="pin" value="mrglglglg" /-->
				</td> 
			</tr>
		</table>
		<div class="horizontal">
			<fieldset>
				<legend>Observations :</legend>
				<div>
					<input id="sacoche" type="checkbox" value="sacoche">
					<label for="sacoche">Sacoche</label>
				</div>
				<div>
					<input id="alimentation" type="checkbox" value="alimentation">
					<label for="alimentation">Alimentation</label>
				</div>
				<div>
					<input id="usb" type="checkbox" value="usb">
					<label for="usb">Clé USB</label>
				</div>
				<div>
					<input id="souris" type="checkbox" value="souris">
					<label for="souris">Souris</label>
				</div>
				<div>
					<input id="dongle" type="checkbox" value="dongle">
					<label for="dongle">Dongle</label>
				</div>
				<div>
					<input id="autre" type="checkbox" value="autre">
					<label for="autre">Autre</label>
				</div>
			</fieldset>
			<fieldset>
				<legend>Donnée :</legend>
				<div>
					<input id="aucune" type="checkbox" value="aucune">
					<label for="aucune">Aucune</label>
				</div>
				<div>
					<input id="importante" type="checkbox" value="importante">
					<label for="importante">Importante</label>
				</div>
			</fieldset>
			<fieldset id="dechetterie">
				<legend>Déchetterie</legend>
				<div>
					<label>Date :</label>
					<input class="inputText" class="entier" type="text" id="num" name="num" value="09/11/01" placeholder='' />
				</div>
				<div>
					<label>Signature :</label>
					<input type="image" id="signature" />
				</div>
			</fieldset>
		</div>
		<div class="horizontal">
			<input  type="image" id="image1" />
			<input  type="image" id="image2" />
			<input  type="image" id="image3" />
		</div>
		<table class="entier">
			<tr>
				<td>
					Prise charge le :
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="debut" name="debut" value="09/11/01" placeholder='' />
				</td>
				<td>
					Par :
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="qui" name="qui" value="Billy" placeholder='' />
				</td>
			</tr>
			<tr>
				<td>
					Fini le :
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="fin" name="fin" value="12/07/18" placeholder='' />
				</td>
				<td>
					Par :
				</td>
				<td>
					<input class="inputText" class="entier" type="text" id="qui" name="qui" value="Billy" placeholder='' />
				</td>
			</tr>
			<tr>
				<td>
					Numero de Facture :
				</td>
				<td colspan="3">
					<input class="inputText" class="entier" type="text" id="facture" name="facture" value="à venir" placeholder='' />
				</td>
			</tr>
		</table>
		<input type="submit" name="Valider" name="valider">
	</form>

	<?php echo $this->Html->link('Retour',
	array('controller' => 'fiches', 'action' => 'all_fiches')); ?>

	<?php echo $this->Html->link('Réinitialiser', 
	array('controller' => 'fiches', 'action' => 'modif_fiche', $data['f']['id']))?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <?php echo $this->Form->create('Client', array('class' => 'form-signin')); ?>
  <h1 class="h3 mb-3 font-weight-normal">Inscrivez-vous</h1>
  <?php echo $this->Form->input('nom', array('label' => 'Nom', array('class' => 'form-control'), 'placeholder' => 'Nom', 'autofocus')); ?>
  <?php echo $this->Form->input('prenom', array('label' => 'Prénom', array('class' => 'form-control'), 'placeholder' => 'Prénom')); ?>
  <?php echo $this->Form->input('email', array('label' => 'E-mail', array('class' => 'form-control'), 'placeholder' => 'E-mail')); ?>
  <?php echo $this->Form->input('telephone_fixe', array('label' => 'Fixe', array('class' => 'form-control'), 'placeholder' => 'Téléphone fixe')); ?>
  <?php echo $this->Form->input('telephone_portable', array('label' => 'Portable', array('class' => 'form-control'), 'placeholder' => 'Téléphone Portable')); ?>
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->Form->end(array('label' => 'Enregitrer', 'class' => 'btn btn-lg btn-primary btn-block')); ?>

</div>


