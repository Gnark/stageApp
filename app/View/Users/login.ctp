
<?php $this->Html->css('login', null, array('inline' => false)); ?>



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <!--form class="form-signin">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
    <label for="inputEmail" class="sr-only">Identifiant</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Identifiant" required>
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
    <label>
      Pas de compte ?
    </label>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
  </form-->

  <?php echo $this->Form->create('User', array('class' => 'form-signin')); ?>
  <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
  <?php echo $this->Form->input('username', array('label' => 'Identifiant', array('class' => 'form-control'), 'label' => array('class' => 'sr-only'), 'placeholder' => 'Identifiant', 'autofocus')); ?>
  <?php echo $this->Form->input('password', array('label' => 'Mot de passe', array('class' => 'form-control'), 'label' => array('class' => 'sr-only'), 'placeholder' => 'Mot de passe')); ?>
  <?php echo $this->Html->link('Pas de compte ?', array('controller' => 'users', 'action' => 'inscription')); ?>
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->Form->end(array('label' => 'Connexion', 'class' => 'btn btn-lg btn-primary btn-block')); ?>

</div>
