
--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacao_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Inserindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacao_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Maicon Kistemmacher', 'maicon.kistemmacher@gmail.com', '3f9afdf186ff91efc696a17713ab8f9d', 1, 1, '2021-03-12 12:00:01', '2021-03-12 12:00:10'),
(2, 'Christine Labrenz', 'chrys_chrys.lab@hotmail.com', '93279e3308bdbbeed946fc965017f67a', 1, 2, '2021-03-12 12:00:02', '2021-03-12 12:00:20');


-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Inserindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2021-03-12 12:00:00', NULL),
(2, 'Colaborador', '2021-03-12 12:00:00', NULL),
(3, 'Cliente', '2021-03-12 12:00:00', NULL);

-- --------------------------------------------------------