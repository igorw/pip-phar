<?php

set_include_path(get_include_path().PATH_SEPARATOR.__DIR__.'/vendor/pip');

require_once 'pip/http.php';
require_once 'pip/logging.php';
require_once 'pip/symfony2.php';

$logger = pip\logging\getLogger('pip');
$logger->level = pip\logging\DEBUG;

$http = new pip\servers\Http(array('iface' => 'localhost', 'port' => 5000));

require_once 'pip/middleware/staticfiles.php';
$http->apps[] = array('StaticFiles', getcwd().'/public');

$appFile = getcwd().'/app.php';
if (!file_exists($appFile)) {
    echo "Please place pip.phar in a silex app directory containing an app.php.\n";
    exit(1);
}
$http->start(new HttpKernelPipApplication(require $appFile));
