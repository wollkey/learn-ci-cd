up: build install-dependencies consumer-start

stop:
	docker-compose stop

build:
	docker-compose up -d

install-dependencies:
	docker exec cicd_php composer install --no-cache --no-ansi

consumer-start:
	docker exec cicd_php bin/console messenger:consume async
