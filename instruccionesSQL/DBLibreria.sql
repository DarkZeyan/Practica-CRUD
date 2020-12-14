-- Trabajo hecho por 
-- Jorge Eduardo Escobar Bugarini 5-E

-- Crear DataBase y usarla.
CREATE DATABASE libreria;

USE libreria;
-- Crear tablas

CREATE TABLE Naciones(
	id_nacion int NOT NULL PRIMARY KEY,
	nombre varchar(60),
	nacionalidad varchar(30) NOT NULL UNIQUE
);

CREATE TABLE Autores(
    id_autor int NOT NULL PRIMARY KEY,
	nombre varchar(30),
	apellido varchar(50),
	ciudad varchar(50),
	fechaNacimiento date,
	id_nacion INT NOT NULL,
	nacionalidad varchar(30) NOT NULL,
	FOREIGN KEY (id_nacion) REFERENCES Naciones(id_nacion),
	FOREIGN KEY (nacionalidad) REFERENCES Naciones(nacionalidad)
);

CREATE TABLE Categorias(
	id_categoria INT NOT NULL PRIMARY KEY,
	categoria varchar(20) NOT NULL UNIQUE
);

CREATE TABLE Libros(
	id_libro int NOT NULL PRIMARY KEY,
	isbn varchar(40) NOT NULL UNIQUE,
	nombre varchar(100),
	editorial varchar(100),
	id_autor INT NOT NULL,
	id_categoria INT NOT NULL,
	FOREIGN KEY (id_autor) REFERENCES Autores(id_autor),
	FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria)
);
-- Insercion de datos a cada tabla.
INSERT INTO Naciones(id_nacion, nombre, nacionalidad)
VALUES 
    (1, 'Estados Unidos de America', 'Estadounidense'),
    (2, 'Reino Unido', 'Britanica'),
    (3, 'España', 'Española'),
    (4, 'Chile', 'Chilena'),
    (5, 'Austria', 'Austriaca'),
    (6, 'Irlanda', 'Irlandesa');

 INSERT INTO Autores(id_autor, nombre, apellido, ciudad, fechaNacimiento, id_nacion, nacionalidad)
 VALUES
    (1, 'Stephen Edwin', 'King', 'Portland', '1947-09-21', 1, 'Estadounidense'),
    (2, 'Mike', 'Carey', 'Liverpool', '1959-01-01', 2, 'Britanica'),
    (3, 'Isabel Angelica', 'Allende Llona','Lima', '1942-08-02',  4, 'Chilena'),
    (4, 'Miguel', 'de Cervantes Saavedra', 'Alcala de Henares', '1547-09-29', 3, 'Española'),
    (5, 'Viktor Emil', 'Frankl', 'Viena', '1905-03-26', 5, 'Austriaca'),
    (6, 'John', 'Boyne', 'Dublin', '1971-04-30', 6, 'Irlandesa');

 INSERT INTO Categorias(id_categoria, categoria)
 VALUES
    (1, 'Novela historica'),
    (2, 'Terror'),
    (3, 'Novela gotica'),
    (4, 'Novela de Aventuras'),
    (5, 'Ciencia Ficcion'),
    (6, 'Realismo Magico'),
    (7, 'Psicologia'),
    (8, 'Suspenso'),
    (9, 'Novela contemporanea');

INSERT INTO Libros(id_libro, isbn, nombre, editorial, id_autor, id_categoria)
VALUES
    (1, '978-0670813025','It','Viking Press',1,2),
    (2, '978-0385516488', "El misterio de Salem's Lot",'Doubleday',1,3),
    (3, '978-8498380798', 'El niño con el pijama de rayas', 'Salamandra',6,1),
    (4, '978-8425432026', 'El hombre en busca de sentido', 'Herder', 5,7),
    (5, '978-8493806125', 'Don Quijote de La Mancha', 'Pluton', 4,4),
    (6, '978-8483462034', 'La casa de los espiritus', 'Debolsillo',3,6),
    (7, '978-8445002445', 'Melanie: Una novela de zombis','Minotauro',2,5),
    (8, '978-0671041786', 'La milla verde', 'Pocket', 1,8),
    (9, '978-8497593823', 'Tommyknockers','Viking Press',1,2),
    (10, '978-1444708158', 'La mitad oscura','Hodder & Stoughton', 1,2),
    (11, '978-0385199575', 'The Stand (La danza de la muerte)', 'Doubleday', 1,2),
    (12, '978-1982112394', 'Cementerio de animales', 'Scribner', 1,2),
    (13, '978-6073151184', 'El retrato de Rose Madder', 'Penguin', 1,8),
    (14, '978-8425415401', 'El hombre doliente', 'Herder', 5,7),
    (15, '978-8498389913', 'Las huellas del silencio', 'Salamandra',6,9),
    (16, '978-8498385779', 'El secreto de Gaudlin Hall', 'Salamandra',6,8),
    (17, '978-8498383591', 'El ladron del tiempo', 'Salamandra', 6,5),
    (18, '978-1439148501', 'La cupula', 'Scribner', 1,5),
    (19, '978-6073110037', 'Misery', 'Penguin', 1,2),
    (20, '978-0743211383', 'El cazador de sueños', 'Scribner', 1,5);