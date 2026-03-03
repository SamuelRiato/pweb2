<?php
/*declaração de atributos(mesma coisa de variavel)*/
$imagem = 'midias/2321306_625.jpg';
$titulo = 'Placa de vídeo RTX5090';
$resumo = 'Placa gráfica top de linha feita para jogos';
$valor = 19999.99;

$imagem2 = 'midias/8bf93226233843836eb665242e6cd0b4.webp';
$titulo2 = 'Gabinete aquario';
$resumo2 = 'Gabinete grande com muito espaço para por as peças do seu computador';
$valor2 = 500.00;

$imagem3 = 'midias/aorus.webp';
$titulo3 = 'Placa de vídeo RTX5090';
$resumo3 = 'Placa gráfica top de linha feita para jogos';
$valor3 = 19999.99;

$imagem4 = 'midias/qual_memoria_ram_comprar_corpo.webp';
$titulo4 = 'Memoria RAM 8GB';
$resumo4 = 'Placa gráfica top de linha feita para jogos';
$valor4 = 1999.99;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Lojinha</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">LogoDaLojinha</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categorias.html">Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="subcategorias.html">Subcategorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<main>
    <div class="container-fluid">
        <div class="form-group mt-3">
            <input type="text" name="busca" id="busca" class="form-control">
        </div>
        <div class="row mt-2">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $imagem ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $titulo ?></h5>
                      <p class="card-text"><?php echo $resumo ?></p>
                    <p class="text-danger">$<?php echo $valor ?></p>
                      <a href="#" class="btn btn-outline-dark">Mostrar produto</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $imagem2 ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $titulo2 ?></h5>
                      <p class="card-text"><?php echo $resumo2 ?></p>
                    <p class="text-danger">$<?php echo $valor2 ?></p>
                      <a href="#" class="btn btn-outline-dark">Mostrar produto</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $imagem3 ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $titulo3 ?></h5>
                      <p class="card-text"><?php echo $resumo3 ?></p>
                    <p class="text-danger">$<?php echo $valor3 ?></p>
                      <a href="#" class="btn btn-outline-dark">Mostrar produto</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $imagem4 ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $titulo4 ?></h5>
                      <p class="card-text"><?php echo $resumo4 ?></p>
                    <p class="text-danger">$<?php echo $valor4 ?></p>
                      <a href="#" class="btn btn-outline-dark">Mostrar produto</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</main>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>