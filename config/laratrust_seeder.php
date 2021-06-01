<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'doctor' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'regclerk' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'billclerk' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'labtech' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'radtech' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'pharmasist' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
