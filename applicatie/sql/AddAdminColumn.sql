-- Onderstaande code is ook verwerkt in 'movies.sql'
USE [movies]
GO

ALTER TABLE [Person]
ADD [admin] [bit] NOT NULL DEFAULT 0;

UPDATE [Person]
SET [admin] = 0;
