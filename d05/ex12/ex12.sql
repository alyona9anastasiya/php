SELECT `last_name`, `first_name`
FROM db_avatseba.user_card
WHERE `last_name` LIKE "%-%"
OR `first_name` LIKE "%-%"
ORDER BY db_avatseba.user_card.last_name ASC, db_avatseba.user_card.first_name ASC;