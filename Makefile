# Makefile
fixture:
	php bin/console doctrine:fixture:load
	rm -rf var/cache/*

dbm-clear:
	rm bin/DoctrineMigrations/*

dbm-diff:
	php bin/console doctrine:migrations:diff

dbm-migrate:
	php bin/console doctrine:migrations:migrate

db:
	rm app/DoctrineMigrations/*
	php bin/console doctrine:migrations:diff
	php bin/console doctrine:migrations:migrate
	rm -rf var/cache/*

clear-cache:
	rm -rf var/cache/*

pull:
	git pull --rebase=preserve
	rm -rf var/cache/*

db-init:
	php bin/console doctrine:database:drop --force
	php bin/console doctrine:database:create
	rm var/DoctrineMigrations/*
	php bin/console doctrine:migrations:diff
	php bin/console doctrine:migrations:migrate
	rm -rf var/cache/*git st