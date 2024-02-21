<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesquisa de Preço</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Pesquisa de Preço</h2>
    <form action="resultado_pesquisa.php" method="GET">
      <div class="form-group">
        <label for="codigo_barras">Código de Barras:</label>
        <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" placeholder="Digite o código de barras" required>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Pesquisar</button>
      <a href="mostrar_produtos.php" class="btn btn-secondary">Mostrar Todos os Produtos</a>
      <a href="inserir.php" class="btn btn-secondary">Novo produto</a>

      
    </form>
  </div>
</body>
</html>
