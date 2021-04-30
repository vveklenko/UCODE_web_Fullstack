USE ucode_web;
SELECT heroes.name, teams.name 
FROM heroes 
LEFT JOIN teams ON heroes.id = teams.hero_id;
SELECT heroes.name, powers.name 
FROM heroes 
RIGHT JOIN powers ON heroes.id = powers.hero_id;
SELECT heroes.name, powers.name, teams.name 
FROM heroes 
INNER JOIN teams ON heroes.id = teams.hero_id
INNER JOIN powers ON heroes.id = powers.hero_id;