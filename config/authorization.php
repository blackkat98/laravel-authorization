<?php

return [
    'role_table' => 'roles',
    'permission_table' => 'permissions',
    'has_roles_pivot_table' => 'role_assignables',
    'has_permissions_pivot_table' => 'permission_assignables',
    'role_key' => 'role_id',
    'permission_key' => 'permission_id',
    'has_roles_pivot_key' => 'role_assignable_id',
    'has_roles_pivot_type' => 'role_assignable_type',
    'has_permissions_pivot_key' => 'permission_assignable_id',
    'has_permissions_pivot_type' => 'permission_assignable_type',
];
