select `last_name`, `first_name`, DATE_FORMAT(`birthdate`, '%Y-%m-%d') AS `birthdate`
from db_avatseba.user_card 
where EXTRACT(YEAR FROM `birthdate`) = 1989
order by `last_name` ASC;