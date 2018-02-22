BULK INSERT a1206492.a1206492.[Materiales]
FROM 'e:\wwwroot\a1206492\materiales.csv'
WITH
(
	CODEPAGE = 'ACP',
	FIELDTERMINATOR = ',',
	ROWTERMINATOR = '\n'
)

SELECT * FROM Materiales