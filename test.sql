-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2016 at 10:21 PM
-- Server version: 5.6.30
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userID` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `viewticket` varchar(30) NOT NULL,
  `edit` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `userID`, `password`, `status`, `viewticket`, `edit`) VALUES
(1, 'Timon', 'Ramsey', 'sagittis.Nullam.vitae@ultrices', 'Daniel', 'Phasellus', 'Deleted', '<a>###</a>', '<a>###</a>'),
(2, 'Travis', 'Salas', 'vitae.posuere.at@nibhDonecest.', 'Keane', 'tincidunt.', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(3, 'Boris', 'Hopper', 'pede@eleifendvitaeerat.edu', 'Orlando', 'eu', 'Not Active', '<a>###</a>', '<a>###</a>'),
(4, 'Leo', 'Santiago', 'lacus.vestibulum.lorem@consequ', 'Castor', 'tincidunt', 'Not Active', '<a>###</a>', '<a>###</a>'),
(5, 'Thomas', 'Murphy', 'dapibus.rutrum.justo@Curabitur', 'Ciaran', 'nec,', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(6, 'Vladimir', 'Johns', 'tristique@lacusCras.org', 'Leonard', 'et,', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(7, 'Aladdin', 'Gibson', 'nibh.vulputate.mauris@Etiamlig', 'Colby', 'orci', 'Active', '<a>###</a>', '<a>###</a>'),
(8, 'Eric', 'Frost', 'vel.nisl@elitAliquam.net', 'Samuel', 'metus', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(9, 'Zane', 'Shaw', 'purus.Nullam.scelerisque@necur', 'Arthur', 'euismod', 'Active', '<a>###</a>', '<a>###</a>'),
(10, 'Zeph', 'Guy', 'elit.pretium.et@risusDoneceges', 'Tyrone', 'Duis', 'Deleted', '<a>###</a>', '<a>###</a>'),
(11, 'Richard', 'Valdez', 'Quisque.imperdiet@diam.ca', 'Lance', 'Donec', 'Active', '<a>###</a>', '<a>###</a>'),
(12, 'Nolan', 'Haney', 'dui.augue@egetmetus.ca', 'Paki', 'vulputate,', 'Active', '<a>###</a>', '<a>###</a>'),
(13, 'Sean', 'Cervantes', 'Aliquam.gravida.mauris@acturpi', 'Bruno', 'lobortis.', 'Active', '<a>###</a>', '<a>###</a>'),
(14, 'Seth', 'Moran', 'ligula.elit.pretium@semeget.co', 'Basil', 'nulla.', 'Deleted', '<a>###</a>', '<a>###</a>'),
(15, 'Derek', 'Boyle', 'sodales.purus.in@neceuismod.ca', 'Logan', 'Duis', 'Active', '<a>###</a>', '<a>###</a>'),
(16, 'Rooney', 'Erickson', 'Cum@Donec.edu', 'Solomon', 'aliquet', 'Deleted', '<a>###</a>', '<a>###</a>'),
(17, 'Alvin', 'Wiggins', 'arcu@lacuspedesagittis.edu', 'Judah', 'nisl.', 'Active', '<a>###</a>', '<a>###</a>'),
(18, 'Quinlan', 'Acevedo', 'justo.faucibus@ornareIn.net', 'Lewis', 'ligula.', 'Deleted', '<a>###</a>', '<a>###</a>'),
(19, 'Fletcher', 'Boyd', 'vel@aliquet.co.uk', 'Lester', 'sed', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(20, 'Baxter', 'Nash', 'et@risusDonec.com', 'Reuben', 'Maecenas', 'Active', '<a>###</a>', '<a>###</a>'),
(21, 'Herrod', 'David', 'elit.erat.vitae@Sed.ca', 'Elmo', 'facilisis', 'Deleted', '<a>###</a>', '<a>###</a>'),
(22, 'Kermit', 'Mcneil', 'elementum.purus.accumsan@aucto', 'Branden', 'elit.', 'Not Active', '<a>###</a>', '<a>###</a>'),
(23, 'Vance', 'Burt', 'facilisis.non.bibendum@mollisv', 'Lester', 'Etiam', 'Deleted', '<a>###</a>', '<a>###</a>'),
(24, 'Kirk', 'Day', 'nibh.lacinia@et.co.uk', 'Dean', 'ipsum', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(25, 'Hasad', 'Rivas', 'magna.tellus.faucibus@aliqueto', 'Odysseus', 'quis', 'Not Active', '<a>###</a>', '<a>###</a>'),
(26, 'Kenneth', 'Ayers', 'sit.amet@urna.ca', 'Jared', 'vitae', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(27, 'Jamal', 'Olsen', 'elementum@malesuadavelvenenati', 'Marvin', 'vel', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(28, 'Jerome', 'Hawkins', 'enim.nisl.elementum@Proinvelit', 'Ralph', 'Phasellus', 'Deleted', '<a>###</a>', '<a>###</a>'),
(29, 'Clinton', 'Benton', 'lorem@urnaconvallis.edu', 'Louis', 'nascetur', 'Deleted', '<a>###</a>', '<a>###</a>'),
(30, 'Clayton', 'Sanders', 'ornare.libero.at@ante.edu', 'Stewart', 'amet', 'Not Active', '<a>###</a>', '<a>###</a>'),
(31, 'Andrew', 'Monroe', 'sit@nonante.edu', 'Kareem', 'tempor', 'Active', '<a>###</a>', '<a>###</a>'),
(32, 'Gabriel', 'Atkins', 'augue@Quisqueornaretortor.ca', 'Norman', 'vulputate,', 'Active', '<a>###</a>', '<a>###</a>'),
(33, 'Joseph', 'Mathis', 'non@Proinvelit.co.uk', 'Arthur', 'Nullam', 'Active', '<a>###</a>', '<a>###</a>'),
(34, 'Uriel', 'Bowman', 'mi@libero.edu', 'Kermit', 'vel,', 'Deleted', '<a>###</a>', '<a>###</a>'),
(35, 'Zephania', 'Green', 'Cum@Fuscefeugiat.com', 'Kuame', 'Nulla', 'Not Active', '<a>###</a>', '<a>###</a>'),
(36, 'Harrison', 'Dean', 'iaculis@necenim.org', 'Zahir', 'Duis', 'Deleted', '<a>###</a>', '<a>###</a>'),
(37, 'Octavius', 'White', 'nunc@vulputatenisisem.org', 'Ali', 'convallis,', 'Deleted', '<a>###</a>', '<a>###</a>'),
(38, 'Preston', 'Morin', 'Nullam@magnisdis.org', 'Kenyon', 'iaculis', 'Active', '<a>###</a>', '<a>###</a>'),
(39, 'Stuart', 'Guerrero', 'risus@adipiscinglobortis.com', 'Ryder', 'Proin', 'Deleted', '<a>###</a>', '<a>###</a>'),
(40, 'Lucas', 'Bowen', 'Aliquam@aliquet.net', 'Omar', 'Nunc', 'Not Active', '<a>###</a>', '<a>###</a>'),
(41, 'Cairo', 'Wilcox', 'mauris@acturpis.edu', 'Malcolm', 'quis,', 'Deleted', '<a>###</a>', '<a>###</a>'),
(42, 'Linus', 'Guerra', 'et@semper.com', 'Zachery', 'mi', 'Not Active', '<a>###</a>', '<a>###</a>'),
(43, 'Jameson', 'Holt', 'tristique@accumsan.com', 'Quinn', 'eu', 'Active', '<a>###</a>', '<a>###</a>'),
(44, 'Orlando', 'Hurley', 'orci@pellentesque.ca', 'Zane', 'diam', 'Active', '<a>###</a>', '<a>###</a>'),
(45, 'Philip', 'Barlow', 'hendrerit@adipiscingMaurismole', 'Orlando', 'amet,', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(46, 'Gabriel', 'Carpenter', 'molestie.pharetra@dictumsapien', 'Nehru', 'ultrices.', 'Active', '<a>###</a>', '<a>###</a>'),
(47, 'Lucas', 'Obrien', 'sagittis@nasceturridiculusmus.', 'Zane', 'vitae', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(48, 'Edan', 'Figueroa', 'purus@lectusrutrumurna.co.uk', 'Dominic', 'non,', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(49, 'Gage', 'Holloway', 'dolor.elit@blanditcongue.com', 'Brenden', 'a,', 'Not Active', '<a>###</a>', '<a>###</a>'),
(50, 'Warren', 'Knox', 'fringilla.cursus@euelitNulla.e', 'Dale', 'gravida', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(51, 'Cedric', 'Love', 'dapibus.gravida.Aliquam@egesta', 'Thor', 'mauris.', 'Deleted', '<a>###</a>', '<a>###</a>'),
(52, 'Timothy', 'Greene', 'Nulla.eget@lectusNullamsuscipi', 'Magee', 'dictum', 'Active', '<a>###</a>', '<a>###</a>'),
(53, 'Tad', 'Mccormick', 'montes.nascetur@lobortisultric', 'Rudyard', 'rhoncus.', 'Not Active', '<a>###</a>', '<a>###</a>'),
(54, 'Acton', 'Maynard', 'quam.a@risusDonec.ca', 'Christian', 'sed', 'Not Active', '<a>###</a>', '<a>###</a>'),
(55, 'Melvin', 'Acosta', 'non@enimnon.org', 'Judah', 'accumsan', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(56, 'Bradley', 'Mitchell', 'Fusce.aliquam.enim@vitaedolorD', 'Dieter', 'erat', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(57, 'Chancellor', 'Noel', 'purus.Maecenas@rutrum.ca', 'Macon', 'ad', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(58, 'Barrett', 'Nunez', 'imperdiet.non@nullamagna.ca', 'Hasad', 'nec', 'Active', '<a>###</a>', '<a>###</a>'),
(59, 'Porter', 'Allison', 'Mauris.non@malesuada.net', 'Hayden', 'molestie', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(60, 'Marvin', 'Serrano', 'ante.iaculis@cubilia.ca', 'Rooney', 'mauris', 'Not Active', '<a>###</a>', '<a>###</a>'),
(61, 'Henry', 'Jefferson', 'sodales.at.velit@eget.com', 'Abbot', 'Morbi', 'Active', '<a>###</a>', '<a>###</a>'),
(62, 'Wing', 'Duncan', 'eget.varius@dictumPhasellusin.', 'Tanner', 'malesuada', 'Not Active', '<a>###</a>', '<a>###</a>'),
(63, 'Keaton', 'Nolan', 'eu.nibh.vulputate@Mauris.com', 'Nolan', 'dolor', 'Not Active', '<a>###</a>', '<a>###</a>'),
(64, 'Charles', 'Duffy', 'ac@parturientmontes.co.uk', 'Gabriel', 'In', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(65, 'Noble', 'Davidson', 'justo.faucibus.lectus@Maurisve', 'Hakeem', 'non', 'Deleted', '<a>###</a>', '<a>###</a>'),
(66, 'Martin', 'Landry', 'feugiat@CuraeDonectincidunt.ed', 'Sylvester', 'pretium', 'Not Active', '<a>###</a>', '<a>###</a>'),
(67, 'Vance', 'Fuller', 'semper@lectus.ca', 'Chadwick', 'facilisis', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(68, 'Nasim', 'Howell', 'risus.a.ultricies@fringilla.co', 'Sawyer', 'magna.', 'Not Active', '<a>###</a>', '<a>###</a>'),
(69, 'Raphael', 'Woods', 'metus.sit.amet@justo.edu', 'Neil', 'volutpat', 'Not Active', '<a>###</a>', '<a>###</a>'),
(70, 'Matthew', 'Lee', 'magna@parturient.edu', 'Burton', 'lorem', 'Not Active', '<a>###</a>', '<a>###</a>'),
(71, 'Elliott', 'Gaines', 'est@turpis.ca', 'Malcolm', 'malesuada', 'Deleted', '<a>###</a>', '<a>###</a>'),
(72, 'Tyrone', 'Herman', 'nec@duinec.net', 'Philip', 'dui.', 'Not Active', '<a>###</a>', '<a>###</a>'),
(73, 'Erasmus', 'Norman', 'imperdiet@non.co.uk', 'Garrison', 'rutrum', 'Deleted', '<a>###</a>', '<a>###</a>'),
(74, 'Wesley', 'Ramos', 'aptent@fermentum.org', 'Ivor', 'nunc,', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(75, 'Arden', 'Rodriquez', 'sagittis@Etiam.com', 'Zane', 'et', 'Not Active', '<a>###</a>', '<a>###</a>'),
(76, 'Tarik', 'Castaneda', 'Ut@interdumCurabiturdictum.co.', 'Paul', 'feugiat.', 'Active', '<a>###</a>', '<a>###</a>'),
(77, 'Reece', 'Merrill', 'felis.Nulla.tempor@Pellentesqu', 'Tate', 'egestas', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(78, 'Ezra', 'Conrad', 'rhoncus.Donec@disparturient.co', 'Martin', 'ligula.', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(79, 'Ryder', 'Stark', 'Nam@Cras.org', 'Devin', 'Nunc', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(80, 'Stephen', 'Lynch', 'primis.in@montes.org', 'Simon', 'egestas', 'Not Active', '<a>###</a>', '<a>###</a>'),
(81, 'Armando', 'Johnson', 'vehicula.et.rutrum@sagittis.ed', 'Bevis', 'est.', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(82, 'Anthony', 'Malone', 'tortor.at@magnaPhasellus.com', 'Kennan', 'enim', 'Not Active', '<a>###</a>', '<a>###</a>'),
(83, 'Tyler', 'Estes', 'tincidunt.tempus@rhoncusid.com', 'Dillon', 'Aenean', 'Not Active', '<a>###</a>', '<a>###</a>'),
(84, 'Murphy', 'Webster', 'Nullam@temporaugueac.ca', 'Philip', 'Nam', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(85, 'Dustin', 'Hall', 'elementum.sem@mollislectus.org', 'Jelani', 'augue', 'Deleted', '<a>###</a>', '<a>###</a>'),
(86, 'Ferdinand', 'Baker', 'facilisis@elementum.ca', 'Fulton', 'eget', 'Deleted', '<a>###</a>', '<a>###</a>'),
(87, 'Knox', 'Rutledge', 'mollis.Phasellus.libero@nibh.c', 'Dexter', 'et,', 'Deleted', '<a>###</a>', '<a>###</a>'),
(88, 'Alec', 'Duncan', 'sapien.gravida@quis.edu', 'Elmo', 'interdum.', 'Active', '<a>###</a>', '<a>###</a>'),
(89, 'Ronan', 'Prince', 'Quisque.ac.libero@Phasellusvit', 'Omar', 'tellus', 'Deleted', '<a>###</a>', '<a>###</a>'),
(90, 'Julian', 'Brown', 'sit@maurisutmi.ca', 'Hop', 'lorem.', 'Not Active', '<a>###</a>', '<a>###</a>'),
(91, 'Kaseem', 'Battle', 'dignissim.pharetra.Nam@magna.c', 'Timon', 'lacinia.', 'Deleted', '<a>###</a>', '<a>###</a>'),
(92, 'Kennedy', 'Ferrell', 'pede.nec.ante@Aliquamnecenim.e', 'Cairo', 'sed,', 'Deleted', '<a>###</a>', '<a>###</a>'),
(93, 'Fritz', 'Mcmillan', 'scelerisque.mollis@egestasDuis', 'Hunter', 'risus', 'Active', '<a>###</a>', '<a>###</a>'),
(94, 'Kaseem', 'Guzman', 'scelerisque.scelerisque@nibhvu', 'Damian', 'ac', 'Un-Deleted', '<a>###</a>', '<a>###</a>'),
(95, 'Graham', 'Osborn', 'Proin.vel@volutpat.org', 'Russell', 'tempus', 'Not Active', '<a>###</a>', '<a>###</a>'),
(96, 'Ahmed', 'Kelley', 'ut@utmiDuis.com', 'Linus', 'tempus', 'Not Active', '<a>###</a>', '<a>###</a>'),
(97, 'Beck', 'Valencia', 'ligula.elit@Aeneanegetmetus.ed', 'Hyatt', 'Phasellus', 'Not Active', '<a>###</a>', '<a>###</a>'),
(98, 'Christopher', 'Hamilton', 'luctus.felis@eutelluseu.co.uk', 'Garrett', 'Sed', 'Not Active', '<a>###</a>', '<a>###</a>'),
(99, 'Garrett', 'Landry', 'ante.iaculis.nec@gravida.ca', 'Emerson', 'orci,', 'Deleted', '<a>###</a>', '<a>###</a>'),
(100, 'Paki', 'Brady', 'id@vitaesemper.edu', 'Yasir', 'rutrum', 'Un-Deleted', '<a>###</a>', '<a>###</a>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
