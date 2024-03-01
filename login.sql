Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

Create table Produtos (
Nome Varchar(50) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
Valor Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
Descricao Varchar(300),
Primary Key (Nome) ,
Primary Key (Valor)ENGINE = MyISAM,
)