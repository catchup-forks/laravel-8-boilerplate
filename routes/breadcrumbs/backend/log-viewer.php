<?php

declare(strict_types=1);

Breadcrumbs::for('log-viewer::dashboard', function ($trail): void {
    $trail->parent('admin.dashboard');
    $trail->push(__('menus.backend.log-viewer.main'), url('admin/log-viewer'));
});

Breadcrumbs::for('log-viewer::logs.list', function ($trail): void {
    $trail->parent('log-viewer::dashboard');
    $trail->push(__('menus.backend.log-viewer.logs'), url('admin/log-viewer/logs'));
});

Breadcrumbs::for('log-viewer::logs.show', function ($trail, $date): void {
    $trail->parent('log-viewer::logs.list');
    $trail->push($date, url('admin/log-viewer/logs/' . $date));
});

Breadcrumbs::for('log-viewer::logs.filter', function ($trail, $date, $filter): void {
    $trail->parent('log-viewer::logs.show', $date);
    $trail->push(ucfirst($filter), url('admin/log-viewer/' . $date . '/' . $filter));
});
