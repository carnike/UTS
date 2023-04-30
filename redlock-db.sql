drop table if exists users;
CREATE TABLE users (
    ID int not null,
    Nama varchar(255),
    Alamat varchar(255),
    Jabatan varchar(255),
    PRIMARY KEY (ID)
);

INSERT INTO users (ID,Nama,Alamat,Jabatan)
VALUES (2, 'Stanley', 'Jl.Alpukat', 'Project Manager');

INSERT INTO users (ID,Nama,Alamat,Jabatan)
VALUES (3, 'Tigor', 'Jl.Apple', 'Human Resources');

INSERT INTO users (ID,Nama,Alamat,Jabatan)
VALUES (4, 'Ben', 'Jl.Mangga', 'Brand Ambasador');

INSERT INTO users (ID,Nama,Alamat,Jabatan)
VALUES (1, 'Bryant', 'Jl.jeruk', 'Analyst');