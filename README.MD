Este é um projeto simples que permite gerenciar cidades e estados usando as operações do CRUD. Utilizando PHP, MySql, e bootStrap para a estilização. 

utilizei PHP, MySql, um pouco de HTML/CSS com Bootstrap, Xampp para abrir servidor e VSCode para escrever o código.

aqui está o script para a criação do banco de dados

CREATE DATABASE crud;
USE crud;
CREATE TABLE estado (
    IDstate INT AUTO_INCREMENT PRIMARY KEY,
    stateName VARCHAR(100) NOT NULL
);
CREATE TABLE cidade (
    IDcity INT AUTO_INCREMENT PRIMARY KEY,
    cityName VARCHAR(100) NOT NULL,
    IDstate INT,
    FOREIGN KEY (IDstate) REFERENCES estado(IDstate) ON DELETE CASCADE
);