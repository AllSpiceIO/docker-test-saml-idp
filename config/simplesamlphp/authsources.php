<?php

$config = [

    'admin' => [
        'core:AdminPassword',
    ],

    'example-userpass' => [
        'exampleauth:UserPass',

        'user1:user1pass' => [
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
        ],
    ],
];
