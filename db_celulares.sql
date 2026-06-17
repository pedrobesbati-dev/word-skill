CREATE DATABASE celulares;

USE celulares;

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    celular VARCHAR(50) NOT NULL,
    comentario VARCHAR(200) NOT NULL,
    reacao VARCHAR(20) NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM feedback;

CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    senha VARCHAR(100)
);

INSERT INTO usuarios (nome, senha) VALUES ('pedro', 'pedro'); 