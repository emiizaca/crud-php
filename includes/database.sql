CREATE DATABASE `clientes` DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci; 
CREATE TABLE `clientes`.`cliente` ( `id` int(11) NOT NULL, `nombre` varchar(50) NOT NULL, `apellido` varchar(50) NOT NULL, `email` varchar(60) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 
ALTER TABLE `clientes`.`cliente` ADD PRIMARY KEY (`id`); 
ALTER TABLE `clientes`.`cliente` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;