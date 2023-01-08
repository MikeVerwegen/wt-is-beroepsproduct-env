-- Onderstaande code is ook verwerkt in 'movies.sql'
USE [movies]
GO

ALTER TABLE [Customer]
ADD CONSTRAINT df_SubscriptionStart
DEFAULT GETDATE() FOR [subscription_start];
