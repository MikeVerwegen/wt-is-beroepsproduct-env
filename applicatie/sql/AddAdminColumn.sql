-- Onderstaande code is ook verwerkt in 'movies.sql'
USE [movies]
GO

ALTER TABLE [Customer]
ADD [admin] [bit] NOT NULL DEFAULT 0;

UPDATE [Customer]
SET [admin] = 0;
