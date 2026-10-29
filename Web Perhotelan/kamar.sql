CREATE TABLE kamar(
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipe_kamar VARCHAR (50) NOT NULL,
    slug VARCHAR (50) NOT NULL,
    harga INT,
    jumlah_kamar INT,
    kamar_terpakai INT
);

INSERT INTO kamar (tipe_kamar,slug,harga,jumlah_kamar,kamar_terpakai) VALUES
('reguler','reguler','150000','500','0'),
('vip','vip','300000','300','0'),
('vvip','vvip','500000','100','0'),
('paket keluarga','paket keluarga','450000','350','0'),
('double bad','double bad','375000','250','0');

SELECT*FROM kamar

DROP TABLE kam