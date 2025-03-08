build:
 docker-compose build

run:
 docker-compose up

test:
 docker-compose run phpunit tests.php

 bash:
 docker-compose run brackets bash