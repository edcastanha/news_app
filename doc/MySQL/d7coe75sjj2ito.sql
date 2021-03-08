SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sql10397145`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbautores`
--

CREATE TABLE `tbautores` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbautores`
--

INSERT INTO `tbautores` (`id`, `nome`, `email`, `senha`, `created_at`) VALUES
(11, 'Ruan Lourenço', 'ruan@news.com', 'dcchsbxiuwbhxw', '2021-03-04 18:39:31'),
(14, 'Carlos Alberto', 'a.alberto@sbt.com', 'daoih657', '2021-03-04 19:51:25'),
(15, 'Zezé Di Camargo', 'zeze@cantor.com.br', 'zzzzzeeee111', '2021-03-04 19:52:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategorias`
--

CREATE TABLE `tbcategorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbcategorias`
--

INSERT INTO `tbcategorias` (`id`, `nome`, `descricao`, `created_at`) VALUES
(1, 'Internacional', 'Todo o que acontece no mundo', '2021-03-03 23:29:43'),
(2, 'Nacionais', 'Aconteceu no Brasil, você ficar atualizado.', '2021-03-03 23:31:30'),
(3, 'Politica', 'Saiba tudo sobre as esferas publicas do nosso país', '2021-03-03 23:31:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbports`
--

CREATE TABLE `tbports` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sloga` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `autorId` int(11) NOT NULL,
  `categoriaId` int(11) NOT NULL,
  `criado` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbports`
--

INSERT INTO `tbports` (`id`, `titulo`, `sloga`, `conteudo`, `autorId`, `categoriaId`, `criado`) VALUES
(1, 'Primeira Noticia', 'Saiba tudo em Primeira mão', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 2, '2021-03-03 23:39:05'),
(2, 'Segunda News', 'Sua segunda News App', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1, '2021-03-03 23:40:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbautores`
--
ALTER TABLE `tbautores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `tbports`
--
ALTER TABLE `tbports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbautores`
--
ALTER TABLE `tbautores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbports`
--
ALTER TABLE `tbports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
