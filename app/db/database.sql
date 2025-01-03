-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/01/2025 às 17:56
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
-- Banco de dados: `login-register`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `author`) VALUES
(1, 'Como Começar no Desenvolvimento Web com PHP', 'O desenvolvimento web com PHP é uma excelente escolha para quem deseja entrar na área de programação. Neste post, vamos explorar os conceitos básicos de PHP e como integrá-lo com HTML para criar páginas dinâmicas.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(2, '5 Dicas para Organizar Seu Código PHP', 'Organizar o código é essencial para garantir a manutenibilidade e escalabilidade de um projeto. Neste artigo, vamos compartilhar 5 dicas importantes para melhorar a organização do seu código PHP.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(3, 'React Native: O Futuro do Desenvolvimento Mobile', 'O React Native tem ganhado cada vez mais popularidade no desenvolvimento de aplicativos móveis. Neste post, vamos discutir como essa tecnologia pode facilitar a criação de apps nativos para Android e iOS com JavaScript.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(4, 'Como Criar um Currículo de Programador de Sucesso', 'Um bom currículo pode ser a chave para conseguir seu primeiro emprego ou freelance como programador. Neste artigo, mostramos como montar um currículo que destaque suas habilidades e projetos no GitHub.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(5, 'A Importância do GitHub para Desenvolvedores', 'GitHub é uma plataforma essencial para desenvolvedores. Neste post, vamos explicar como usar o GitHub para armazenar seus projetos, colaborar com outros desenvolvedores e criar um portfólio profissional.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(6, 'Como Aprender PHP de Forma Eficiente', 'Aprender PHP pode ser uma jornada desafiadora, mas com as abordagens certas, é possível dominar a linguagem rapidamente. Aqui estão algumas dicas para aprender PHP de forma eficiente e começar a criar projetos reais.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(7, 'Desenvolvimento Web: HTML e CSS para Iniciantes', 'Antes de mergulhar em PHP, é essencial entender os fundamentos do HTML e CSS. Neste post, vamos explicar como essas duas tecnologias são usadas para criar páginas web simples e dinâmicas.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(8, 'O Que é Análise de Dados e Como Começar?', 'A análise de dados é uma das áreas mais promissoras no campo da tecnologia. Neste artigo, discutimos o que é análise de dados e como você pode começar a aprender essa habilidade valiosa para o futuro.', '2024-12-17 17:40:48', 'Samuel Gonzaga'),
(9, 'Como Começar no Desenvolvimento Web com PHP', 'O desenvolvimento web com PHP é uma excelente escolha para quem deseja entrar na área de programação. Neste post, vamos explorar os conceitos básicos de PHP e como integrá-lo com HTML para criar páginas dinâmicas.', '2024-11-10 17:23:00', 'Lucas Silva'),
(10, '5 Dicas para Organizar Seu Código PHP', 'Organizar o código é essencial para garantir a manutenibilidade e escalabilidade de um projeto. Neste artigo, vamos compartilhar 5 dicas importantes para melhorar a organização do seu código PHP.', '2024-11-15 12:45:00', 'Mariana Costa'),
(11, 'React Native: O Futuro do Desenvolvimento Mobile', 'O React Native tem ganhado cada vez mais popularidade no desenvolvimento de aplicativos móveis. Neste post, vamos discutir como essa tecnologia pode facilitar a criação de apps nativos para Android e iOS com JavaScript.', '2024-11-20 19:30:00', 'Carlos Almeida'),
(12, 'Como Criar um Currículo de Programador de Sucesso', 'Um bom currículo pode ser a chave para conseguir seu primeiro emprego ou freelance como programador. Neste artigo, mostramos como montar um currículo que destaque suas habilidades e projetos no GitHub.', '2024-11-25 14:10:00', 'Fernanda Souza'),
(13, 'A Importância do GitHub para Desenvolvedores', 'GitHub é uma plataforma essencial para desenvolvedores. Neste post, vamos explicar como usar o GitHub para armazenar seus projetos, colaborar com outros desenvolvedores e criar um portfólio profissional.', '2024-12-01 21:00:00', 'Ricardo Oliveira'),
(14, 'Como Aprender PHP de Forma Eficiente', 'Aprender PHP pode ser uma jornada desafiadora, mas com as abordagens certas, é possível dominar a linguagem rapidamente. Aqui estão algumas dicas para aprender PHP de forma eficiente e começar a criar projetos reais.', '2024-12-05 11:25:00', 'Isabela Pereira'),
(15, 'Desenvolvimento Web: HTML e CSS para Iniciantes', 'Antes de mergulhar em PHP, é essencial entender os fundamentos do HTML e CSS. Neste post, vamos explicar como essas duas tecnologias são usadas para criar páginas web simples e dinâmicas.', '2024-12-10 16:40:00', 'João Santos'),
(16, 'O Que é Análise de Dados e Como Começar?', 'A análise de dados é uma das áreas mais promissoras no campo da tecnologia. Neste artigo, discutimos o que é análise de dados e como você pode começar a aprender essa habilidade valiosa para o futuro.', '2024-12-12 20:50:00', 'Beatriz Martins');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
