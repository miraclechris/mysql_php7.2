<?php
require '/var/www/html/web/Mustache/Autoloader.php';
Mustache_Autoloader::register();
$test = "Chris";
$m = new Mustache_Engine;
echo $m->render('<h1>Hello, {{planet}}!</h1>', array('planet' => 'World')); // "Hello, World!"

    $setup = <<<_TPL
    <h2>Welcome to my template</h2>
    <p>Yu are currently speaking with $test</p>
_TPL;
    echo $setup;
