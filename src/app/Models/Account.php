<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = [];

    /**
     * UUIDでモデルを検索する
     *
     * @param string $uuid UUID
     * @return Account|null
     */
    public static function uuid(string $uuid): ?Account
    {
        return static::where('uuid', $uuid)->first();
    }

    /**
     * ユーザー名でモデルを検索する
     *
     * @param string $userName ユーザー名
     * @return Account|null
     */
    public static function userName(string $userName): ?Account
    {
        return static::where('user_name', $userName)->first();
    }
}
