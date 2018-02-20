SET DATEFORMAT dmy
BULK INSERT a1206492.a1206492.[Entregan]
   FROM 'e:\wwwroot\a1206492\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )