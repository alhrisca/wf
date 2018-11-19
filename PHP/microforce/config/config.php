<?php
use Symfony\Component\Templating\PhpEngine;

return [
    'template_engine' => PhpEngine::class,
    'template_location' => realpath(__DIR__ . '/../views'),
    'DB'=>array(
                'dbname'=>'microforce',
                'host'=>'127.0.0.1',
                'user'=>'root',
                'password'=>null
    ),
];