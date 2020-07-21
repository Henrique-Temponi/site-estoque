#!/usr/bin/env sh

php artisan key:generate

composer install

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
