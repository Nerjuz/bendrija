make:
	php -d memory_limit=-1 /usr/local/bin/composer install

deploy:
	docker-compose exec php-fpm yarn encore dev --watch

watch:
	docker-compose exec php-fpm yarn encore production