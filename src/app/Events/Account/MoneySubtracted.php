<?php

namespace App\Events\Account;

use Illuminate\Foundation\Events\Dispatchable;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class MoneySubtracted extends ShouldBeStored
{
    use Dispatchable;

    // TODO: コンストラクタを作成する
}
