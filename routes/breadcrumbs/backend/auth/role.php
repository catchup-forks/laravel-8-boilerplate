<?php

declare(strict_types=1);

Breadcrumbs::for('admin.auth.role.index', static function ($trail) : void {
    $trail->parent('admin.dashboard');
    $trail->push(__('menus.backend.access.roles.management'), route('admin.auth.role.index'));
});

Breadcrumbs::for('admin.auth.role.create', static function ($trail) : void {
    $trail->parent('admin.auth.role.index');
    $trail->push(__('menus.backend.access.roles.create'), route('admin.auth.role.create'));
});

Breadcrumbs::for('admin.auth.role.edit', static function ($trail, $id) : void {
    $trail->parent('admin.auth.role.index');
    $trail->push(__('menus.backend.access.roles.edit'), route('admin.auth.role.edit', $id));
});
