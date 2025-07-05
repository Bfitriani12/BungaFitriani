CREATE DATABASE IF NOT EXISTS pembelajaran_huruf_hijaiyah;
USE pembelajaran_huruf_hijaiyah;

-- Tabel Pengguna
CREATE TABLE pengguna (
    P_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(100),
    Password VARCHAR(50)
);

-- Tabel Huruf Hijaiyah
CREATE TABLE huruf_hijaiyah (
    Hh_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    Huruf_1 VARCHAR(10),
    Huruf_2 VARCHAR(35),
    H_text TEXT,
    Tgl_input DATE,
    Deskripsi MEDIUMTEXT
);
