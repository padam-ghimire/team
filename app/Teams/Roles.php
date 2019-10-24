<?php

namespace App\Teams;

class Roles{

    public static $roleWhenCreating='team_admin';
    public static $roles=[
        'team_admin' =>[
            'name' =>'Admin',
            'permissions' =>[
                'view team dashbaord',
                'manage team subscription',
                'delete team',
                'delete users',
                'change user roles',
                'add user'
            ]
        ],
        'team_member' =>[
            'name' =>'Member',
            'permissions' =>[
                'view team dashbaord',
            ]
        ],
    ];
}