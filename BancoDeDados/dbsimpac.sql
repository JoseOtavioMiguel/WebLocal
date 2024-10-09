-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/10/2024 às 01:12
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsimpac`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `IdProjeto` float NOT NULL,
  `Criterio1` float NOT NULL,
  `Criterio2` float NOT NULL,
  `Criterio3` float NOT NULL,
  `Criterio4` float NOT NULL,
  `Criterio5` float NOT NULL,
  `Criterio6` float NOT NULL,
  `Criterio7` float NOT NULL,
  `Media` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avaliacao`
--

INSERT INTO `avaliacao` (`IdProjeto`, `Criterio1`, `Criterio2`, `Criterio3`, `Criterio4`, `Criterio5`, `Criterio6`, `Criterio7`, `Media`) VALUES
(42, 9, 9, 8, 9, 6, 7.8, 9, 8.26),
(56, 8.9, 9, 9, 8.5, 7.9, 9, 9, 8.76),
(57, 10, 8, 9, 9, 9, 8, 7, 8.57);

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliador`
--

CREATE TABLE `avaliador` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `projetos` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avaliador`
--

INSERT INTO `avaliador` (`id`, `nome`, `email`, `telefone`, `projetos`) VALUES
(1, 'Joao Pedro', 'joao@gmail.com', '31983553206', '0'),
(2, 'Eliene Silva', 'elienesilva@gmail.com', '31983553206', '0'),
(3, 'Marcos Vinicius', 'marcos@gmail.com', '31985670890', ''),
(4, 'José Otávio Miguel', 'joseotavio_m@hotmail.com', '31983553206', ''),
(6, 'Amanda Soares', 'amanda_soares@outlookj.com', '31965447890', ''),
(7, 'Amanda Soares', 'amanda_soares@outlook.com', '31965447890', ''),
(8, 'Eliene Silva', 'elienesilva@gmail.com', '31983553206', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `LoginId` int(11) NOT NULL,
  `Usuario` varchar(128) NOT NULL,
  `Senha` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`LoginId`, `Usuario`, `Senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-08-29-133608', 'App\\Database\\Migrations\\Login', 'default', 'App', 1724939368, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `nomeProjeto` varchar(500) NOT NULL,
  `resumoProjeto` varchar(1000) NOT NULL,
  `descricaoProjeto` varchar(1000) NOT NULL,
  `validado` varchar(3) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nomeProjeto`, `resumoProjeto`, `descricaoProjeto`, `validado`, `curso`, `data`) VALUES
(57, 'Tecnologias Sustentáveis para Construção de Habitações em Áreas Rurais', ' Este projeto foca no desenvolvimento de soluções tecnológicas sustentáveis para a construção de habitações em áreas rurais, com o objetivo de melhorar as condições de vida e promover a autossuficiência.', 'O projeto explora o uso de materiais ecológicos e técnicas de construção que são acessíveis e adaptáveis a contextos rurais. São pesquisadas alternativas como painéis solares, sistemas de captação de água da chuva e técnicas de construção com materiais locais. O objetivo é criar modelos de habitação que sejam econômicos, sustentáveis e fáceis de construir por comunidades locais.', 'SIM', 'Engenharia Civil', '2024-09-27 00:05:22'),
(58, 'Desenvolvimento de Aplicativos Móveis para Suporte a Saúde Mental', 'Este projeto visa criar aplicativos móveis destinados a apoiar a saúde mental, oferecendo ferramentas e recursos para o gerenciamento de estresse e ansiedade.', 'O projeto desenvolve uma plataforma móvel que inclui funcionalidades como monitoramento do humor, exercícios de relaxamento guiados, e acesso a recursos educativos sobre saúde mental. O aplicativo é projetado para fornecer suporte contínuo e personalizado, além de permitir o rastreamento de padrões emocionais e o fornecimento de intervenções baseadas em dados.', 'NAO', 'Psicologia', '2024-09-04 10:40:48'),
(59, 'Inovação em Energias Renováveis: Painéis Solares de Alta Eficiência', 'Este projeto investiga novas tecnologias para a melhoria da eficiência dos painéis solares, com o objetivo de aumentar a produção de energia e reduzir custos.', 'O projeto foca no desenvolvimento e teste de novos materiais e designs para painéis solares, com ênfase em aumentar a eficiência da conversão de luz solar em eletricidade. São exploradas tecnologias emergentes, como células solares de perovskita e novos métodos de fabricação. O projeto também inclui a avaliação do impacto econômico e ambiental das inovações propostas.', 'NAO', 'Engenharia Elétrica', '2024-09-04 10:41:31'),
(60, 'Estudo sobre a Eficácia dos Métodos de Ensino Online no Ensino Superior', 'Este projeto avalia a eficácia dos métodos de ensino online comparados aos métodos tradicionais no ensino superior, analisando seu impacto na aprendizagem e na retenção de conhecimento.', 'O projeto envolve a análise de dados de desempenho acadêmico e feedback de alunos em cursos online e presenciais. São exploradas diferentes abordagens de ensino online, como aulas gravadas e ao vivo, e a eficácia de recursos adicionais como fóruns de discussão e atividades interativas. O objetivo é fornecer recomendações para melhorar a qualidade do ensino online.', 'NAO', 'Pedagogia', '2024-09-04 10:43:30'),
(61, 'Impacto das Mudanças Climáticas na Biodiversidade Marinha', 'Este projeto investiga como as mudanças climáticas estão afetando a biodiversidade marinha, com foco em espécies ameaçadas e ecossistemas críticos.', 'O projeto envolve a coleta e análise de dados sobre a temperatura dos oceanos, a acidez da água e outras variáveis ambientais para avaliar seu impacto nas espécies marinhas. São realizadas pesquisas de campo e modelagem preditiva para identificar as mudanças na distribuição das espécies e os impactos nos ecossistemas marinhos. O objetivo é fornecer informações para estratégias de conservação e adaptação.', 'NAO', 'Engenharia Ambiental', '2024-09-04 10:44:36'),
(62, 'O Impacto da Inteligência Artificial na Diagnóstico Médico: Uma Revisão Crítica', 'Este projeto examina como a inteligência artificial (IA) está transformando o diagnóstico médico, avaliando a precisão dos sistemas de IA e suas implicações éticas e práticas.', 'A pesquisa revisa estudos recentes sobre o uso de IA em diagnósticos médicos, com foco na precisão dos algoritmos e nas preocupações éticas associadas. Analisamos a eficácia dos sistemas de IA em comparação com diagnósticos humanos tradicionais e discutimos as implicações para a prática médica e a privacidade dos pacientes.', 'NAO', 'Medicina e Tecnologias de Saúde', '2024-09-09 15:10:46'),
(63, 'A Influência das Mudanças Climáticas na Biodiversidade dos Ecossistemas Costeiros', 'Este projeto investiga como as alterações climáticas estão afetando a biodiversidade dos ecossistemas costeiros, focando nas mudanças nos padrões de distribuição das espécies e nas interações ecológicas.', 'O estudo analisa dados climáticos e ecológicos para entender as mudanças na biodiversidade costeira. A pesquisa aborda como o aumento da temperatura e a acidificação dos oceanos estão impactando diferentes espécies e habitats, e propõe estratégias para mitigar esses efeitos.', 'NAO', 'Ciências Ambientais', '2024-09-09 15:11:11'),
(64, 'O Papel da Gamificação no Engajamento dos Estudantes em Cursos Online', 'Este projeto explora como a gamificação pode aumentar o engajamento e a retenção dos alunos em cursos online, analisando as práticas mais eficazes e seus impactos no desempenho acadêmico.', ' A pesquisa investiga diferentes técnicas de gamificação aplicadas a plataformas de ensino online. Avaliamos como elementos como recompensas, desafios e feedbacks instantâneos afetam o envolvimento dos alunos e a eficácia do aprendizado, com base em estudos de caso e dados de plataformas educacionais.', 'SIM', 'Pedagogia', '2024-09-09 15:13:12'),
(65, 'Efeitos da Leitura Digital versus Impressa na Compreensão de Textos', 'Este projeto investiga como a leitura de textos digitais e impressos influencia a compreensão e retenção das informações pelos leitores, com implicações para o design de materiais educativos.', 'A pesquisa compara a compreensão de textos lidos em formatos digitais e impressos, usando testes de compreensão e análises de retenção. O estudo considera fatores como a ergonomia, a interação com o texto e as preferências pessoais dos leitores, fornecendo recomendações para a criação de materiais educacionais eficazes.', 'SIM', 'Psicologia ', '2024-09-09 15:13:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomeUsuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`IdProjeto`);

--
-- Índices de tabela `avaliador`
--
ALTER TABLE `avaliador`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LoginId`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliador`
--
ALTER TABLE `avaliador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
