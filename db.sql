CREATE TABLE permintaan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  departemen VARCHAR(100),
  jabatan VARCHAR(100),
  spesifikasi TEXT,
  waktu DATETIME
);

CREATE TABLE stok (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tipe VARCHAR(100),
  merk VARCHAR(100),
  serial VARCHAR(100),
  lokasi VARCHAR(100),
  waktu DATETIME
);

CREATE TABLE aset (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  kode VARCHAR(50),
  lokasi VARCHAR(100),
  waktu DATETIME
);

CREATE TABLE serah_terima (
  id INT AUTO_INCREMENT PRIMARY KEY,
  departemen VARCHAR(100),
  tanggal DATE,
  barang VARCHAR(100),
  jumlah INT,
  penyerah VARCHAR(100),
  penerima VARCHAR(100),
  waktu DATETIME
);
