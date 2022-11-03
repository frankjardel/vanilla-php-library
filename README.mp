# Composer


## In development

composer install

or

composer update


## Production

composer install --no-dev


# After changes composer.json, run:

composer dump-autoload

or

composer dumpautoload


## phpunit

php vendor/bin/phpunit --version
php vendor/bin/phpunit tests/TestSearch.php


## phpcs

php vendor/bin/phpcs --standard=PSR12 src/

## php phan

php vendor/bin/phan --help
php vendor/bin/phan --allow-polyfill-parser src/Search.php

