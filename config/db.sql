create database buscador_poo;
use buscador_poo;

create table coches(
    id int auto_increment primary key,
    marca varchar(50),
    modelo varchar(20), 
    anio int
);

create table motos(
    id int auto_increment primary key,
    marca varchar(50),
    modelo varchar(20), 
    anio int
);


INSERT INTO coches (marca, modelo, anio) VALUES
('Toyota', 'Corolla', 2020),
('Honda', 'Civic', 2019),
('Ford', 'Mustang', 2021),
('Chevrolet', 'Camaro', 2018),
('Volkswagen', 'Golf', 2017);

INSERT INTO motos (marca, modelo, anio) VALUES
('Yamaha', 'YZF-R6', 2020),
('Honda', 'CBR1000RR', 2019),
('Kawasaki', 'Ninja ZX-10R', 2021),
('Suzuki', 'GSX-R750', 2018),
('Ducati', 'Panigale V4', 2017);



