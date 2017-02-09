USE comp1006_a1_dj;

CREATE TABLE games (
gameId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50) NOT NULL,
year INT,
publisher VARCHAR(50),
system VARCHAR(20)
);

DESC games;
ALTER TABLE games AUTO_INCREMENT = 1000;
SELECT * FROM games;

INSERT INTO games(system) 
VALUES ('NES');
INSERT INTO games(system) 
VALUES ('SNES');
INSERT INTO games(system) 
VALUES ('N64');
INSERT INTO games(system) 
VALUES ('GCN');
INSERT INTO games(system) 
VALUES ('WII');
INSERT INTO games(system) 
VALUES ('WIIU');
INSERT INTO games(system) 
VALUES ('PS1');
INSERT INTO games(system) 
VALUES ('PS2');
INSERT INTO games(system) 
VALUES ('PS3');
INSERT INTO games(system) 
VALUES ('PS4');
INSERT INTO games(system) 
VALUES ('XBOX');
INSERT INTO games(system) 
VALUES ('XBOX360');
INSERT INTO games(system) 
VALUES ('XBOXONE');