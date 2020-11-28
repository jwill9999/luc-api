start:
	symfony server:start
tests:
	php ./phpunit
db-up:
	docker-compose up -d
db-down:
	docker-compose down


