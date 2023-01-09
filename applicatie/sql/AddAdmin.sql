-- MAAK ALLE GEBRUIKERS MET GEBRUIKERSNAAM 'admin' EEN ADMIN
-- Dit script wordt niet standaard uitgevoerd. 
-- Het script bestaat puur ter ondersteuning voor de demo en eventuele tests.
USE [movies]
GO

UPDATE [Customer]
SET [admin] = 1
WHERE [user_name] = 'admin'
