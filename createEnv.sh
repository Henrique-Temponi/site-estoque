#!/usr/bin/env sh

createEnv() {
    cat .env.example | sed \
        -e 's/DB_HOST=.*/DB_HOST=db/g' \
        -e 's/DB_DATABASE=.*/DB_DATABASE=site-estoque/g' \
        -e 's/DB_PASSWORD=.*/DB_PASSWORD=site-estoque-pass/g' > .env
}

createEnv
