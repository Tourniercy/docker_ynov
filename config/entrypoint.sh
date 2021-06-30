#!/usr/bin/env bash
composer install -n
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migration:migrate --no-interaction
php bin/console doctrine:fixtures:load --env=dev --no-interaction
exec "$@"
