<div class = "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

	<h1>Vos informations client</h1>

</div>

<div class = "w-100">
	<?php if(!isset($infos) || $infos==null) : ?>
		<div>Nous n'avons pas vos informations.</div>
		<div>Cliquez <?php echo $this->Html->link('ici', array('controller' => 'clients', 'action' => 'rentrer_infos')); ?>  pour les renseigner</div>
	<?php else : ?>
		<table>
		<?php echo $this->Html->tableCells(array(
			array('Nom', $infos['nom']),
			array('Prénom', $infos['prenom']),
			array('E-mail', $infos['email']),
			array('Téléphone fixe', $infos['telephone_fixe']),
			array('Téléphone portable', $infos['telephone_portable']),
		)); ?>
		</table>
	<?php endif ?>
</div>