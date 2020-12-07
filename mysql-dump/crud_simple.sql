use minhafazenda;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `fazenda` (
  `fazenda_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `majors` varchar(40) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `endereco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `fazenda` (`fazenda_id`, `name`, `majors`, `gender`, `endereco`) VALUES
('1111', 'carlos', 'Civil', 'Male', 'Yogyakarta'),
('2222', 'joao', 'Architect', 'Male', 'Yogyakarta'),
('3333', 'Andi', 'Informatics', 'Male', 'Yogyakarta');


ALTER TABLE `fazenda`
  ADD PRIMARY KEY (`fazenda_id`);
COMMIT;