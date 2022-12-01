build:
	docker build --pull -t adventofcode2022 .

remove:
	docker rmi adventofcode2022

run:
	docker run --rm -it -v $(PWD):/src adventofcode2022 bash

test:
	docker run --rm -it -v $(PWD):/src adventofcode2022 ./vendor/bin/phpunit tests	

composer-install:
	docker run --rm -it -v $(PWD):/src adventofcode2022 composer install	