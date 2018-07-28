<!doctype html>
<html lang="en">
<head>
    <?php echo $this->Html->css('home') ;?>
  <?php echo $this->Html->css('bootstrap') ;?>
  <?php echo $this->fetch('css'); ?>

</head>

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <span data-feather="home"></span>
        <!--<span class="sr-only">(current)</span>-->
        <?php echo $this->Html->link('Tags',
        array('controller' => 'tags', 'action' => 'all_tags')); ?>  
      </li>
      <li class="nav-item">
        <span data-feather="camera"></span>
        <?php echo $this->Html->link('Produits',
        array('controller' => 'produits', 'action' => 'all_produits')); ?>  
      </li>
      <li class="nav-item">
        <span data-feather="shopping-cart"></span>
        <?php echo $this->Html->link('Clients',
        array('controller' => 'clients', 'action' => 'all_clients')); ?>                    
      </li>
      <li class="nav-item">  
        <span data-feather="book-open"></span>
        <?php echo $this->Html->link('Fiches de prise en charge',
        array('controller' => 'fiches', 'action' => 'all_fiches')); ?>
      </li>
      <li class="nav-item">
        <span data-feather="bar-chart-2"></span>
        Interventions
      </li>
      <li class="nav-item">
        <span data-feather="alert-circle"></span>
        <?php echo $this->Html->link('Problèmes connus',
        array('controller' => 'problemes', 'action' => 'all_problemes')); ?> 
      </li>
      <li class="nav-item">
        <span data-feather="clipboard"></span>
        <!--<span class="sr-only">(current)</span>-->
        <?php echo $this->Html->link('Reparations',
        array('controller' => 'reparations', 'action' => 'all_reparations')); ?>  
      </li>
    </ul>
  </div>
</nav>



<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

