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

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário de inserção
    $nome_produto = $_POST['nome_produto'];
    $codigo_barras = $_POST['codigo_barras'];
    $preco_varejo = $_POST['preco_varejo'];
    $preco_atacado = $_POST['preco_atacado'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];

    // Query SQL para inserir o novo produto
    $query = "INSERT INTO produtos (nome_produto, codigoBarras, preco_varejo, preco_atacado, descricao, categoria) VALUES ('$nome_produto', '$codigo_barras', '$preco_varejo', '$preco_atacado', '$descricao', '$categoria')";

    // Verifica se a inserção foi bem-sucedida
    if ($conexao->query($query) === TRUE) {
        echo "<p>Novo produto inserido com sucesso!</p>";
        echo "<p><a href='mostrar_produtos.php'>Voltar para a lista de produtos</a></p>";
    } else {
        echo "Erro ao inserir produto: " . $conexao->error;
    }
}

// Fecha a conexão
$conexao->close();
?>
