<?php


// Verifica se o código de barras foi enviado via GET
if(isset($_GET['codigo_barras'])) {
    // Conecta ao banco de dados
    $conexao = new mysqli("localhost", "root", "", "estoque");

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Sanitiza o código de barras para evitar injeção de SQL
    $codigo_barras = $conexao->real_escape_string($_GET['codigo_barras']);

    // Query SQL para buscar o produto pelo código de barras
    $query = "SELECT * FROM produtos WHERE codigoBarras = '$codigo_barras'";
    $resultado = $conexao->query($query);

    // Verifica se encontrou algum resultado
    if ($resultado->num_rows > 0) {
        // Exibe os resultados
        while ($row = $resultado->fetch_assoc()) {
            echo "<h2>Detalhes do Produto</h2>";
            echo "<p><strong>Nome:</strong> " . $row['nome_produto'] . "</p>";
            echo "<p><strong>Código de Barras:</strong> " . $row['codigoBarras'] . "</p>";
            echo "<p><strong>Preço (Varejo):</strong> R$ " . $row['preco_varejo'] . "</p>";
            echo "<p><strong>Preço (Atacado):</strong> R$ " . $row['preco_atacado'] . "</p>";
            echo "<p><strong>Descrição:</strong> " . $row['descricao'] . "</p>";
            echo "<p><strong>Categoria:</strong> " . $row['categoria'] . "</p>";
        }
    } else {
        echo "<p>Nenhum produto encontrado com o código de barras fornecido.</p>";
    }

    // Fecha a conexão
    $conexao->close();
} else {
    // Redireciona para a página de pesquisa se nenhum código de barras foi fornecido
    header("Location: index.php");
    exit();
}
?>
