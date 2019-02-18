INSERT INTO db_avatseba.ft_table (`login`,`group`, `creation_date`)
SELECT last_name,'other', birthdate
FROM db_avatseba.user_card
WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
order by last_name ASC LIMIT 10;