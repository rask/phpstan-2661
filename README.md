# rask/phpstan-2661

A bug reproduction repository for phpstan/phpstan#2661.

Run

    $ composer install
    $ phive install
    $ composer test
    $ composer phpstan
    
The PHPStan configuration should load a file properly from the `tools/phpunit.phar` package, but does not.

By default Phive installs PHPUnit as `phpunit`, but I've configured to install it as `phpunit.phar` to make it instantly browsable in PHPStorm for instance.
