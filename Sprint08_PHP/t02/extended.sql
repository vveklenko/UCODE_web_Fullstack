USE ucode_web;
CREATE TABLE IF NOT EXISTS powers
(
    id          INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    hero_id     INT,
    name        VARCHAR(255) NOT NULL,
    points      INT NOT NULL,
    type        ENUM('attack', 'defense') NOT NULL
);
CREATE TABLE IF NOT EXISTS races
(
    id          INT NOT NULL,
    hero_id     INT NOT NULL,
    name        VARCHAR(255) NOT NULL,
    FOREIGN KEY (hero_id) REFERENCES heroes (id) ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS teams
(
    id          INT NOT NULL,
    hero_id     INT NOT NULL,
    name        VARCHAR(255) NOT NULL,
    FOREIGN KEY (hero_id) REFERENCES heroes (id) ON DELETE CASCADE
);
INSERT IGNORE INTO powers(hero_id, name, points, type) VALUES
    (1, 'bloody fist', 110, 'attack'),
    (1, 'iron shield', 200, 'defense'),
    (2, 'bloody fist', 300, 'attack'),
    (2, 'iron shield', 50, 'defense'),
    (3, 'bloody fist', 130, 'attack'),
    (3, 'iron shield', 30, 'defense'),
    (4, 'bloody fist', 200, 'attack'),
    (4, 'iron shield', 70, 'defense'),
    (5, 'bloody fist', 250, 'attack'),
    (5, 'iron shield', 150, 'defense'),
    (6, 'bloody fist', 320, 'attack'),
    (6, 'iron shield', 145, 'defense');
INSERT IGNORE INTO races(id, hero_id, name) VALUES
    (1, 1, 'Human'),
    (2, 2, "Kree"),
    (2, 10, 'Kree');
INSERT IGNORE INTO teams(id, hero_id, name) VALUES
    (1, 1, 'Avengers'),
    (2, 2, 'Hydra'),
    (1, 3, 'Avengers'),
    (2, 1, 'Hydra'),
    (1, 4, 'Avengers'),
    (2, 5, 'Hydra'),
    (1, 6, 'Avengers'),
    (2, 7, 'Hydra'), 
    (2, 3, 'Hydra');
SELECT * FROM powers;
SELECT * FROM races;
SELECT * FROM teams;