<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Listes des réparations </title>

	<link href="" rel="stylesheet">
</head>
<body>
	<table>
		<tr>
			<th colspan="3">Tags de <?php echo $client['nom']." ".$client['prenom']  ?></th>
		</tr>
		<tr>
			<th>Id Tag</th>
			<!--th>Client</th-->
			<th>Id Produit</th>
			<th>Id matériel externe</th>
		</tr>
		<!--?php print_r($data);?-->
		<!--?php print_r($client);?-->
		

		<?php foreach ($data as $tag){ ?>
				<tr>
					<td>
						<?php echo $this->Html->link($tag['t']['id'],
                    array('controller' => 'produits', 'action' => 'produit', $tag['pr']['id'])); ?>
					</td>
					<!--td>
						<?php //echo $tag['cl']['nom']." ".$tag['cl']['prenom']; ?>
					</td-->
					<td>
						<?php echo $tag['pr']['id']; ?>
					</td>
					<td>
						<?php echo $tag['me']['id']; ?>
					</td>
				</tr>
			<?php }?>
			<?php unset($tag); ?>
			<!--td colspan="4">
				<?php //afficher que si role = admin
			//echo $this->Html->link('Ajouter fiche', array('controller' => 'fiches', 'action' => 'modif_fiche'))
			?>
			</td-->
			
		</table>
	</body>