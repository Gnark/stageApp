<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <?php echo $this->Form->create('Fiche', array('class' => 'form-signin')); ?>
  <h1 class="h3 mb-3 font-weight-normal">Informations fiche</h1>
  <!--?php echo $this->Form->input('nom', array('label' => 'Nom', array('class' => 'form-control'), 'placeholder' => 'Nom', 'autofocus')); ?-->
  <!--?php echo $this->Form->input('prenom', array('label' => 'Prénom', array('class' => 'form-control'), 'placeholder' => 'Prénom')); ?-->
  <!--?php echo $this->Form->input('email', array('label' => 'E-mail', array('class' => 'form-control'), 'placeholder' => 'E-mail')); ?-->
  <?php echo $this->Form->input('clients', array('label' => 'Client', array('class' => 'form-control'))); ?>
  <!--?php echo $this->Form->input('type_produits', array('label' => 'Type de produit', array('class' => 'form-control'), 'placeholder' => 'Type de produit')); ?-->
  <?php echo $this->Form->input('types', array('label' => 'Type de produit', array('class' => 'form-control'))); ?>
  <?php echo $this->Form->input('os', array('label' => 'Système d\'exploitaion', array('class' => 'form-control'))); ?>
  <!--?php echo $this->Form->input('tag', array('label' => 'Numéro de tag', array('class' => 'form-control'), 'placeholder' => 'Numéro')); ?-->
  <?php echo $this->Form->input('mdp', array('label' => 'Mot de passe de l\'appareil', array('class' => 'form-control'), 'placeholder' => 'Mot de passe')); ?>
  <?php echo $this->Form->input('probleme', array('label' => 'Description du problème', array('class' => 'form-control'), 'type' => 'textarea')); ?>
  <?php echo $this->Form->input('materiel_externes', array('label' => 'Matériel externe :', array('class' => 'form-control'), 'multiple' => 'checkbox')); ?>
  <div>Données :</div>
  <?php echo $this->Form->input('donnees_importante', array('label' => 'Importantes', array('class' => 'form-control'), 'type' => 'checkbox')); ?>
  <?php echo $this->Form->input('date_debut', array('label' => 'Pris en charge le :', array('class' => 'form-control'), 'placeholder' => '')); ?>
  <?php echo $this->Form->input('admins', array('label' => 'Par :', array('class' => 'form-control'))); ?>
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->Form->end(array('label' => 'Enregitrer', 'class' => 'btn btn-lg btn-primary btn-block')); ?>

</div>