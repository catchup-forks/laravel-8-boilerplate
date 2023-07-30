<?php

declare(strict_types=1);

namespace App\Models\Traits;

use Webpatser\Uuid\Uuid as PackageUuid;

/**
 * Trait Uuid.
 */
trait Uuid
{
    /**
     * @param $query
     * @param $uuid
     *
     * @return mixed
     */
    public function scopeUuid($query, $uuid)
    {
        return $query->where($this->getUuidName(), $uuid);
    }

    /**
     * @return string
     */
    public function getUuidName()
    {
        return property_exists($this, 'uuidName') ? $this->uuidName : 'uuid';
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model): void {
            $model->{$model->getUuidName()} = PackageUuid::generate(4)->string;
        });
    }
}
