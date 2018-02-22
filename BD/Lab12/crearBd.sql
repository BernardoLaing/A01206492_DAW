--Si la tabla exista, eliminarla
--Crear tablas

IF EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Materiales')
DROP TABLE Materiales

CREATE TABLE Materiales
(
	Clave numeric(5) not null,
	Descripcion varchar(50),
	Costo numeric(8,2)
)

IF EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proveedores')
DROP TABLE Proveedores

CREATE TABLE Proveedores
(
	RFC char(13) not null,
	RazonSocial varchar(50)
)

IF EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Proyectos')
DROP TABLE Proyectos

CREATE TABLE Proyectos
(
	Numero numeric(5) not null,
	Denominacion varchar(50)
)

IF EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Entregan')
DROP TABLE Entregan

CREATE TABLE Entregan
(
	Clave numeric(5) not null,
	RFC char(13) not null,
	Numero numeric(5) not null,
	Fecha DateTime not null,
	Cantidad numeric(8,2)
)


--Importar información
BULK INSERT a1206492.a1206492.[Materiales]
FROM 'e:\wwwroot\a1206492\materiales.csv'
WITH
(
	FIELDTERMINATOR = ',',
	ROWTERMINATOR = '\n',
	CODEPAGE = 'ACP', 
	DATAFILETYPE = 'Char'
)

BULK INSERT a1206492.a1206492.[Proveedores]
FROM 'e:\wwwroot\a1206492\proveedores.csv'
WITH 
(
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n',
	CODEPAGE = 'ACP', 
	DATAFILETYPE = 'Char'
)

BULK INSERT a1206492.a1206492.[Proyectos]
FROM 'e:\wwwroot\a1206492\proyectos.csv'
WITH 
(
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n',
	CODEPAGE = 'ACP', 
	DATAFILETYPE = 'Char'
)

SET DATEFORMAT dmy
BULK INSERT a1206492.a1206492.[Entregan]
FROM 'e:\wwwroot\a1206492\entregan.csv'
WITH 
(
    FIELDTERMINATOR = ',',
    ROWTERMINATOR = '\n',
	CODEPAGE = 'ACP', 
	DATAFILETYPE = 'Char'
)

/*
SELECT * FROM Materiales
SELECT * FROM Proveedores
SELECT * FROM Proyectos
SELECT * FROM Entregan
*/

--Ejercicio 2

INSERT INTO	Materiales values(1000, 'xxx', 1000)
SELECT *
FROM Materiales
WHERE Descripcion = 'xxx'

Delete from Materiales where Clave = 1000 and Costo = 1000

ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY(Clave)

INSERT INTO	Materiales values(1000, 'xxx', 1000)

sp_helpconstraint materiales

ALTER TABLE Proyectos add constraint llaveProyectos PRIMARY KEY(Numero)
ALTER TABLE Proveedores add constraint llaveProveedores PRIMARY KEY(RFC)

ALTER TABLE Entregan add constraint llaveEntregan PRIMARY KEY(Clave, RFC, Numero, Fecha)

--Ejercicio 3
SELECT * FROM Materiales
SELECT * FROM Proveedores
SELECT * FROM Proyectos
SELECT * FROM Entregan

INSERT INTO Entregan values(0, 'xxx', 0, '1-jan-02', 0)

DELETE FROM Entregan WHERE Clave = 0

ALTER TABLE Entregan add constraint cfentreganClave FOREIGN KEY (Clave) REFERENCES Materiales(Clave)
ALTER TABLE Entregan add constraint cfentreganRFC FOREIGN KEY (RFC) REFERENCES Proveedores(RFC)
ALTER TABLE Entregan add constraint cfentreganNumero FOREIGN KEY (Numero) REFERENCES Proyectos(Numero)

sp_helpconstraint Entregan

INSERT INTO Entregan values(1000, 'AAAA800101', 5000, GETDATE(), 0)
Select *
FROM Entregan
WHERE Clave = 1000 AND Cantidad = 0

DELETE FROM Entregan WHERE Cantidad = 0

ALTER TABLE Entregan add constraint Cantidad check (Cantidad > 0)

