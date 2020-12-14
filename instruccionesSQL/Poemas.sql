CREATE DATABASE poemas;
USE DATABASE poemas;

CREATE TABLE Poetas(
    poet_code INT NOT NULL,
    first_name varchar(30),
    surname varchar(30),
    address varchar(100), 
    postcode varchar(20),
    telephone_number varchar(30),
    PRIMARY KEY(poet_code)
);
CREATE TABLE Poemas(
    poem_code INT NOT NULL,
    poem_title varchar(50),
    poem_contents text,
    poet_code INT NOT NULL,
    PRIMARY KEY(poem_code),
    FOREIGN KEY(poet_code) REFERENCES Poetas(poet_code)
);
CREATE TABLE Publicaciones(
    publication_code INT not null,
    title varchar(100),
    price DOUBLE(5,2),
    PRIMARY KEY(publication_code)
);
CREATE TABLE Clientes(
    customer_code INT NOT NULL,
    first_name varchar(30),
    surname varchar(40),
    address varchar(100),
    postcode varchar(20),
    telephone_number varchar(30),
    PRIMARY KEY(customer_code)
);
CREATE TABLE Ventas(
    sale_code INT NOT NULL,
    date date,
    amount DOUBLE(10,2),
    customer_code INT NOT NULL,
    PRIMARY KEY (sale_code),
    FOREIGN KEY (customer_code) REFERENCES Clientes(customer_code)
);
CREATE TABLE Poemas_Publicaciones(
    poem_code INT not null,
    publication_code INT not null,
    PRIMARY KEY(poem_code, publication_code),
    FOREIGN KEY(poem_code) REFERENCES Poemas(poem_code),
    FOREIGN KEY(publication_code) REFERENCES Publicaciones(publication_code)
);
CREATE TABLE Ventas_Publicaciones(
    sale_code INT not null,
    publication_code INT not null,
    PRIMARY KEY(sale_code,publication_code),
    FOREIGN KEY(sale_code) REFERENCES Ventas(sale_code),
    FOREIGN KEY(publication_code) REFERENCES Publicaciones(publication_code)
);

INSERT INTO Poetas(poet_code, first_name, surname, address, postcode,telephone_number)
VALUES
	(1,'Octavio','Paz','casita en puntaoriente 1','31450','5548537510'),
    (2,'Julio','Cortazar','noselaverdad casa fea 3','31386','5548537512'),
    (3,'Mario','Benedetti','casa en el cerro 2','34759','5548537515'),
    (4,'Gloria','Fuentes','casa en tepito lagunilla 28','32171','5548537518'),
    (5,'Antonio','Machado','Casa en iztapalapa','34734','5548537521');

INSERT INTO Poemas(poem_code,poem_title,poem_contents,poet_code)
VALUES 
    (1,'Aquí','Mis pasos en esta calle,Resuenan,En otra calle,Donde,Oigo mis pasos,Pasar en esta calle,Donde,Sólo es real la niebla.',1),
    (2,'A un general','Región de manos sucias de pinceles sin pelo,de niños boca abajo de cepillos de dientes,Zona donde la rata se ennoblece,y hay banderas innúmeras y cantan himnos,y alguien te prende, hijo de CENSORED ,una medalla sobre el pecho,Y te pudres lo mismo.',2),
    (3,'Síndrome','Todavía tengo casi todos mis dientes, casi todos mis cabellos y poquísimas canas, puedo hacer y deshacer el amor, trepar una escalera de dos en dos, y correr cuarenta metros detrás del ómnibus, o sea que no debería sentirme viejo, pero el grave problema es que antes, no me fijaba en estos detalles., 5. En las noches claras (Glor',3),
    (4,'En las noches claras','En las noches claras, resuelvo el problema de la soledad del ser. Invito a la luna y con mi sombra somos tres.',4),
    (5,'Deletreos de armonía','Deletreos de armonía, que ensaya inexperta mano., Hastío. Cacofonía, del sempiterno piano, que yo de niño escuchaba, soñando... no sé con qué,, con algo que no llegaba,, todo lo que ya se fue.',5);

INSERT INTO Publicaciones(publication_code,title,price)
VALUES
    (1,'Poemas de Octavio Paz', 569.99),
    (2,'Poemas de Julio Cortazar',399.99),
    (3,'Poemas de Mario Benedetti',199.99),
    (4,'Poemas de Gloria Fuentes',169.99),
    (5,'Poemas de Antonio Machado',129.99);

INSERT INTO Clientes(customer_code,first_name,surname,address,postcode,telephone_number)
    VALUES
    (1,'Dieguito','Maradona','Casita fea en argentina 12','39845','4785910241'),
    (2,'Peter','Parker','New York Manhattan 1234','38474','4785910243'),
    (3,'Moncholo','Rodriguez','Callesita en Riveras 13','34567','4785910246'),
    (4,'Ezio','Auditore','Florencia Calle nosecual 14','34586','4785910247'),
    (5,'Leon','Kennedy','Raccon City 334','34759','4785910249');
INSERT INTO Ventas(sale_code,date,amount,customer_code)
    VALUES
    (1,'2020-11-01',579.99,1),
    (2,'2019-10-15',699.99,3),
    (3,'2016-03-24',4599.99,4),
    (4,'2018-02-25',799.99,5),
    (5,'2017-06-06',999.99,2);
INSERT INTO Poemas_Publicaciones(poem_code,publication_code)
    VALUES
    (1,1),
    (2,2),
    (3,3),
    (4,4),
    (5,5);
INSERT INTO Ventas_Publicaciones(sale_code,publication_code)
    VALUES
    (1,4),
    (2,5),
    (3,1),
    (4,2),
    (5,3);

/* 1 */
SELECT title,price, SUM(amount)
FROM Ventas_Publicaciones,Ventas,Publicaciones
WHERE
Publicaciones.publication_code = Ventas_Publicaciones.publication_code
AND Ventas.sale_code = Ventas_Publicaciones.sale_code
GROUP BY title,price

/* 2 */
SELECT title, COUNT(poet_code)
FROM Poemas, Poemas_Publicaciones, Publicaciones
WHERE 
Publicaciones.publication_code=Poemas_Publicaciones.publication_code
AND
Poemas.poem_code=Poemas_Publicaciones.poem_code
GROUP BY title

/* 3 */
SELECT title, COUNT(poem_title)
FROM Poemas, Poemas_Publicaciones, Publicaciones
WHERE
Publicaciones.publication_code=Poemas_Publicaciones.publication_code
AND
Poemas.poem_code=Poemas_Publicaciones.poem_code
GROUP BY title

/* 4 */
SELECT sale_code,DATE_FORMAT(date,'%m-%Y'), SUM(AMOUNT)
FROM Clientes,Ventas
WHERE
Clientes.customer_code=Ventas.customer_code
GROUP BY sale_code,date