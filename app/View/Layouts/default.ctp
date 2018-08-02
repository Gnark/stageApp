<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--link rel="icon" href="../../../../favicon.ico"-->

	<title><?php echo $title_for_layout; ?></title>

	<?php echo $this->Html->css('home') ;?>
	<?php echo $this->Html->css('bootstrap') ;?>
	<?php echo $this->fetch('css'); ?>


</head>

<body <?php //if(!$this->Session->check('Auth.User.id')) echo 'class="text-center"'; ?> >

	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">facilearetenir.com</a>
		<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
		<ul class="navbar-nav px-3">
		<?php if ($this->Session->read('Auth.User.id')) : ?>
			
				<li class="nav-item text-nowrap">
					<?php echo $this->Html->link('Se déconnecter', array('controller' => 'users', 'action' => 'logout'));?>
				</li>
			
			<!--?php else : ?-->
				<!--li class="nav-item text-nowrap"-->
					<!--?php echo $this->Html->link('Se connecter', array('controller' => 'users', 'action' => 'login'));?-->
				<!--/li-->
			<?php endif ?>
			</ul>
		</nav>
		<!--?php debug($this->Session->read('Auth.User')); ?-->
		<div class="container-fluid">
			<div class="row">
				<!--?php if($this->Session->check('Auth.User')) : ?-->
				<nav class="col-md-2 d-none d-md-block bg-light sidebar">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">

							<?php if(isset($user) && $user['role']=='user') : ?>
								<li class="nav-item">
								<span data-feather="user"></span>
								<span class="sr-only">(current)</span>
								<?php echo $this->Html->link('Voir mes infos client',
								array('controller' => 'clients', 'action' => 'client', $user['id'])); ?>  
							</li>
							<?php endif; ?>
							<li class="nav-item">
								<span data-feather="home"></span>
								<span class="sr-only">(current)</span>
								<?php echo $this->Html->link('Page d\'accueil',
								array('controller' => 'users', 'action' => 'home')); ?>  
							</li>
							<li class="nav-item">
								<span data-feather="tag"></span>
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
				<!--?php endif; ?-->

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">				
					<div class="row">
						<?php echo $this->fetch('content'); ?>							
					</div>
				</main>
			</div>
		</div>


		<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
		<script>
			feather.replace()
		</script>
		<?php echo $this->Html->script('bootstrap') ;?>
		<?php echo $this->fetch('script') ;?>
	</body>
	</html>
