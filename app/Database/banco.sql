CREATE DATABASE casamento;

CREATE TABLE IF NOT EXISTS `convidados_confirmados` (
  `cc_id` INT NOT NULL AUTO_INCREMENT,
  `cc_nome` VARCHAR(255) NOT NULL,
PRIMARY KEY (`cc_id`) );