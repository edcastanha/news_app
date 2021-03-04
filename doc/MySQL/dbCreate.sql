CREATE DATABASE api_news CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE USER 'api_user'@'localhost' identified by 'teste1234';

GRANT ALL on api_example.* to 'api_user'@'localhost';

USE api_news;
