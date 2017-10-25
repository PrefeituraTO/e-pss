CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NULL,
  `mae` VARCHAR(60) NULL,
  `pai` VARCHAR(60) NULL,
  `cpf` VARCHAR(14) NULL,
  `rg` VARCHAR(45) NULL,
  `datanasc` VARCHAR(45) NULL,
  `sexo` ENUM('F', 'M') NULL,
  `rua` VARCHAR(60) NULL,
  `numero` VARCHAR(60) NULL,
  `complemento` VARCHAR(60) NULL,
  `bairro` VARCHAR(60) NULL,
  `cidade` VARCHAR(60) NULL,
  `uf` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `token` VARCHAR(45) NULL,
  `time` TIMESTAMP NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `cargo` VARCHAR(45) NULL,
  `docs` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `inscricao` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `datahora` TIMESTAMP NULL,
  `idPessoa` INT(10) NULL,
  `idCargo` INT(10) NULL,
  `timestamp` TIMESTAMP NULL DEFAULT now(),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `config` (
  `quantAtendentes` INT NOT NULL,
  `tempoAtendimento` INT NOT NULL,
  `quantAtendendimentos` INT NOT NULL,
  `dia` INT NOT NULL,
  `hora` VARCHAR(3) NOT NULL,
  `minuto` VARCHAR(3) NOT NULL,
  `quant` INT NOT NULL
)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `dia` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
