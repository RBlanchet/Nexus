<?php
  include('layout/header.php');
  var_dump($_POST);
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Nexus Generator</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class='container'>
    <form method='POST' action='index.php' style="padding-top: 25vh">
      <div class="form-group">
        <label for="exampleTextarea">Saissez votre code ici</label>
        <textarea name='code' class="form-control" id="exampleTextarea" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
<?php
  include('layout/footer.php');
