-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2016 pada 08.17
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(11) NOT NULL,
  `author_firstname` varchar(50) NOT NULL,
  `author_lastname` varchar(50) NOT NULL,
  `author_othernames` varchar(50) NOT NULL,
  `author_birthdate` date NOT NULL,
  `author_history` text NOT NULL,
  `author_image` text NOT NULL,
  `author_isactive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL,
  `book_isbn` varchar(15) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_yop` date NOT NULL,
  `book_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `book_active` int(11) NOT NULL DEFAULT '1',
  `book_genreid` int(11) NOT NULL,
  `book_publisherid` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `Books_idx_1` (`book_genreid`,`book_publisherid`),
  KEY `Books_Publishers` (`book_publisherid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_author`
--

CREATE TABLE IF NOT EXISTS `book_author` (
  `Book_Author_ID` int(11) NOT NULL,
  `BookId` int(11) NOT NULL,
  `AuthorId` int(11) NOT NULL,
  PRIMARY KEY (`Book_Author_ID`),
  KEY `Book_Author_Authors` (`AuthorId`),
  KEY `Book_Author_Books` (`BookId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_genre`
--

CREATE TABLE IF NOT EXISTS `book_genre` (
  `book_genreid` int(11) NOT NULL,
  `book_genre` varchar(20) NOT NULL,
  `book_genreactive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`book_genreid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_images`
--

CREATE TABLE IF NOT EXISTS `book_images` (
  `imageID` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `imagePath` text NOT NULL,
  `imageIsTitle` int(11) NOT NULL DEFAULT '0',
  `imageActive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`imageID`),
  KEY `Book_Images_Books` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `Order_User` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` varchar(10) NOT NULL,
  `order_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_detail_id`),
  KEY `Order_Details_Books` (`book_id`),
  KEY `Order_Details_Order` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(20) NOT NULL,
  `publisher_country` int(11) NOT NULL,
  `publisher_city` varchar(20) NOT NULL,
  `publisher_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(20) NOT NULL,
  `user_lastname` varchar(20) NOT NULL,
  `user_emailaddress` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'customer',
  `user_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_billing`
--

CREATE TABLE IF NOT EXISTS `user_billing` (
  `billing_id` int(11) NOT NULL,
  `billing_user_id` int(11) NOT NULL,
  `billing_address` text NOT NULL,
  `billing_country` varchar(50) NOT NULL,
  `billing_phonenumber` varchar(20) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`billing_id`),
  KEY `User_Billing_User` (`billing_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `Books_Book_Genre` FOREIGN KEY (`book_genreid`) REFERENCES `book_genre` (`book_genreid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Books_Publishers` FOREIGN KEY (`book_publisherid`) REFERENCES `publishers` (`publisher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `Book_Author_Authors` FOREIGN KEY (`AuthorId`) REFERENCES `authors` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Book_Author_Books` FOREIGN KEY (`BookId`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `book_images`
--
ALTER TABLE `book_images`
  ADD CONSTRAINT `Book_Images_Books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `Order_User` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `Order_Details_Books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_Details_Order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_billing`
--
ALTER TABLE `user_billing`
  ADD CONSTRAINT `User_Billing_User` FOREIGN KEY (`billing_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
