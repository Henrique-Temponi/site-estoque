#!/usr/bin/env sh

composer install

php artisan key:generate

function tryToMigrate() {
    timeout=5
    php artisan migrate

    if [ $? -ne 0 ]; then
        echo "Migration failed. Trying again in $timeout seconds..."
        sleep $timeout
        tryToMigrate
    fi
}

tryToMigrate

php artisan serve --host=0.0.0.0
