Use justeat;
CREATE TABLE `users` (

`id` INT(11) NOT NULL AUTO_INCREMENT,
`username` VARCHAR(50) NULL DEFAULT NULL,
`email` VARCHAR(50) NULL DEFAULT '0',
`password` VARCHAR(50) NULL DEFAULT '0',
`acctype` VARCHAR(50) NULL DEFAULT '0',
`address` VARCHAR(50) NULL DEFAULT '0',

PRIMARY KEY (`id`)
)

COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `acctype`, `address`) VALUES (NULL, 'kyle', 'kyle.goslin@tudublin.ie', '12345678', 'customer', '0');