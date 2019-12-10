# rask/phpstan-2661

(Originally this was to reproduce a PHAR not being loadable in PHPStan via `autoload_files`, but has been resolved.)

Run

    $ composer install
    $ phive install
    $ composer test
    $ composer phpstan

What should happen: PHPUnit files are loaded form PHAR properly, and using non-Composer PHPStan binary should load PHPUnit extension properly, and then display a static analysis error regarding PHPUnit's `assertSame(true, ...)`.

By default Phive installs PHPUnit as `tools/phpunit`, but I've configured to install it as `tools/phpunit.phar` to make it instantly browsable in PHPStorm for instance.
