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

	<table class="entier">
		<tr>
			<th colspan="2">Informations du problème</th>
		</tr>
		<tr>
			<td>
				Problème
			</td>
			<td>
				<!--?php print_r($data);?-->
				<!--?php print_r($produits_client);?-->
				<!--?php print_r($fiches_client);?-->
				<?php echo $data[0]['pr']['description_probleme']; ?>
			</td>
		</tr>
		<tr>
			<td rowspan="<?php echo count($data)+1?>">
				Solution(s)
			</td>
		</tr>
		
				<?php 
				if (!isset($data[0]['s']))
					echo '<tr><td>Pas de solution connues</td></tr>';
				else {
					foreach ($data as $sol){
						echo '<tr><td><p>';
						echo $sol['s']['description_solution'];
						echo '</p></td></tr>'; 
					}
				}?>
			
		
		
	</table>

	<?php echo $this->Html->link('Retour',
	array('controller' => 'problemes', 'action' => 'all_problemes')); ?>



</body>