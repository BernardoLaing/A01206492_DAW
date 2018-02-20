BULK INSERT a1206492.a1206492.[Proveedores]
   FROM 'e:\wwwroot\a1206492\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )