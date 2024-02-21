-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2024 at 02:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `codigoBarras` varchar(15) NOT NULL,
  `preco_varejo` int NOT NULL,
  `preco_atacado` int NOT NULL,
  `descricao` text NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `codigoBarras`, `preco_varejo`, `preco_atacado`, `descricao`, `categoria`) VALUES
(1, 'biscoito de morango', 'bm0001', 2, 1, 'pacote de biscoito com 10 biscoitos dentro', 'alimento'),
(2, 'biscoito de chocolate', 'bm0002', 2, 1, 'pacote de biscotio com 10 biscoitos dentro', 'alimento'),
(3, 'latinha de coca-cola 330ml', 'lt0001', 4, 2, 'lata com coca-cola dentro', 'bebidas'),
(6, 'latinha de sprite 330ml', 'lt0002', 4, 2, 'lata com sprit dentro', 'bebidas'),
(7, 'salgado de frango', 'sl0001', 5, 3, 'salgado repleto de frango', 'alimento'),
(8, 'Refrigerante de Cola', 'rc001', 4, 3, 'Delicioso refrigerante sabor cola', 'Bebidas'),
(9, 'Biscoito de Chocolate', 'bc002', 2, 2, 'Crocantes biscoitos de chocolate', 'Alimentos'),
(10, 'Sabonete Líquido', 'sb003', 6, 5, 'Suave sabonete líquido para pele macia', 'Higiene'),
(11, 'Camiseta Branca', 'cm004', 16, 13, 'Confortável camiseta branca de algodão', 'Vestuário'),
(12, 'Caneta Azul', 'ct005', 2, 1, 'Caneta esferográfica de tinta azul', 'Material Escolar'),
(13, 'Maçã Fuji', 'mc006', 1, 1, 'Maçãs Fuji frescas e suculentas', 'Frutas'),
(14, 'Fone de Ouvido Bluetooth', 'fn007', 50, 40, 'Fone de ouvido sem fio com tecnologia Bluetooth', 'Eletrônicos'),
(15, 'Livro de Romance', 'lv008', 20, 15, 'Romance emocionante que irá prender sua atenção', 'Livros'),
(16, 'Chaveiro de Pelúcia', 'ch009', 7, 6, 'Adorável chaveiro de pelúcia para decorar suas chaves', 'Acessórios'),
(17, 'Mochila Escolar', 'mc010', 30, 25, 'Mochila espaçosa e resistente para uso escolar', 'Material Escolar'),
(18, 'Óculos de Sol', 'oc011', 40, 30, 'Óculos de sol elegantes para proteger seus olhos do sol', 'Acessórios'),
(19, 'Papel Toalha', 'pt012', 3, 3, 'Rolo de papel toalha absorvente e resistente', 'Higiene'),
(20, 'Carregador Portátil', 'cr013', 20, 15, 'Carregador portátil compacto para dispositivos móveis', 'Eletrônicos'),
(21, 'Caixa de Bombons', 'cb014', 9, 7, 'Deliciosa seleção de bombons de chocolate', 'Alimentos'),
(22, 'Escova de Dentes', 'ed015', 3, 2, 'Escova de dentes macia para uma limpeza eficaz', 'Higiene'),
(23, 'Notebook HP', 'nb016', 3000, 2800, 'Notebook HP com processador Intel Core i7 e tela de 15.6 polegadas', 'Eletrônicos'),
(24, 'Fone de Ouvido com Microfone', 'fn017', 30, 25, 'Fone de ouvido com microfone embutido para chamadas e música', 'Acessórios'),
(25, 'Máquina de Café Expresso', 'mc018', 500, 450, 'Máquina de café expresso com sistema de cápsulas', 'Eletrodomésticos'),
(26, 'Bolsa Feminina de Couro', 'bs019', 100, 80, 'Bolsa feminina de couro sintético com alça ajustável', 'Acessórios'),
(27, 'Teclado Sem Fio', 'tk020', 40, 35, 'Teclado sem fio com conexão Bluetooth', 'Eletrônicos'),
(28, 'Caneca Personalizada', 'cn021', 10, 8, 'Caneca de cerâmica personalizada com foto ou mensagem', 'Decoração'),
(29, 'Relógio de Pulso Digital', 'rl022', 25, 20, 'Relógio de pulso digital com alarme e cronômetro', 'Acessórios'),
(30, 'Cadeira de Escritório Ergonômica', 'cd023', 150, 130, 'Cadeira de escritório ergonômica com ajuste de altura', 'Móveis'),
(31, 'Laptop Cooler', 'lp024', 20, 15, 'Cooler para laptop com ventiladores silenciosos', 'Acessórios'),
(32, 'Caderno Universitário', 'cd025', 8, 6, 'Caderno universitário com capa dura e folhas pautadas', 'Material Escolar'),
(33, 'Câmera de Segurança Wi-Fi', 'cm026', 80, 70, 'Câmera de segurança Wi-Fi com visão noturna', 'Segurança'),
(34, 'Alicate de Corte', 'al027', 13, 10, 'Alicate de corte com cabo emborrachado', 'Ferramentas'),
(35, 'Mochila de Viagem', 'mc028', 60, 50, 'Mochila de viagem resistente à água com múltiplos compartimentos', 'Acessórios'),
(36, 'Cabo USB Tipo-C', 'cb029', 8, 6, 'Cabo USB Tipo-C de alta velocidade para carregamento e transferência de dados', 'Acessórios'),
(37, 'Mouse Óptico', 'ms030', 15, 12, 'Mouse óptico com design ergonômico e roda de rolagem', 'Acessórios');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
