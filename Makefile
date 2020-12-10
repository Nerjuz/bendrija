make:
	php -d memory_limit=-1 /usr/local/bin/composer install

server: make
	php -d memory_limit=-1 bin/console doctrine:migrations:migrate -n
	

watch:
	docker-compose exec php-fpm yarn encore dev --watch

deploy:
	docker-compose exec php-fpm yarn encore production

migration:
	docker-compose exec php-fpm bin/console doctrine:migrations:diff

migrate:
	docker-compose exec php-fpm bin/console doctrine:migrations:migrate -n