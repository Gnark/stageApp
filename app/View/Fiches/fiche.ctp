<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Prise en charge</title>
		<!--
		<!-Bootstrap core CSS ->
		<link href="C:\wamp64\www\cakephp\app\Plugin\Bootstrap4\css\bootstrap.min.css" rel="stylesheet">

		<!- Custom styles for this template ->
		<link href="C:\wamp64\www\cakephp\app\View\Pages\home.css" rel="stylesheet">
	-->
	<link href="fiche.css" rel="stylesheet">
</head>
<body>

	<?php include '/../Menu/menu.ctp';?>
	
	<table class="entier">
		<tr>
			<th colspan="4">Fiche de prise en charge matériel</th>
		</tr>
		<tr>
			<td>
				Nom
			</td>
			<td colspan="3">
				<!--?php print_r($data);?-->
				<?php echo $data['cl']['nom'] ?>
			</td>
		</tr>
		<tr>
			<td>
				Prénom
			</td>
			<td colspan="3">
				<?php echo $data['cl']['prenom'] ?>
			</td>
		</tr>
		<tr>
			<td>
				Adresse
			</td>
			<td colspan="3">
				<?php echo $data['adr']['numero']." ".$data['adr']['nom_rue'].", ".$data['v']['code_postal'] ?>
			</td>
		</tr>
		<tr>
			<td>
				E-mail
			</td>
			<td colspan="3">
				<?php echo $data['cl']['email'] ?>
			</td>
		</tr>
		<tr>
			<td>
				Type de matériel
			</td>
			<td>
				<?php echo $data['tp']['type'] ?>
			</td>
			<td>
				OS
			</td>
			<td>
				à venir
			</td>
		</tr>
		<tr>
			<td>
				Tag
			</td>
			<td colspan="3">
				à venir
			</td>
		</tr>
		<tr>
			<td>
				Mot de passe
			</td>
			<td colspan="3">
				<?php echo $data['pr']['mdp'] ?>
			</td>
		</tr>


		<!--------------------------------------------------------------------------que si type = telephone-------------------------------------------------------------------------->
		<?php if ($data['tp']['type']=='telephone'){ ?>
		<tr>
			<td>
				N° Portable
			</td>
			<td>
				à venir
			</td>
			<td>
				ID
			</td>
			<td>
				à venir
			</td>
		</tr>
		<tr>
			<td>
				Code PIN
			</td>
			<td>
				à venir
			</td>
			<td rowspan="2">
				Mot de passe de dévérouillage
			</td>
			<td rowspan="2">
				à venir
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
			<p>
				à venir
			</p>
			<!--input class="inputText" class="entier" type="text" id="pin" name="pin" value="mrglglglg" /-->
		</td> 
	</tr>
</table>
<div class="horizontal">
	<!--------------------------------------------------------------doit changer layout-------------------------------------------------------------->
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
			<input class="inputText" class="entier" type="text" id="num" name="num" value="09/11/01" />
		</div>
		<div>
			<label>Signature :</label>
			<input type="image" id="signature" />
		</div>
	</fieldset>
	<!--------------------------------------------------------------fin changer layout-------------------------------------------------------------->
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
			<?php echo $data['f']['date_debut'] ?>
		</td>
		<td>
			Par :
		</td>
		<td>
			<?php echo $data['adm']['nom']." ".$data['adm']['prenom']?>
		</td>
	</tr>
	<tr>
		<td>
			Fini le :
		</td>
		<td>
			<?php echo $data['f']['date_fin'] ?>
		</td>
		<td>
			Par :
		</td>
		<td>
			<?php echo $data['adm']['nom']." ".$data['adm']['prenom'] ?>
		</td>
	</tr>
	<tr>
		<td>
			Numero de Facture :
		</td>
		<td colspan="3">
			à venir
		</td>
	</tr>
</table>

<?php echo $this->Html->link('Retour',
array('controller' => 'fiches', 'action' => 'all_fiches')); ?>

</body>
