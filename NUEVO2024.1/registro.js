//CREATE TABLE maspintura (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nombrecompleto VARCHAR(100) NOT NULL,
    NumeroTelefono VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);