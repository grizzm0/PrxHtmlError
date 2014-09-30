<?php
return [
    'view_manager' => [
        'not_found_template' => 'error/404',
        'exception_template' => 'error/500',
        'template_map' => [
            'error/404' => __DIR__ .'/../view/error/404.phtml',
            'error/500' => __DIR__ .'/../view/error/500.phtml',

            'error/partial/controller' => __DIR__ .'/../view/error/partial/controller.phtml',
            'error/partial/exception'  => __DIR__ .'/../view/error/partial/exception.phtml',
            'error/partial/message'    => __DIR__ .'/../view/error/partial/message.phtml',

        ],
    ],
];
