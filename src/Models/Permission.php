<?php

namespace Blackkat98\LaravelAuthorization\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Blackkat98\LaravelAuthorization\Contracts\AuthorizationContract;

class Permission extends Model implements AuthorizationContract
{
    use SoftDeletes;

    public static function createNew($attributes)
    {
        return self::query()->create($attributes);
    }

    public static function findById($id)
    {
        return self::query()->where('id', $id)->first();
    }

    public static function findByName($name)
    {
        return self::query()->where('name', $name)->first();
    }

    public function edit($attributes)
    {
        return $this->update($attributes);
    }

    public function softDelete()
    {
        return $this->delete();
    }
}
