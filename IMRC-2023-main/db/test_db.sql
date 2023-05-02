

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `users` (`id`, `role`, `user_name`, `password`, `name`, `file`) VALUES
(5, 'Presentor', 'markchester', '202cb962ac59075b964b07152d234b70', 'Mark Chester Pondang', '');



ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
