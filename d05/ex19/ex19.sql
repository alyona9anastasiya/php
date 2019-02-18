SELECT DATEDIFF(MAX(`date`), MIN(`date`)) AS 'uptime'
	FROM db_avatseba.member_history;