SELECT db_avatseba.film.id_genre,
       db_avatseba.genre.name AS `name_genre`,
       db_avatseba.film.id_distrib,
       db_avatseba.distrib.name AS `name_distrib`,
       `title` AS `title_film`
FROM db_avatseba.film
LEFT JOIN db_avatseba.genre
    ON db_avatseba.genre.id_genre = db_avatseba.film.id_genre
LEFT JOIN db_avatseba.distrib
    ON db_avatseba.distrib.id_distrib = db_avatseba.film.id_distrib
WHERE db_avatseba.film.id_genre
    BETWEEN 4
        AND 8;