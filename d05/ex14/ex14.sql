select `floor_number` AS `floor`, sum(`nb_seats`) AS `seats`
from db_avatseba.cinema
group by `floor`
order by `seats` DESC;