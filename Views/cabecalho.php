<!DOCTYPE html>
<html>
<head>
  <title>Dracarys</title>

        <!--<button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <a class="btn btn-danger" href="">Coelhinho Marrom</a>
        <a class="btn btn-warning" href="">Coelhinho Malhado</a> -->

  <meta charset="utf-8">
  <!-- Ajustar viewport conforme dimensões do dispositivo (smartphone, tablet, notebook, etc.) -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Referenciar as bibliotecas necessárias para usar o Bootstrap. -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css\bootstrap.min.css" >
  <link rel="stylesheet" href="css\estilo1.css"> 
  <script type="" src="jquery\jquery-3.3.1.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  
</head>
<style type="text/css">
  .jumbotron {background-color: #ddddff;}
</style>

<body>
<!-- Caixa grande usada para destacar conteúdo especial da página. -->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Biblioteca Virtual</h1>
  <h4>Sistema de Gerenciamento Pessoal de Livros</h4>
  <h5>Dracarys Basic</h5> 
</div>

<!-- Barra de navegação com links para outras páginas e com apresentação diferenciada em dispositivos de diferentes tamanhos (testar reduzindo a janela do navegador) -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="">Home</a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"> 
      <li class="nav-item">
        <a class="btn btn-primary" href="/DracarysBook/Views/pessoa.index.php">Pessoa</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" href="/DracarysBook/Views/livro.create.php">Adicionar Livro</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-success" href="/DracarysBook/Views/livroslidos.php">Livros Lidos!</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-warning" href="/DracarysBook/Views/livrosler.php">Livros a Ler!</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" href="/DracarysBook/Views/projeto.index.php">Galeria</a>
      </li>
    </ul>
  </div>  
</nav>

