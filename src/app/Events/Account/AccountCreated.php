<?php

namespace App\Events\Account;

use Illuminate\Foundation\Events\Dispatchable;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class AccountCreated extends ShouldBeStored
{
    use Dispatchable;

    /**
     * コンストラクタ
     *
     * @param string $uuid UUID
     * @param string $userName ユーザー名
     */
    public function __construct(
        public readonly string $uuid,
        public readonly string $userName
    ) {
    }
}
