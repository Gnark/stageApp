<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Connexion</title>

    <!-- Bootstrap core CSS -->
    <!--link href="../../dist/css/bootstrap.min.css" rel="stylesheet"-->
    <link href="../../Plugin/Bootstrap4/css/bootstrap.css" rel="stylesheet">
    <link href="../../Plugin/Bootstrap4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="inscription.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
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
      <!--p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p-->
    </form>
  </body>
</html>
