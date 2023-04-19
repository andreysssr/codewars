# создание образа
init:
	docker-compose build

# установка зависимостей `composer.json`
composer-install:
	docker-compose run --rm --user 1000:1000 cli-codewars composer install

# запуск теста
test:
	docker-compose run --rm --user 1000:1000 cli-codewars vendor/bin/phpunit app
