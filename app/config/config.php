<?php

return new \Phalcon\Config(array(
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'formsDir'       => __DIR__ . '/../../app/forms/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/',
        'publicUrl'      => 'vokuro.phalconphp.com',
        'cryptSalt'      => '=)(/&%$·"QWEYUIOP|@#~½½¬¬{[]][]}{'
    ),
    'mail' => array(
        'fromName' => 'Study',
        'fromEmail' => 'info@web.com',
        'smtp' => array(
            'server' => 'smtp.gmail.com',
            'port' => 587,
            'security' => 'tls',
            'username' => '',
            'password' => '',
        )
    )
));
