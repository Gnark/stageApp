<?php $this->Html->css('inscription', null, array('inline' => false)); ?>

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