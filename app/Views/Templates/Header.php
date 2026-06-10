<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/css.css') ?>">
    <title>Cuisine-Marais-Creation</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container">

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

      <ul class="navbar-nav text-center gap-3">

        <?php if (session()->get('Mel') != null) { ?>
          <li class="nav-item">
            <span class="nav-link disabled">
              Utilisateur connecté : <?= session()->get('Mel') ?>
            </span>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('index') ?>">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php  echo site_url('qui-sommes-nous') ?>">Qui sommes-nous ?</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php  echo  site_url('nos-projets') ?>">Nos projets</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php  echo site_url('contact') ?>">Nous contactez</a>
        </li>

      </ul>

    </div>

  </div>
</nav>