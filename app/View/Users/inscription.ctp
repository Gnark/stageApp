
<?php $this->Html->css('inscription', null, array('inline' => false)); ?>


<!--form class="form-signin">
  <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inscrivez-vous</h1>
  <label for="inputNom" class="sr-only">Nom</label>
  <input type="text" id="inputNom" class="form-control" placeholder="Nom" required autofocus>
  <label for="inputPrenom" class="sr-only">Prénom</label>
  <input type="text" id="inputPrenom" class="form-control" placeholder="Prenom" required>
  <label for="inputEmail" class="sr-only">Adresse E-mail</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Adresse E-mail" required>
  <label for="inputFixe" class="sr-only">Numéro de fixe</label>
  <input type="tel" id="inputFixe" class="form-control" placeholder="Fixe" required>
  <label for="inputPortable" class="sr-only">Numéro de portable</label>
  <input type="tel" id="inputPortable" class="form-control" placeholder="Portable" required>
  <label for="inputAdresse" class="sr-only">Adresse</label>
  <input type="text" id="inputAdresse" class="form-control" placeholder="Adresse" required>
  <label for="inputVille" class="sr-only">Ville</label>
  <input type="text" id="inputVille" class="form-control" placeholder="Ville" required>
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>


  <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
</form-->

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  <?php echo $this->Form->create('User', array('class' => 'form-signin')); ?>
  <h1 class="h3 mb-3 font-weight-normal">Inscrivez-vous</h1>
  <?php echo $this->Form->input('username', array('label' => false, array('class' => 'form-control'), 'placeholder' => 'Identifiant', 'autofocus')); ?>
  <?php echo $this->Form->input('password', array('label' => false, array('class' => 'form-control'), 'placeholder' => 'Mot de passe')); ?>
  <!--?php echo $this->Form->input('password_ confirm', array('label' => false, 'type' => 'password', array('class' => 'form-control'), 'placeholder' => 'Mot de passe')); ?-->
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->Form->end(array('label' => 'S\'incrire', 'class' => 'btn btn-lg btn-primary btn-block')); ?>

</div>
