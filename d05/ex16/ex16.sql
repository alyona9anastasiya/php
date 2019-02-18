select count(*) AS `movies`
from db_avatseba.member_history
where (`date` >= '2006-10-30'
AND `date` <= '2007-07-27') 
OR (MONTH(`date`) = '12'
AND DAY(`date`) = '24');