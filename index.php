<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Noticias Alcachofa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="index.css" rel="stylesheet" />

        
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Noticias Alcachofa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="autor.php">Autor</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <?php

    $url = 'http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=05be0f2d358d4cd29f57154d1e5a24e0';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);

    ?>

    <div class="container-fluid">
      <?php
        foreach($NewsData->articles as $News)
        {
      ?>
      <div class="row NewsGrid">
          <div class="col-md-3">
            <img src="<?php echo $News->urlToImage  ?>" alt="News thumbnail" class="rounded">
          </div>
          <div class="col-md-9">
            <h2>Tittle: <?php echo $News->title ?></h2>
            <h5>Description: <?php echo $News->description ?></h5>
            <p>Content: <?php echo $News->content ?></p>
            <h6>Author: <?php echo $News->author ?></h6>
            <h6>Published: <?php echo $News->publishedAt ?></h6>
          </div>
      
      </div>
      <?php
          }
      ?>
    </div


    <nav aria-label="...">
      <ul class="pagination pagination-lg">
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            1
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
    </nav>
