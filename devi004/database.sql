CREATE DATABASE data_kontak;

USE data_kontak;

CREATE TABLE kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    email VARCHAR(100),
    alamat TEXT
);

INSERT INTO kontak (nama,no_hp,email,alamat) VALUES
('Andi Saputra','081234567890','andi@gmail.com','Surabaya'),
('Budi Santoso','082345678901','budi@gmail.com','Bangkalan'),
('Citra Dewi','083456789012','citra@gmail.com','Sampang'),
('Eko Prasetyo','085678901234','eko@gmail.com','Sumenep');
