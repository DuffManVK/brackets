build:
 docker-compose build

up:
 docker-compose up

test:
 docker-compose run brackets phpunit tests.php

bash:
 docker-compose run brackets bash