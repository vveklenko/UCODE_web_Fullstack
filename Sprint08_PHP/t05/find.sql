USE ucode_web;
SELECT  heroes.name
FROM heroes
JOIN teams
ON heroes.id = teams.hero_id
WHERE heroes.name LIKE '%a%'
AND heroes.race != 'human'
AND (heroes.class_role != 'dps')
GROUP BY  heroes.id
HAVING COUNT(teams.hero_id) > 1
ORDER BY heroes.id DESC
LIMIT 1;