select COUNT(*) AS `nb_short-films`
FROM db_avatseba.film 
WHERE `duration` <= 42;