-- Seeder for bookwise-db
-- Created: 2025-10-22
-- Description: Inserts sample data into users and books tables

USE `bookwise-db`;

-- Limpando dados antigos
DELETE FROM `books`;
DELETE FROM `users`;

-- -----------------------------------------------------
-- Inserindo usuários
-- -----------------------------------------------------
INSERT INTO `users` (`name`, `email`) VALUES
('Matheus Silva', 'matheuspereiradasilv@example.com'),
('Isabella Caramigo', 'isas.caramigo@example.com'),
('Edmar Silva', 'edmar.silva@example.com'),
('Simone Silva', 'simone.silva@example.com'),
('Gideão Estevão', 'gida36000@example.com');

-- -----------------------------------------------------
-- Inserindo livros
-- -----------------------------------------------------
INSERT INTO `books` (`title`, `author`, `description`, `release_year`, `user_id`) VALUES
('O Senhor dos Anéis', 'J. R. R. Tolkien', 'Uma épica jornada pela Terra Média em busca do Um Anel.', 1954, 1),
('Dom Casmurro', 'Machado de Assis', 'Um clássico da literatura brasileira que explora ciúme e dúvida.', 1899, 2),
('1984', 'George Orwell', 'Uma distopia sobre vigilância, totalitarismo e liberdade.', 1949, 3),
('A Revolução dos Bichos', 'George Orwell', 'Uma fábula política sobre o poder e a corrupção.', 1945, 3),
('Orgulho e Preconceito', 'Jane Austen', 'Romance que analisa costumes sociais e relações humanas.', 1813, 4),
('O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Uma fábula poética sobre amizade e amor.', 1943, 5),
('Harry Potter e a Pedra Filosofal', 'J. K. Rowling', 'A primeira aventura do jovem bruxo Harry Potter.', 1997, 1),
('Capitães da Areia', 'Jorge Amado', 'A história de crianças de rua em Salvador.', 1937, 2),
('A Culpa é das Estrelas', 'John Green', 'Um romance emocionante sobre amor e superação.', 2012, 4),
('O Código Da Vinci', 'Dan Brown', 'Um thriller envolvendo mistérios religiosos e simbologia.', 2003, 5);
