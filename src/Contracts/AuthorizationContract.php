<?php

namespace Blackkat98\LaravelAuthorization\Contracts;

interface AuthorizationContract
{
    public static function createNew(array $attributes);

    public static function findById(int $id);

    public static function findByName(string $name);

    public function edit(array $attributes);

    public function softDelete();
}
