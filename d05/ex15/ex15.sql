select reverse(substring(`phone_number`, 2)) as `rebmunenohp`
from db_avatseba.distrib
where `phone_number` LIKE '05%';