#!/usr/bin/env bash

composer install -n
bin/console doctrine:database:create --if-not-exists
bin/console doctrine:migration:migrate --no-interaction

exec "$@"
