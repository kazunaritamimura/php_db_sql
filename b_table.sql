-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `b_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `b_table`
--

CREATE TABLE `b_table` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `score` varchar(100) NOT NULL,
  `naiyou` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `b_table`
--

INSERT INTO `b_table` (`id`, `name`, `score`, `naiyou`, `indate`) VALUES
(1, '谷村', '90', '変人です', '2021-03-25 22:17:46'),
(2, '川村', '10', '凡人です', '2021-03-25 22:18:08'),
(3, '谷口', '50', '変人・凡人両方の側面があります', '2021-03-25 22:18:40'),
(4, '吉岡', '40', 'やや凡人です', '2021-03-25 22:19:11'),
(5, '野老山', '60', 'やや変人です', '2021-03-25 22:19:31'),
(6, '濱田', '80', 'かなり変人です', '2021-03-25 22:19:50'),
(7, '松本', '20', 'かなり凡人です', '2021-03-25 22:20:10'),
(8, '宮崎', '70', '比較的変人です', '2021-03-25 22:20:45'),
(9, '藤原', '30', '比較的凡人です', '2021-03-25 22:21:09'),
(10, '日高', '100', 'とんでもなく変人です', '2021-03-25 22:22:24');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `b_table`
--
ALTER TABLE `b_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `b_table`
--
ALTER TABLE `b_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
