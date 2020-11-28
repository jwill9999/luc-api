start:
	symfony server:start
stop:
	symfony server:stop
tests:
	php ./phpunit
db-up:
	docker-compose up -d
db-down:
	docker-compose down


