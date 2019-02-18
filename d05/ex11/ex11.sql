SELECT UPPER(`last_name`) as `NAME`, `first_name`, db_avatseba.subscription.price
FROM db_avatseba.user_card
INNER JOIN db_avatseba.member
		ON db_avatseba.member.id_user_card = db_avatseba.user_card.id_user
INNER JOIN	db_avatseba.subscription
		ON db_avatseba.subscription.id_sub = db_avatseba.member.id_sub
WHERE db_avatseba.subscription.price > 42
ORDER BY db_avatseba.user_card.first_name ASC, db_avatseba.user_card.last_name ASC;