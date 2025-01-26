<?php

namespace App\Events;

use DateTimeImmutable;
use Illuminate\Foundation\Events\Dispatchable;

class HelloWorldEvent
{
    use Dispatchable;

    /**
     * コンストラクタ
     *
     * @param \DateTimeImmutable $createdAt 作成日時
     */
    public function __construct(
        public readonly DateTimeImmutable $createdAt
    ) {
    }
}
