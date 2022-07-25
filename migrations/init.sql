CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE role_routes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_id INT NOT NULL,
    route_path VARCHAR(100) NOT NULL,
    CONSTRAINT fk_role_routes_role_id FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

CREATE TABLE user_roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    CONSTRAINT fk_user_roles_user_id FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_user_roles_role_id FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

CREATE TABLE application (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE migrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(100) NOT NULL,
    execute_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE jenis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL
);

CREATE TABLE kategori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL
);

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kategori_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    harga VARCHAR(100) NOT NULL,
    warna VARCHAR(100) NOT NULL,
    stok VARCHAR(100) NOT NULL,
    bunga VARCHAR(100) NOT NULL,
    dp_minimal VARCHAR(100) NOT NULL,
    gambar VARCHAR(100) NOT NULL
);

CREATE TABLE kustomer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    jenis_kelamin VARCHAR(100) NOT NULL,
    no_hp VARCHAR(100) NOT NULL
);

CREATE TABLE pembelian (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kustomer_id INT NOT NULL,
    produk_id INT NOT NULL,
    tipe VARCHAR(100) NOT NULL, 
    status VARCHAR(100) NOT NULL,
    ulasan VARCHAR(100) DEFAULT NULL,
    rating VARCHAR(100) DEFAULT NULL,
    tanggal DATETIME NOT NULL
);

CREATE TABLE pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pembelian_id INT NOT NULL,
    jumlah VARCHAR(100) NOT NULL, 
    status VARCHAR(100) NOT NULL,
    deskripsi VARCHAR(100) DEFAULT NULL,
    tanggal DATETIME NOT NULL
);

CREATE TABLE kredit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pembelian_id INT NOT NULL,
    dp VARCHAR(100) NOT NULL, 
    harga VARCHAR(100) NOT NULL, 
    bunga VARCHAR(100) NOT NULL, 
    tenor VARCHAR(100) NOT NULL, 
    sisa VARCHAR(100) NOT NULL,
    tanggal DATETIME NOT NULL
);

CREATE TABLE poin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kustomer_id INT NOT NULL,
    jumlah VARCHAR(100) NOT NULL,
    deskripsi VARCHAR(100) DEFAULT NULL,
    tanggal DATETIME NOT NULL
);

CREATE TABLE percakapan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kustomer_id INT NOT NULL,
    admin_id INT NOT NULL
);

CREATE TABLE percakapan_pesan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    percakapan_id INT NOT NULL,
    pesan TEXT NOT NULL,
    asal VARCHAR(100) NOT NULL,
    tanggal DATETIME NOT NULL
);
