show databases;
show tables;
use db_teste;
SELECT coluna FROM tabela WHERE condicao ORDER BY nome ASC GROUP BY idade ASC;
CREATE TABLE esp32s3 (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    temperatura INT,
    timestamp DATETIME
);