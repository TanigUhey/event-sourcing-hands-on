<?php

namespace App\Events\Account;

use Illuminate\Foundation\Events\Dispatchable;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class MoneyAdded extends ShouldBeStored
{
    use Dispatchable;

    /**
     * コンストラクタ
     *
     * @param string $accountUuid アカウントULID
     * @param integer $amount 入金額
     */
    public function __construct(
        public readonly string $accountUuid,
        public readonly int $amount
    ) {
    }
}
