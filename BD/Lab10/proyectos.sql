BULK INSERT a1206492.a1206492.[Proyectos]
   FROM 'e:\wwwroot\a1206492\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )