<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Novo Produto</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Inserir Novo Produto</h2>
    <form action="inserir_produto.php" method="POST">
      <div class="form-group">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" class="form-control" id="nome_produto" name="nome_produto" required>
      </div>
      <div class="form-group">
        <label for="codigo_barras">Código de Barras:</label>
        <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" required>
      </div>
      <div class="form-group">
        <label for="preco_varejo">Preço (Varejo):</label>
        <input type="text" class="form-control" id="preco_varejo" name="preco_varejo" required>
      </div>
      <div class="form-group">
        <label for="preco_atacado">Preço (Atacado):</label>
        <input type="text" class="form-control" id="preco_atacado" name="preco_atacado" required>
      </div>
      <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="categoria">Categoria:</label>
        <input type="text" class="form-control" id="categoria" name="categoria" required>
      </div>
      <button type="submit" class="btn btn-primary">Inserir Produto</button>
    </form>
  </div>
</body>
</html>
