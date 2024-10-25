CREATE DATABASE bd_atv_02;
USE bd_atv_02;

CREATE TABLE tb_cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    sexo ENUM('Masculino', 'Feminino', 'Prefiro não dizer') NOT NULL,
    cargo ENUM('Analista de TI', 'Gestor de TI', 'Desenvolvedor Frontend', 'Desenvolvedor Backend', 'Desenvolvedor FullStack') NOT NULL
);

SELECT * FROM tb_cadastro;