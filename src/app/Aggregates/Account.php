<?php

namespace App\Aggregates;

use App\Events\Account\AccountCreated;
use App\Events\Account\MoneyAdded;
use App\Events\Account\MoneySubtracted;
use Spatie\EventSourcing\Projections\Projection;

class Account extends Projection
{
    /** @var int 残高 */
    public int $balance = 0;

    /**
     * コンストラクタ
     *
     * @param string $uuid UUID
     * @param string $userName ユーザー名
     */
    private function __construct(
        private readonly string $uuid,
        private readonly string $userName
    ) {
    }

    /**
     * 口座を作成する
     *
     * @param string $uuid UUID
     * @param string $userName ユーザー名
     * @return Account
     */
    public static function create(string $uuid, string $userName): Account {
        // 口座作成イベントを発行
        event(new AccountCreated($uuid, $userName));

        // TODO: Accountインスタンスを作成してreturn
    }

    /**
     * 入金を行う
     *
     * @param int $amount 入金額
     * @return void
     */
    public function addMoney(int $amount): void {
        // 残高に入金
        $this->balance += $amount;

        // TODO: 入金イベントを発行
    }

    /**
     * 出金を行う
     *
     * @param int $amount 出金額
     * @return void
     */
    public function subtractMoney(int $amount): void {
        // TODO: 残高から出金

        // TODO: 出金イベントを発行
    }
}
