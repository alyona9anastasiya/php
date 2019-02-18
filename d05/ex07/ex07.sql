select `title`, `summary`
from db_avatseba.film
where `title`
LIKE '%42%'
OR `summary`
LIKE '%42%'
order by `duration` ASC;