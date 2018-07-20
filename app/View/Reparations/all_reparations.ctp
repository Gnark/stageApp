<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Listes des réparations</title>

	<?php echo $this->Html->css('all_reparations') ;?>
	
</head>
<body>

	<?php include '/../Menu/menu.ctp';?>
	
	<table>
		<tr>
			<th colspan="5">Réparations par date</th>
		</tr>
		<tr>
			<th>Id Réparation</th>
			<th>Client</th>
			<th>Modèle</th>
			<th>Date d'échéance</th>
			<th>Finie ?</th>
		</tr>
		<!--?php print_r($rep);?-->

		<?php foreach ($rep as $r){ ?>
				<tr>
					<td>
						<?php echo $this->Html->link($r['Reparation']['id'],
                    array('controller' => 'reparations', 'action' => 'reparation', $r['Reparation']['id'])); ?>
					</td>
					<td>
						<?php echo $r['Produit']['Client']['nom']." ".$r['Produit']['Client']['prenom']; ?>
					</td>
					<td>
						<?php echo $r['Produit']['Modele']['nom_modele']; ?>
					</td>
					<td>
						<?php echo $r['Reparation']['date_echeance']; ?>
					</td>
					<td>
						
						<div class="<?php echo $r['Reparation']['finie']?'cercle_vert':'cercle_rouge'?>"></div>
					</td>
				</tr>
			<?php }?>
			<?php unset($r); ?>
			
		</table>
	</body>