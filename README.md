# pip to phar compiler

Compiles pip [1] into a phar archive that can serve Silex apps.

## Usage

* Drop the compiled `pip.phar` into your project directory
* Make sure you have an app.php which returns a HttpKernel
* Run your server `php pip.phar`
* Point your browser to `localhost:5000`

## Compile

    git submodule update --init
    ./compile

[1] https://github.com/luciferous/pip
