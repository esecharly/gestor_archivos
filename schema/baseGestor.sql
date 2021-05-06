CREATE SCHEMA `gestor` DEFAULT CHARACTER SET utf8mb4 ;

CREATE TABLE `gestor`.`t_usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(2555) NULL,
  `fechaNacimiento` DATE NULL,
  `email` VARCHAR(245) NULL,
  `usuario` VARCHAR(245) NULL,
  `password` LONGTEXT NULL,
  `insert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_usuario`));
