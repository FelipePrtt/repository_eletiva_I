CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel ENUM('adm', 'colab') NOT NULL
);
create table plano(
    id_plano INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);

create table matricula(
    id_matricula INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    id_professor INT NOT NULL,
    id_plano INT NOT NULL,
    FOREIGN KEY (id_aluno) REFERENCES usuario(id),
    FOREIGN KEY (id_professor) REFERENCES usuario(id),
    FOREIGN KEY (id_plano) REFERENCES plano(id_plano)
);

