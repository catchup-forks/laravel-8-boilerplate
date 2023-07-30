<?php

declare(strict_types=1);

Breadcrumbs::for('admin.dashboard', function ($trail): void {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';
