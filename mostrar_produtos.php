<?php

$host = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco_de_dados = "estoque"; 

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica se ocorreu algum erro na conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Query SQL para selecionar todos os produtos
$query = "SELECT * FROM produtos";
$resultado = $conexao->query($query);

// Verifica se a consulta foi bem-sucedida
if ($resultado->num_rows > 0) {
    echo "<h2>Todos os Produtos</h2>";
    echo "<div class='container'><div class='row'>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Nome do Produto</th><th>Código de Barras</th><th>Preço (Varejo)</th><th>Preço (Atacado)</th><th>Descrição</th><th>Categoria</th></tr></thead>";
    echo "<tbody>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nome_produto'] . "</td>";
        echo "<td>" . $row['codigoBarras'] . "</td>";
        echo "<td>R$ " . $row['preco_varejo'] . "</td>";
        echo "<td>R$ " . $row['preco_atacado'] . "</td>";
        echo "<td>" . $row['descricao'] . "</td>";
        echo "<td>" . $row['categoria'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div></div>";
} else {
    echo "<p>Nenhum produto encontrado.</p>";
}

// Fecha a conexão
$conexao->close();
?>
