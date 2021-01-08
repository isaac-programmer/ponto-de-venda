-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jan-2021 às 16:18
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ponto_de_venda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `id_procedimento` int(11) UNSIGNED NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 NOT NULL,
  `funcionalidades` text CHARACTER SET utf8 NOT NULL,
  `vantagens` text CHARACTER SET utf8 NOT NULL,
  `preco` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `procedimento`
--

INSERT INTO `procedimento` (`id_procedimento`, `nome`, `funcionalidades`, `vantagens`, `preco`) VALUES
(1, 'Óptica Roshiki LX - 02', 'Realiza o escaneamento de pessoas e fornece informações como: a força do inimigo, quem está no grupo ou o tipo de arma do inimigo. Tudo isso é mostrado na córnea.\r\n                                                        O disruptor de lente externa integrada faz com que câmeras de vigilância capturem apenas o seu rosto com um borrão.', 'É constituída por aprimoradores eletroneurais que realizam a varredura do ambiente.', '130.00'),
(5, 'Coprocessador Balístico', 'Aumenta a chance de balas serem rebatidas por armas poderosas e realiza a conexão direta do implante óptico do usuário com o sistema da sua arma, oferecendo o rastreamento de dados em tempo real.', 'Um coprocessador com um sistema servomotor integrado', '250.00'),
(7, 'Sistema Lança-Projéteis', 'Lhe possibilita disparar vários projéteis poderosos causando inúmeros dano, explosões e aplicando efeitos. Além disso, lhe permite causar destruição e caos.', 'Um excelente lança-mísseis na palma da mão, literalmente.', '12350.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) UNSIGNED NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email` varchar(80) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(16) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `telefone`) VALUES
(1, 'Zack', 'zackcyber@gmail.com', '(88) 9 9745-8844'),
(2, 'Julyan', 'julyanmedicanico77@gmail.com', '(88) 9 9873-4533'),
(3, 'Juliana Pereira', 'julianapereira@hotmail.com', '(88) 9 9944-3321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_solicita_procedimento`
--

CREATE TABLE `usuario_solicita_procedimento` (
  `id_solicita_procedimento` int(11) UNSIGNED NOT NULL,
  `usuario_solicitante` int(11) UNSIGNED NOT NULL,
  `procedimento_solicitado` int(11) UNSIGNED NOT NULL,
  `data_solicitacao` char(9) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`id_procedimento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `usuario_solicita_procedimento`
--
ALTER TABLE `usuario_solicita_procedimento`
  ADD PRIMARY KEY (`id_solicita_procedimento`),
  ADD KEY `usuario_solicitante` (`usuario_solicitante`),
  ADD KEY `procedimento_solicitado` (`procedimento_solicitado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `id_procedimento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario_solicita_procedimento`
--
ALTER TABLE `usuario_solicita_procedimento`
  MODIFY `id_solicita_procedimento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario_solicita_procedimento`
--
ALTER TABLE `usuario_solicita_procedimento`
  ADD CONSTRAINT `usuario_solicita_procedimento_ibfk_1` FOREIGN KEY (`usuario_solicitante`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_solicita_procedimento_ibfk_2` FOREIGN KEY (`procedimento_solicitado`) REFERENCES `procedimento` (`id_procedimento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
