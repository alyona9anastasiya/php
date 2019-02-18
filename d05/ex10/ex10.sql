SELECT `title`, `summary`, `prod_year` AS `Title`, `Summary`
FROM db_avatseba.film
INNER JOIN db_avatseba.genre
ON db_avatseba.film.id_genre = db_avatseba.genre.id_genre
WHERE db_avatseba.genre.name = 'erotic'
ORDER BY `prod_year` DESC;