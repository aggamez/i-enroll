-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 08:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-enroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `subCode` varchar(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculums`
--

INSERT INTO `curriculums` (`id`, `code`, `subCode`, `name`) VALUES
(3, 'BSCS', 'CS', 'Bachelor of Science in Computer Science (2020)');

-- --------------------------------------------------------

--
-- Table structure for table `enroll-codes`
--

CREATE TABLE `enroll-codes` (
  `id` int(11) NOT NULL,
  `enrollCode` varchar(20) NOT NULL,
  `idStud` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `idLog` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `source` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `target` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `idLog`, `date`, `source`, `action`, `target`) VALUES
(1, '67c40fd1a6c3159a22eba9f483c3c07b449d35302577d098136c06a011b12815', '2022-11-03 18:23:19', 'admin2022init', 'CREATE / ADD', 'PE1'),
(2, '5f3f23b48ad2295f085c8140580a0082eec255bcb8c92a5f185f52ea985dc120', '2022-11-03 18:25:39', 'admin2022init', 'EDIT / CHANGE', 'AL101'),
(3, '8517c149ee3a7b728042a3fd9357d299b162bd620ddd7d14defcb9e89470ed74', '2022-11-03 18:26:03', 'admin2022init', 'EDIT / CHANGE', 'AL101'),
(4, '19f5c623680a78f92bf45162832624e8e15d01bb03324f20a0878a95f03d1118', '2022-11-03 18:27:49', 'admin2022init', 'DELETE / REMOVE', 'PE1'),
(5, '05b97e6e6da3bfd8069a3f0836a4aaaae1b1b98ebd1d0cdc2d97507f4b3cc094', '2022-11-03 18:28:09', 'admin2022init', 'CREATE / ADD', 'PE1'),
(6, '128663643d5ec0197541a00e5fbefbaa4071ceff511173213f589a26b4b89fda', '2022-11-03 18:37:56', 'admin2022init', 'CREATE / ADD', 'CC103'),
(7, 'aea888875887bbcc6b38d7f3f7ec64738fad8208621bb7f37914121efa42b69e', '2022-11-03 18:38:10', 'admin2022init', 'EDIT / CHANGE', 'CC103'),
(8, '5dddfd4525b78a3b792986e2517f6ae1184ac3b4c2461d73fb0fbeb97e1082d7', '2022-11-03 18:38:37', 'admin2022init', 'CREATE / ADD', 'CC104'),
(9, '45d5fa6fb3845b583bdba95c45b79bdc653ad610a2b0efcf05ccbf10f815eac1', '2022-11-03 18:39:03', 'admin2022init', 'CREATE / ADD', 'CC105'),
(10, '2d9d5de4cdc7d7ba4b99708026c59c657c0b36e58170b5c19753dfcd4ba181bb', '2022-11-03 18:39:25', 'admin2022init', 'CREATE / ADD', 'DS102'),
(11, '747de8177f8acd98ef2fb253a76dc71f8a8e03c1fe646dbcd7c86a267150276b', '2022-11-03 18:39:44', 'admin2022init', 'CREATE / ADD', 'GE3'),
(12, 'b020d1c15a7fdf648fb6fb505580de14c14ce25f5ed24d3b4d6609703abe966a', '2022-11-03 18:40:08', 'admin2022init', 'CREATE / ADD', 'GE4'),
(13, '7066ea704b39d0eebb3cbc4a7af846dc0d057151e98e15d13af19378eef7746b', '2022-11-03 18:40:28', 'admin2022init', 'CREATE / ADD', 'PE2'),
(14, 'db1abc8bf809866cc0e262b99130de3b6a5f57b7e314aa0a63a3fb7841b65844', '2022-11-03 18:40:56', 'admin2022init', 'CREATE / ADD', 'GE11'),
(15, '34da54fa9b024fb3c5f2570c397f60dfa241d2d1b1923de6fcf527d03d1d841e', '2022-11-03 18:41:13', 'admin2022init', 'CREATE / ADD', 'NSTP2'),
(16, '4bf7b45e1700fee72d82381c8b73f67f2f1be58f2a3e332d10cd702e29729137', '2022-11-03 18:41:25', 'admin2022init', 'EDIT / CHANGE', 'NSTP2'),
(17, '57631e2d180248f062fec4477cda01041ea68b29a187a4129e6a45a46aa5eb60', '2022-11-03 18:41:51', 'admin2022init', 'CREATE / ADD', 'NSTP1'),
(18, '04110e28178ab827edd965949739ef60d8a327a88cb0cdd5a796a77dd1b4ba8a', '2022-11-03 20:20:45', 'admin2022init', 'CREATE / ADD', 'CC106'),
(19, '3f5f943232db96eab3f85271d978cd35b26029846b9023d161506a62469fc5ca', '2022-11-03 20:21:10', 'admin2022init', 'CREATE / ADD', 'SDF104'),
(20, 'f17d378f02b112ae0d24f7fb0f41f4b0805e27e4918dda22c0f1fbd88c05fe52', '2022-11-03 20:24:53', 'admin2022init', 'CREATE / ADD', 'AL102'),
(21, '019d562a60880770a50541a5f6d5d1ba3362e4d7800381e5858e69ed101b569c', '2022-11-03 20:25:13', 'admin2022init', 'CREATE / ADD', 'NC101'),
(22, 'ef3518f05287dac1bf6d52099968e675aaca974063d946a383f8c05e84108489', '2022-11-03 20:25:40', 'admin2022init', 'CREATE / ADD', 'GE5'),
(23, '96ad76b743d83807ab42be145a2afc48bace4c808bd0e7a7daf7b297cd4dc776', '2022-11-03 20:26:02', 'admin2022init', 'CREATE / ADD', 'GE6'),
(24, '50ce6737511f042e3f52c7718b8d2b899aa868dd6380dabdb2cc92acd92378d4', '2022-11-03 20:26:22', 'admin2022init', 'CREATE / ADD', 'GEE22'),
(25, '3bb501f71ed2b936af0878777dc9363252abe488b4f975746af5fb9da474c295', '2022-11-03 20:27:22', 'admin2022init', 'CREATE / ADD', 'IT100'),
(26, '20887b73600bd2cca5ed6e3c12cb666d92f60b253897a11180e3f911cb950a24', '2022-11-03 20:27:53', 'admin2022init', 'CREATE / ADD', 'PE3'),
(27, 'f1289706a15be67e8214f68b90f16b31c7dc0ef7d674cfb406c895b8ca91ce96', '2022-11-03 20:28:18', 'admin2022init', 'CREATE / ADD', 'AR101'),
(28, '7af24fb0b5056fbd6dead38cc1bf102ea17e7561ca19c2966b597006647a83bb', '2022-11-03 20:31:14', 'admin2022init', 'CREATE / ADD', 'OS101'),
(29, '1ded3c13f771530f47c84e93e87c3088e28bfaf5ec18a385c1b46c0ebe4fa088', '2022-11-03 20:32:18', 'admin2022init', 'CREATE / ADD', 'PL101'),
(30, '3f967d683f6de3798015c74ceb2a261bd81e16ed98545ad159cc3e12131a9f76', '2022-11-03 20:34:54', 'admin2022init', 'CREATE / ADD', 'HCI101'),
(31, 'ad66cd6d7d65a994b6a27a546558e1a3099845ef14ab344b1c4c90147fbf926a', '2022-11-03 20:35:20', 'admin2022init', 'CREATE / ADD', 'AL103'),
(32, 'decc278da7db652a6701fa1a76de25e3bed856432fe3a89ca458565fe96ea0d1', '2022-11-03 20:36:12', 'admin2022init', 'CREATE / ADD', 'GE7'),
(33, 'cc6e97f6b86b238cd7b97df7c5d0f8d4915bd3a1f831548165c9f4ef6e11e820', '2022-11-03 20:36:27', 'admin2022init', 'CREATE / ADD', 'GE8'),
(34, '07cd0fa9a3d16f4ca02c3306ac7cb26d8943cfb4f894a901805f632b762b6ec6', '2022-11-03 20:36:43', 'admin2022init', 'CREATE / ADD', 'GEE32'),
(35, 'e55ece42f1aa7ec25bc3b84507592a2b68a1044cd0c883f93b49cbc4126f8c00', '2022-11-03 20:37:02', 'admin2022init', 'CREATE / ADD', 'PE4'),
(36, '31670829d36da2c2db74584b80910f659df222cc8189a1381333af7c4b9cf798', '2022-11-03 20:38:44', 'admin2022init', 'CREATE / ADD', 'IAS101'),
(37, '7d02e42f02d8f03b89d19714e5379de0a9ab53400089e10ba607c393ddd8aeb4', '2022-11-03 20:39:09', 'admin2022init', 'CREATE / ADD', 'SE101'),
(38, 'cfde04311303c7caaa55d1594622d66b0ef04a2b11fe9d08b1542da966399114', '2022-11-03 20:40:13', 'admin2022init', 'CREATE / ADD', 'ELEC1'),
(39, '28f109b175f7fc8be03704e5e8b4fe97e9c2adf192e28d1240d26950c19f62f6', '2022-11-03 20:40:31', 'admin2022init', 'CREATE / ADD', 'CC107'),
(40, '47b686c8bc16f29c057b541fb824b1ced23b3bb6ebf9ddda0e84673bf147ca4c', '2022-11-03 20:40:51', 'admin2022init', 'CREATE / ADD', 'DS103'),
(41, 'cb9cdeb9f4402c927a0f31b1c9426fe66d1cc72ca95da34b8066f6521170c0e7', '2022-11-03 20:41:15', 'admin2022init', 'CREATE / ADD', 'GE9'),
(42, '64c557532763a0d5be9b816f46aa79b4ff1a9994f79a0995a2f81ef1b04b8734', '2022-11-03 20:41:36', 'admin2022init', 'CREATE / ADD', 'IT101'),
(43, '83353165ef3520f114ed2ed9c71758c9db528e9eaf4f0314f530f0b1e80f6fd7', '2022-11-03 20:42:20', 'admin2022init', 'CREATE / ADD', 'GEE13'),
(44, '31273550f28e33f2ba0608d52e6f39f0cac938bfd3e4cbf563ad6c9fa67249f7', '2022-11-03 20:46:29', 'admin2022init', 'CREATE / ADD', 'ELEC2'),
(45, '37183ff95c97014fa8c9f2c7a4363a2bd480c5fd231c20ea4dc5d29a7c9161f7', '2022-11-03 20:47:05', 'admin2022init', 'CREATE / ADD', 'SE102'),
(46, '7d0d1942154f154a9a034f34cf3a967f981f4fc0a0e811837034ac8231518e5e', '2022-11-03 20:47:26', 'admin2022init', 'CREATE / ADD', 'THS101'),
(47, '51dcdbb22556a178f1f5b24ada77297bc73ef83eaa1ff0566bf9b4ce34778d27', '2022-11-03 20:47:56', 'admin2022init', 'CREATE / ADD', 'ELEC3'),
(48, 'bc33b2e6772f6de7fb908cb2be9ce21f161f2ad996db8d8f8118097fe68226ff', '2022-11-03 20:55:13', 'admin2022init', 'CREATE / ADD', 'CC108'),
(49, '5ebd3adc19036b756b45317dcefba46ebdb286a717d76b87f8b74717989783f9', '2022-11-03 20:57:15', 'admin2022init', 'CREATE / ADD', 'OS102'),
(50, '0ba5770ee8fb23104a99752779287d2df255431b49eb33b079de9799b6b03c2a', '2022-11-03 21:00:10', 'admin2022init', 'CREATE / ADD', 'SDF105'),
(51, '303c323e790d6bd8941a3266278024b56cd1385c9033bbb5aed48e9c72ba23b7', '2022-11-03 21:00:31', 'admin2022init', 'CREATE / ADD', 'SP101'),
(52, '7ccfaf66be34af373aebcf34b1a42b8cce07c450d7a295f47fea93d3b2bfad52', '2022-11-03 21:02:03', 'admin2022init', 'CREATE / ADD', 'THS102'),
(53, 'a96a1bf129eb488030ea00ff29d1abf7410dc0b52510fd78562cee57a47eeb02', '2022-11-03 21:02:27', 'admin2022init', 'CREATE / ADD', 'ELEC 4'),
(54, '2e78a30e258810a66d296f512e27850dc08865f5d63ad799f716ced01e1fec04', '2022-11-03 21:02:43', 'admin2022init', 'CREATE / ADD', 'ELEC 5'),
(55, '521f7bf7a82d589bd578708123ea1cc621d9da752aba26f6cda0a483a13f138f', '2022-11-03 21:05:27', 'admin2022init', 'CREATE / ADD', 'IT102'),
(56, '2e8ce2ad5dcfdda83f105f55a551a58751a4db967ccd67788bd92ab5f76bfb87', '2022-11-03 21:34:53', 'admin2022init', 'CREATE / ADD', 'PRC101'),
(57, '837c2d53b8a42cbe4a982df36c75033b5089eef1ea246553f1308236505249ad', '2022-11-03 22:48:22', 'admin2022init', 'EDIT / CHANGE', 'GE3'),
(58, '762304f03506b97499d8832fdcde4949dec2a53655c59882dcc4d0ea9dcf6454', '2022-11-03 22:48:28', 'admin2022init', 'EDIT / CHANGE', 'CC106'),
(59, '5f8a55dd0c46bb20a925f4add3b3aa81faf9719e25933c6fbef2beafa5ce6406', '2022-11-03 22:48:33', 'admin2022init', 'EDIT / CHANGE', 'SDF104'),
(60, '6c539a49c69b033114bd6d298b8a0d0b11eab9137f1cdbba2938eb2729c1e0f5', '2022-11-03 22:48:39', 'admin2022init', 'EDIT / CHANGE', 'CC108'),
(61, 'd1a68b4e32f8a35cb1bdc4c47f0f436e06541f2d6fc75613d64d341006d3a8a3', '2022-11-04 11:22:12', 'admin2022init', 'CREATE / ADD', 'HCI102'),
(62, '9b988e4f56da81fd7df1c93e97cf28ef817f09e8c3d5a31165b91f3126f222e7', '2022-11-04 15:09:51', 'admin2022init', 'EDIT / CHANGE', 'CC101'),
(63, '9f57624a42f23be27593ae0a1c07f580da4a7caa4b5b919fdd06636cd4136a01', '2022-11-04 15:09:57', 'admin2022init', 'EDIT / CHANGE', 'CC102'),
(64, '80d4ed776363a337e73423c07e051b0ec6738836a35e1c19a9582fb4c570c3ad', '2022-11-04 15:10:01', 'admin2022init', 'EDIT / CHANGE', 'DS101'),
(65, '0db0daca619043d73b7d18d5c40656f2cc88f2001e253fb2fbe5042f3a278ca5', '2022-11-04 15:10:05', 'admin2022init', 'EDIT / CHANGE', 'AL101'),
(66, 'cbaedf2f67d2db8a0c494c86eae9a24cc441e7453d78ec0842aa9b2d3e013910', '2022-11-04 15:10:19', 'admin2022init', 'EDIT / CHANGE', 'GE1'),
(67, '4f0d30d71f6ab92134ac574f42b1b1c1be6ff260697eea927a069c186051ba70', '2022-11-04 15:10:25', 'admin2022init', 'EDIT / CHANGE', 'GE2'),
(68, '230c692953635a5205730c85f2e04386338103679f6e44cb12f7a71fc90f8067', '2022-11-04 15:10:29', 'admin2022init', 'EDIT / CHANGE', 'GE10'),
(69, '47a6a83abadda2b3ebcd9e10f532f7d078ba391abbdc91c248d7093ec7e3c1a6', '2022-11-04 15:10:33', 'admin2022init', 'EDIT / CHANGE', 'PE1'),
(70, '09fdce572c4d67b94ab8d8753176d3c03aa21047b9fb119f65f1eabb95f51656', '2022-11-04 15:10:39', 'admin2022init', 'EDIT / CHANGE', 'NSTP1'),
(71, 'f502188ea5c5737f11f58c3bee47d98137c68746b65d7541bb6abfe4daa03307', '2022-11-04 15:11:18', 'admin2022init', 'EDIT / CHANGE', 'CC103'),
(72, '9ac58ba8fee081ad3b861d25a223fadb53743a67822b980d4a98af4805b9462f', '2022-11-04 15:11:25', 'admin2022init', 'EDIT / CHANGE', 'CC104'),
(73, '86b2ef4bb586f9a8c649db75a68e9dffcd6f5cf91e999f105cb71bb32c50b3fd', '2022-11-04 15:11:30', 'admin2022init', 'EDIT / CHANGE', 'CC105');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `idSub` varchar(10) NOT NULL,
  `section` varchar(15) NOT NULL,
  `professor` varchar(150) NOT NULL,
  `rmAssign` varchar(50) NOT NULL,
  `timeIni` varchar(5) NOT NULL,
  `timeEnd` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student-academics`
--

CREATE TABLE `student-academics` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `idSub` varchar(10) DEFAULT NULL,
  `name` text NOT NULL,
  `unitLec` tinyint(4) NOT NULL,
  `unitLab` tinyint(4) NOT NULL,
  `unitTot` tinyint(4) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `program` varchar(10) NOT NULL,
  `type` varchar(1) NOT NULL,
  `prerequisite` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `idSub`, `name`, `unitLec`, `unitLab`, `unitTot`, `semester`, `year`, `program`, `type`, `prerequisite`) VALUES
(1, 'CC101', 'Introduction to Programming (HTML/CSS)', 2, 1, 3, 1, 1, 'CS', 'P', ''),
(2, 'CC102', 'Fundamentals of Programming (Java)', 2, 1, 3, 1, 1, 'CS', 'P', ''),
(3, 'DS101', 'Discrete Structures 1', 3, 0, 3, 1, 1, 'CS', 'P', ''),
(4, 'AL101', 'Algorithms and Complexity', 2, 1, 3, 1, 1, 'CS', 'P', ''),
(5, 'GE1', 'Understanding the Self', 3, 0, 3, 1, 1, 'CS', 'M', ''),
(6, 'GE2', 'Readings in Philippine History', 3, 0, 3, 1, 1, 'CS', 'M', ''),
(7, 'GE10', 'Pagbasa at Pagsulat sa Iba\'t-ibang Disiplina', 3, 0, 3, 1, 1, 'CS', 'M', ''),
(8, 'PE1', 'Physical Education I', 2, 0, 2, 1, 1, 'CS', 'M', ''),
(9, 'NSTP1', 'CWTS/ROTC 1', 3, 0, 3, 1, 1, 'CS', 'M', ''),
(10, 'CC103', 'Intermediate Programming (Adv. Java)', 2, 1, 3, 2, 1, 'CS', 'P', 'CC102'),
(11, 'CC104', 'Data Structures and Algorithms', 2, 1, 3, 2, 1, 'CS', 'P', 'CC102'),
(12, 'CC105', 'Information Management (DB/SQL)', 2, 1, 3, 2, 1, 'CS', 'P', 'CC101'),
(13, 'DS102', 'Discrete Structures 2', 3, 0, 3, 2, 1, 'CS', '', ''),
(14, 'GE3', 'The Contemporary World', 3, 0, 3, 2, 1, 'CS', '', ''),
(15, 'GE4', 'Mathematics in the Modern World', 3, 0, 3, 2, 1, 'CS', '', ''),
(16, 'PE2', 'Physical Education 2', 2, 0, 2, 2, 1, 'CS', '', 'PE1'),
(17, 'GE11', 'Panitikang Filipino', 3, 0, 3, 2, 1, 'CS', '', ''),
(18, 'NSTP2', 'CWTS/ROTC 2', 3, 0, 3, 2, 1, 'CS', '', 'NSTP1'),
(19, 'CC106', 'Applications Development and Emerging Technologies', 2, 1, 3, 1, 2, 'CS', '', 'CC105'),
(20, 'SDF104', 'Object Oriented Programming 1 (VB.net)', 2, 1, 3, 1, 2, 'CS', '', 'CC103'),
(21, 'AL102', 'Automata Theory and Formal Languages', 3, 0, 3, 1, 2, 'CS', '', 'AL101'),
(22, 'NC101', 'Networks and Communications', 2, 1, 3, 1, 2, 'CS', '', ''),
(23, 'GE5', 'Purposive Communication', 3, 0, 3, 1, 2, 'CS', '', ''),
(24, 'GE6', 'Art Appreciation', 3, 0, 3, 1, 2, 'CS', '', ''),
(25, 'GEE22', 'Philippine Indigineous Communities', 3, 0, 3, 1, 2, 'CS', '', ''),
(26, 'IT100', 'Internet and Advanced Office Productivity', 1, 2, 3, 1, 2, 'CS', '', ''),
(27, 'PE3', 'Physical Education 3', 2, 0, 2, 1, 2, 'CS', '', 'PE2'),
(28, 'AR101', 'Architecture and Organization', 2, 1, 3, 2, 2, 'CS', '', 'AL102'),
(29, 'OS101', 'Operating System', 2, 1, 3, 2, 2, 'CS', '', ''),
(30, 'PL101', 'Programming Languages', 2, 1, 3, 2, 2, 'CS', '', 'SDF104'),
(31, 'HCI101', 'Human Computer Interaction', 2, 1, 3, 1, 2, 'CS', '', 'CC106'),
(32, 'AL103', 'Logic Design', 2, 1, 3, 2, 2, 'CS', '', 'AL102'),
(33, 'GE7', 'Science, Technology and Society', 3, 0, 3, 2, 2, 'CS', '', ''),
(34, 'GE8', 'Ethics', 3, 0, 3, 2, 2, 'CS', '', ''),
(35, 'GEE32', 'Philippine Popular Culture', 3, 0, 3, 2, 2, 'CS', '', ''),
(36, 'PE4', 'Physical Education 4', 2, 0, 2, 2, 2, 'CS', '', 'PE3'),
(37, 'IAS101', 'Information Assurance and Security', 2, 1, 3, 1, 3, 'CS', '', 'AR101'),
(38, 'SE101', 'Software Engineering 1', 3, 0, 3, 1, 3, 'CS', '', 'PL101'),
(39, 'ELEC1', 'Computational Science', 2, 1, 3, 1, 3, 'CS', '', ''),
(40, 'CC107', 'Mobile Programming', 2, 1, 3, 1, 3, 'CS', '', 'CC103'),
(41, 'DS103', 'Statistics with SPSS', 1, 2, 3, 1, 3, 'CS', '', 'DS102'),
(42, 'GE9', 'Rizal\'s Life and Works', 3, 0, 3, 1, 3, 'CS', '', ''),
(43, 'IT101', 'Micro Controller Programming', 2, 1, 3, 1, 3, 'CS', '', ''),
(44, 'GEE13', 'Human Reproduction', 3, 0, 3, 1, 3, 'CS', '', ''),
(45, 'ELEC2', 'Intelligent Systems', 2, 1, 3, 2, 3, 'CS', '', ''),
(46, 'SE102', 'Software Engineering 2', 2, 1, 3, 2, 3, 'CS', '', 'SE101'),
(47, 'THS101', 'CS Thesis Writing 1', 3, 0, 3, 2, 3, 'CS', '', ''),
(48, 'ELEC3', 'Parallel and Distributed Computing', 2, 1, 3, 2, 3, 'CS', '', ''),
(49, 'CC108', 'Content Management System', 2, 1, 3, 2, 3, 'CS', '', 'CC105'),
(50, 'OS102', 'Open Source Operating System', 1, 2, 3, 2, 3, 'CS', '', 'OS101'),
(51, 'SDF105', 'Object Oriented Programming 2 (C#)', 2, 1, 3, 2, 3, 'CS', '', 'SDF104'),
(52, 'SP101', 'Social Issues and Professional Practice', 3, 0, 3, 2, 3, 'CS', '', 'HCI101'),
(53, 'THS102', 'CS Thesis Writing 2', 3, 3, 6, 1, 4, 'CS', '', 'THS101'),
(54, 'ELEC 4', 'Graphics and Visual Computing', 2, 1, 3, 1, 4, 'CS', '', ''),
(55, 'ELEC 5', 'System Fundamentals', 2, 1, 3, 1, 4, 'CS', '', ''),
(56, 'HCI102', 'Technopreneurship/E-Commerce', 3, 3, 6, 1, 4, 'CS', '', 'HCI101'),
(57, 'IT102', 'Social Media and Presentation', 2, 1, 3, 1, 4, 'CS', '', ''),
(58, 'PRC101', 'Practicum (OJT) Orientation, Presentation And Documentation [500 hours]', 3, 0, 3, 2, 4, 'CS', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user-admin`
--

CREATE TABLE `user-admin` (
  `id` int(11) NOT NULL,
  `idAdmin` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `lName` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-admin`
--

INSERT INTO `user-admin` (`id`, `idAdmin`, `username`, `password`, `lName`, `fName`, `mName`, `email`) VALUES
(1, 'admin2022init', 'admin', 'admin', 'lname', 'fname', 'mname', 'example@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `user-faculty`
--

CREATE TABLE `user-faculty` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user-student`
--

CREATE TABLE `user-student` (
  `id` int(11) NOT NULL,
  `idStud` varchar(10) NOT NULL,
  `fName` varchar(64) NOT NULL,
  `mName` varchar(64) NOT NULL,
  `lName` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(1) NOT NULL,
  `civStat` varchar(1) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` text NOT NULL,
  `program` varchar(10) NOT NULL,
  `yrReg` year(4) NOT NULL,
  `yrLvl` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `yrStd` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-student`
--

INSERT INTO `user-student` (`id`, `idStud`, `fName`, `mName`, `lName`, `address`, `birthdate`, `sex`, `civStat`, `contactNo`, `nationality`, `religion`, `program`, `yrReg`, `yrLvl`, `username`, `password`, `email`, `yrStd`) VALUES
(10, '', 'John Marcseaa', 'Damien', 'Doessaa', '2714 Street, City', '2022-10-06', 'M', 'S', '09125556554', 'F', 'Christian', 'BSCS', 2022, 1, 'BSCSDoessaa', 'BSCSDoessaa', 'doessaa.johnmarcseaa@tcu.edu.ph', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `enroll-codes`
--
ALTER TABLE `enroll-codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollCode` (`enrollCode`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idLog` (`idLog`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student-academics`
--
ALTER TABLE `student-academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idSub` (`idSub`);

--
-- Indexes for table `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idAdmin` (`idAdmin`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `user-faculty`
--
ALTER TABLE `user-faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-student`
--
ALTER TABLE `user-student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enroll-codes`
--
ALTER TABLE `enroll-codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student-academics`
--
ALTER TABLE `student-academics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user-admin`
--
ALTER TABLE `user-admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user-faculty`
--
ALTER TABLE `user-faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user-student`
--
ALTER TABLE `user-student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
