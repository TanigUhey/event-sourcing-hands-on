<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumAccount extends Model
{
    protected $guarded = [];

    /**
     * ユーザー名でモデルを検索する
     *
     * @param string $userName ユーザー名
     * @return PremiumAccount|null
     */
    public static function userName(string $userName): ?PremiumAccount
    {
        return static::where('user_name', $userName)->first();
    }
}
