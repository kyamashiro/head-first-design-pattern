start: docker-compose.yml
	docker-compose up -d

build: docker-compose.yml
	docker-compose -f "docker-compose.yml" up -d --build

stop:
	docker-compose stop

remove:
	docker-compose stop
	docker-compose rm

bash:
	docker exec -it php-apache bash