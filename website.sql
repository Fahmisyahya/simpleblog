-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Apr 2018 pada 05.28
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL,
  `title` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`idcat`, `title`) VALUES
(1, 'hiburan'),
(3, 'pendidikan'),
(4, 'tentang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`idcomment`, `idpost`, `fullname`, `email`, `content`, `date`) VALUES
(2, 9, 'Fahmi Syahrul Yahya', 'fahmiyahya0@gmail.com', 'Good apps', 'Sun, 22 04 2018'),
(3, 8, 'Fahmi Syahrul Yahya', 'fahmiyahya0@gmail.com', 'Good Apps', 'Sun, 22 04 2018'),
(4, 8, 'Fahmi Syahrul Yahya', 'fahmiyahya0@gmail.com', 'How to install it', 'Sun, 22 04 2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `date` varchar(120) NOT NULL,
  `img` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `label` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`idpost`, `title`, `username`, `date`, `img`, `content`, `label`) VALUES
(8, 'Lorem ipsum dolor sit amet', 'admin', 'Sat, 21 Apr 2018', 'book-926095_960_720.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'hiburan'),
(9, 'Simple Blog', 'admin', 'Sun, 22 Apr 2018', 'Blogging-1-760x400.jpg', '<p>Simple Blog, Make simple bloggin with it adalah sebuah CMS yang digunakan untuk membuat sebuah situs bloggin yang menawarkan tampilan dan fitur yang minimalis agar memudahkan user untuk lebih produktif dalam blogging dan CMS ini dapat dikostumisasi kerna bersifat Open Source.</p>\r\n\r\n<p>Untuk menginstallnya cukup mudah, tinggal import file SQL ke phpmyadmin dan setting bagian konfigurasinya di folder <span class=\"marker\">lib/connect.php</span> . Ganti <strong>host, user, password </strong>dan <strong>db </strong>menyesuaikan pengaturan localhost anda.</p>\r\n', 'tentang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
