<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title>Listes des problemes</title>

	<link href="all_probleme.css" rel="stylesheet">
</head>
<body>
	<table>
		<tr>
			<th>Id probleme</th>
			<th>Description problème</th>
		</tr>
		<!--?php print_r($data);?-->
		

		<?php foreach ($data as $probleme): ?>
			<tr>
				<td>
					
					<?php echo $this->Html->link($probleme['problemes']['id'],
					array('controller' => 'problemes', 'action' => 'probleme', $probleme['problemes']['id'])); ?>
					
				</td>
				<td>
					<?php echo $probleme['problemes']['description_probleme'] ?>
				</td>
				
					<td>
					<?php //afficher que si role = admin
					echo $this->Html->link('Modifier probleme',
						array('controller' => 'problemes', 'action' => 'modif_probleme', $probleme['problemes']['id']))
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php unset($probleme); ?>
			
		</table>
	</body>