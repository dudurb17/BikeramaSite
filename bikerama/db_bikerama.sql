-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 01:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginbike`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `user` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `user`, `email`, `senha`) VALUES
(8, 'Eduardo Robetti Bedin ', 'senha', 'e', '$2y$10$FIk3x32fw99fNMPeCWEIF.2N5w0/ksWBiCDttxNH5HVwxBLOp7spO'),
(9, 'Eduardo Robetti Bedin ', 'dudu_rb', 'eduardo.robettibedin@gmail.com', '$2y$10$s8NwK4SrcHxZpRerZGgCJ.aWKUvJRHsD6qMIjG2AJWu49hpuDa9FO'),
(10, 'nando', 'teste', '3234', '$2y$10$9rv.OBaEEHseKAl7Yo4bgu9QKMzMS3PICU0HRk0VBk.tZVDwFBNsC'),
(11, 'teste2', 'teste23', '213434', '$2y$10$H3yMJopeIqljjSkQ0mBLl.GTGhnSAMspi.qtC6Ldvws4m8jOmLfzi'),
(12, 'Eduardo Robetti Bedin ', 'senha23', 'e', '$2y$10$OpApKC5EXQMKVd2PlMmgQ.CKLbz.4XqC6lMYEo4DkII4y6fxuTOU6'),
(13, 'Nadia Robetti Bedin', 'Nadia_rb', 'robettibedinnadia@gmail.com', '$2y$10$eIcmnyijN6IchokwIlbWUeM.QX3fs5dcA6Pgr.ojDJl5DmfeXal2m'),
(14, 'teste4', 'teste4', 'testa4', '$2y$10$Fmb3ZqQnZhNXA6FNlW65cekpsFQDlLpGwXDPCnrV0/rJtzSvVd1dy'),
(15, 'teste5', 'teste5', 'teste5', '$2y$10$RH.7G04t26/COIa8NMQzFudq28ZHuVCwNgNAM9.Fw6AscMoTebiaa'),
(16, 'teste6', 'teste6', 'teste6', '$2y$10$eG5LTpCl4NlCCnMQU.Qy1OD.tsmd.yGSXe6wr7SppvajT0pJzTHA2'),
(17, 'teste7', 'teste7', 'teste7', '$2y$10$l95WQDJOUldnIMdVKzTsdOOyL/hi3Fia71UNR/oamGKCvZSNniqMy'),
(18, 'teste8', 'teste8', 'teste8', '$2y$10$MCIc5Yb7IBwxeqwIhaR8yOxOkQElFPZTfCfMK7XiKoB3i1j1qnKN6'),
(19, 'teste9', 'teste9', 'teste9', '$2y$10$DxsEngGu5FatD1xaL8VWvukrTt9kOWH/t5prAxjjsUtw7HGGgggHK'),
(20, 'teste10', 'teste10', 'teste10', '$2y$10$bTKteBxFnRePQKFSxNTmXO87R92Zc9SHa1tnQ9SJT/Lj1RpMfm6Gy'),
(21, 'teste11', 'teste11', 'teste11', '$2y$10$eqqq1z2pGR0skSBFO20ADO6JrgrLB/6id7HALNtp/Vj3ZBp6lgYdq'),
(22, 'teste12', 'teste12', 'teste12', '$2y$10$t0KBfTl6CTiALlljq5LS8eXBwyXtPEHvalLvRbh.h/JG..FfGGyzi'),
(23, 'teste13', 'teste13', 'teste13', '$2y$10$dmMxrfpn5UK0hICZjR/anOVm.fX5pWcOEjsTvBtVV.Jfhz2Fsw02a'),
(24, 'teste14', 'teste14', 'teste14', '$2y$10$cQjgfZXMQw1Kb0ZxIvWyuuShMXoLRCNWhqIY/gN.mKJ9LTXaGABVe'),
(25, 'teste15', 'teste15', 'teste15', '$2y$10$dI9DVzyctggY1Aev63XJhumB/3brt8QFhsqncs4IW4o.1sU2U3t1.'),
(26, 'teste16', 'teste16', 'teste16', '$2y$10$N5mtcU7nmJitCZLfEVvrVeSmSb7rMb7vIvZSMCxeexsWnr8gegMVK'),
(27, 'teste17', 'teste17', 'teste17', '$2y$10$6.vjgxcWMHPnVxBf0yF/decfvDh98wd4FALfPzXkNV2f29qMbIff.'),
(28, 'teste18', 'teste18', 'teste18', '$2y$10$t4gobpb//AqYwTUdEOu8oOstagJbG/OMZYoC2n97wyo2eEBFDQ2Kq'),
(29, 'teste19', 'teste19', 'teste19', '$2y$10$TLCBG6CZ18hVbp5.6Qqe4eKW6sWoOLlNl4j.IHsna6j.B6FY/WJpm'),
(30, 'eduaers', 'dudu_rb13', 'dudurbmultiplayer3273@gmail.com ', '$2y$10$6n6H8YoyGuooNLz7cG4xAOAN.InTR51f9IW93uxUNtffvSFGk2gyK'),
(31, '3434', 'dudurb45', '123', '$2y$10$vGe5qQS.2pqo0j.eyMeKhO6eZPrzXD0mSpfhkgAdVn8tRCIuRAkKW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
